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

  <!-- <div class="container">
    <h2>Rest API Client Side Demo</h2>
    <form class="form-inline" action="" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control"  placeholder="Enter Product Name" required/>
      </div>
      <button name="select" type="button"  class="btn btn-default">Select from DB</button>
      <button type="submit" name="submit" class="btn btn-default">Curl</button>
      <button type="button" name="submit2" class="btn btn-default">Get/Aja</button>
    </form>
    <p>&nbsp;</p> -->
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

<!-- <script type="text/javascript">
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
    $("button[name='select']").click(function(){
      
      var name=$("input[name='name']").val();
      
      $.get(
        "api/"+name,//注意相对路径
        function(data){
         
          $('h3').html(data.data.quantity);
        }
        )
      // $.ajax({
      //   url:"api.php",
      //   data:{
      //     name:name,
      //   },
      //   type:"POST",
      //   datatype:"json",
      //   success:function(data){
      //    $('h3').html(data.quantity);
      //  }
      //  });
    });


  });

</script>
 -->


<style type="text/css">
.active{
  display: inline-block;
}
.hidden{
  display: none;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
  $('a').click(function(){
    var para = $(this).attr('id').substr(0,6);
    $('.'+para).removeClass('hidden').addClass('active').siblings().removeClass('active').addClass('hidden');
  })

  // $('input').change(function(){
  //   //disable select button when input is not filled.
  //   if($("input[name='sel_p_name']").val()!=""){
  //     $(".select button").attr('disabled',false);
  //   }else{
  //     $(".select button").attr('disabled',true);
  //   }
  // })


})
</script>
<div>
  <a id="select_c">Select</a>|
  <a id="update_c" >Update</a>|
  <a id="delete_c" >Delete</a>|
  <a id="aditem_c" >AdItem</a>
</div>
<div>
<div class="select active">
 Product Name:<input type="text" name="sel_p_name"><br>
  <button >Select</button>
</div>


<div class="update hidden">
  Product Name: <input type="text" name="upd_p_name"><br>
  Quantity to&nbsp;<input type="number" name="upd_p_q_cur"><br>
  <button >Update</button>
</div>

<div class="delete hidden">
  Product Name: <input type="text" name="del_p_name"><br>
  <button >Delete</button>
</div>
<div class="aditem hidden">
  Product ID: <input type="text" name="add_p_id"><br>
  Product Name: <input type="text" name="add_p_name"><br>
  Product Quantity: <input type="text" name="add_p_quantity"><br>
  <button >Add</button>
</div>
</div>
<br>
<div id="result">
  
</div>


<script type="text/javascript">
  $(".select button").click(function(){
   
    var sel_p_name = $("input[name='sel_p_name']").val();
    
  $.get(
    "api/"+sel_p_name,
    function(data){
    $('#result').html('Quantity is '+data.data.quantity);
        })

//不正确
    // $.post("api.php",
    //   { sel_p_name: sel_p_name },
    //   function(data, status){
    //     $('#result').html(data.data.quantity);
    //   });
  });

  $(".update button").click(function(){
    var upd_p_name = $("input[name='upd_p_name']").val();
    
    var upd_p_q_cur = $("input[name='upd_p_q_cur']").val();
    $.get("api/"+upd_p_name,
      function(data, status){
        $('#result').html(data);
      });       
  });


  $(".delete button").click(function(){
    var del_p_name= $("input[name='del_p_name']").val();

    $.get(
      "api/"+del_p_name,
      function(data, status){
         console.log(data.data);
        $('#result').html(data.data);
      });
  });
  //   $(".aditem button").click(function(){
  //   var add_p_id = $("input[name='add_p_id']").val();
  //   var add_p_name=$("input[name='add_p_name']").val();
  //   var add_p_quantity=$("input[name='add_p_quantity']").val();
  //   $.post("api.php",
  //     { add_p_id: add_p_id,
  //       add_p_name: add_p_name,
  //       add_p_quantity: add_p_quantity },
  //     function(data, status){
  //       $('#result').html(data);
  //     });
  // });


</script>

</body>
</html>

