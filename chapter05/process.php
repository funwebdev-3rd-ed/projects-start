<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Chapter 5 - Form Processor</title>
   <style>

   </style>
</head>
<body>
   <h1>Form Input</h1>
   <h2>GET Data</h2>
<?php 

  if (count($_GET) == 0)
     echo "<p><em>There are no GET variables</em></p>";
  foreach ($_GET as $key => $value) 
  { 
      echo "<strong>" . $key . "=</strong>" . $value . "</br>";
      
      if (is_array($value)) {
           for($i=0; $i < count($value); $i++){
               echo "--Index " . $i . " Selected value=" . $value[$i] . "<br/>";
           }            
      }
    
      
      
  }

 
?>  

   <h2>POST Data</h2>
 <?php 
  if (count($_POST) == 0)
     echo "<p><em>There are no POST variables</em></p>";
  foreach ($_POST as $key => $value) 
  { 
      echo "<strong>" . $key . "=</strong>" . $value . "</br>";
      
      if (is_array($value)) {
           for($i=0; $i < count($value); $i++){
               echo "--Index " . $i . " Selected value=" . $value[$i] . "<br/>";
           }            
      }      
  }  
?>    
   
</body>
</html>