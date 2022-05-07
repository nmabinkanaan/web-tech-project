<?php 
include_once("dbcontroller.php");
include_once("header.php");

if (!isset($_SESSION['id'] )){
  require_once("login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/addons/p5.sound.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/bmoren/p5.collide2D/p5.collide2d.min.js"></script>
  <script src="https://unpkg.com/ml5@0.3.1/dist/ml5.min.js"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
  
  <meta charset="utf-8" />
  
</head>
<body onload="javascript:getData()"> 
<div class"container">  
  <script src="unicorn.js"></script>
  <script src="train.js"></script>
  <script src="sketch.js"></script>

  
  <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">        
      <table border="1" id="table_id" style="margin-top:15px;" class="table"></table>
    </div>
    <div class="col-lg-2 text-center"></div>
    </div>
  <div id="result"></div>
  <div id="resultMaxScore"> </div>

<script>  

function getData(){  
  $.ajax({  
      url: "saveScore.php",
      type: "POST",
      dataType:"json",
      data: {"action": "show" },
      success: function(response) {
        var data = JSON.parse(JSON.stringify(response));        
        var st = "";
        $i =1;
        $.each(data, function(index){
          st += "<tr><td>"+ $i++ +"</td>";          
          st += "<td>"+data[index].name+"</td>";  
          st += "<td>"+data[index].max_score+"</td></tr>";  
        });
        $("#table_id").html(st);
      }      
  });
}
  </script>
</body>

</html>