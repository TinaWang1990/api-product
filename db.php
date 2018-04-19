<?php 

// echo "<table style='border: solid 1px black;'>";
// 	echo "<tr><th>Id</th><th>Name</th><th>Description</th><th>Quantity</th></tr>";

// 	class TableRows extends RecursiveIteratorIterator { 
// 	    function __construct($it) { 
// 	        parent::__construct($it, self::LEAVES_ONLY); 
// 	    }

// 	    function current() {
// 	        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
// 	    }

// 	    function beginChildren() { 
// 	        echo "<tr>"; 
// 	    } 

// 	    function endChildren() { 
// 	        echo "</tr>" . "\n";
// 	    } 
// 	} 

try{
		

		function getItem($name){
		$conn = new PDO('mysql:host=localhost;dbname=question4;charset=utf8mb4','root','root');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			// $conn->exec("SET names utf8");
		    $stmt = $conn->prepare("SELECT quantity FROM Q4 where iterm_name = :name"); 
		    $stmt->execute(
		    	array(
		    		':name'=>$name
		    	)
		    );
		    $result=$stmt->fetch();
		    return $result;
		}

		function deleteItem($name){
		$conn = new PDO('mysql:host=localhost;dbname=question4;charset=utf8mb4','root','root');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "DELETE FROM Q4 WHERE iterm_name = :name";
		$stmt=$conn->prepare($sql);
		$stmt->execute(
		    	array(
		    		':name'=>$name
		    	)
		    );
		    return "Record deleted successfully";	
		}

		function updateItem($name,$quantity){
		$conn = new PDO('mysql:host=localhost;dbname=question4;charset=utf8mb4','root','root');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE Q4 SET quantity=:quantity WHERE iterm_name = :name";
			
		    $stmt = $conn->prepare($sql);
		    $stmt->execute(
		    	array(
		    		':name'=>$name,
		    		':quantity'=>$quantity
		    	)
		    );
		    echo $stmt->rowCount() . " records UPDATED successfully";
		}


		function addItem($num,$name, $quantity){
		$stmt=$conn->prepare("INSERT INTO Q4 (iterm_num, iterm_name, quantity) VALUES (:num, :name, :quantity)
			");
		$result=$stmt->execute(
		array(
			':num'=>$num,
			':name'=>$name,
			':quantity'=>$quantity
			)
		);
		return $result;
		}
	

	}catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}

	$conn = null;


	





 ?>