<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rest API Client Side Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2>Rest API Client Side Demo</h2>
    <form class="form-inline" action="" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control"  placeholder="Enter Product Name" required/>
      </div>
      <button id="select" type="button"  class="btn btn-default">Select from DB</button>
      <button type="submit" name="submit" class="btn btn-default">Curl</button>
      <button type="button" name="submit2" class="btn btn-default">Get/Aja</button>
    </form>
    <p>&nbsp;</p>
    <h3>
    <!--  <?php

     if(isset($_POST['submit'])){
      $name = $_POST['name'];
      
      $url = "192.168.33.10/api-ass21/api.php?name=".$name;
      
      $client = curl_init($url);
      curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      $response = curl_exec($client);
      
      $result = json_decode($response);
      echo $result->data; 
    }
    ?> 
 -->


  </h3>
</div>

<script type="text/javascript">
  // $(document).ready(function(){
  //   $("button[name='submmit2']").click(function(){
  //     var name=$("input[name='name']").val();
  //     // $.get(
  //     //   "api/"+name,//注意相对路径
  //     //   function(data){
  //     //     $('h3').html(data.data);
  //     //   }
  //     //   )
  //     $.ajax({
  //       url:"api.php",
  //       data:{
  //         name:name,
  //       },
  //       type:"POST",
  //       datatype:"json",
  //       success:function(data){
  //        $('h3').html(data.data);
  //      }
  //      });
  //   });


  // });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#select").click(function(){
      var name=$("input[name='name']").val();
      // $.get(
      //   "api/"+name,//注意相对路径
      //   function(data){
      //     $('h3').html(data.data);
      //   }
      //   )
      $.ajax({
        url:"api.php",
        data:{
          name:name,
        },
        type:"POST",
        datatype:"json",
        success:function(data){
         $('h3').html(data);
       }
       });
    });


  });

</script>

</body>
</html>