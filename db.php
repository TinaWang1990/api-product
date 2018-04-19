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
		$conn = new PDO('mysql:host=localhost;dbname=question4;charset=utf8mb4','root','root');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		function getItem($name){
		
			$conn->exec("SET names utf8");
		    $stmt = $conn->prepare("SELECT quantity FROM Q4 where iterm_name = :name"); 
		    $stmt->execute(
		    	array(
		    		':name'=>$name
		    	)
		    );
		    $result=$stmt->fetch();
		    return $result;
		}
	

	}catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}

	$conn = null;










 ?>