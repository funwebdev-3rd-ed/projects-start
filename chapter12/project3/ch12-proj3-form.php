<?php
  include 'data.inc.php';


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  
    <title>Lab 12</title>   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">    
    <link rel="stylesheet" href="css/ch12-proj3.css">
    <script src="js/ch12-proj3.js"></script>
</head>
<body>
    <h1>Fine Art Meme Maker</h1> 
    <section class="grid-container">

    </section>     
    <form action="ch12-proj3-result.php" method="get">
        <label>Select Base Painting:</label>
        <select name="file" id="whichPainting">

        </select>
        <label>Meme 1 Text:</label>
        <input type="text" name="text1" size=50 value="Default text" />
        <label>Meme 1 Font Size:</label>
        12 <input type="range" name="size1" min=12 max=64  value=24 /> 64
        <label>Meme 2 Text:</label>
        <input type="text" name="text2" size=50 value="More text"/>   
        <label>Meme 2 Font Size:</label>
        12 <input type="range" name="size2" min=12 max=48 value=48 /> 48  
        <label>Image Width:</label>
        500 <input type="range" name="width" min=500 max=1000  value=500 /> 1000            

        <input type="submit" value="Click To See Meme" >
    </form>
   
</body>
</html>