<?php
session_start();

include 'includes/data.inc.php';
include 'includes/art-functions.inc.php';
$filter = "All Paintings [Top 20]";  
   
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="css/semantic.js"></script>
    <script src="js/misc.js"></script>
    
    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
</head>
<body >
    
<?php include 'includes/art-header.inc.php'; ?>
    
<main class="ui segment doubling stackable grid container">
    <section class="four wide column">
        <?php include 'includes/browse-filters.inc.php'; ?>
    </section>
    
    <section class="twelve wide column">
        <h1 class="ui header">Paintings</h1>
        <h3 class="ui sub header"><?php echo $filter; ?></h3>
        <ul class="ui divided items" id="paintingsList">
            
          <?php  foreach ($paintings as $work) { ?>

          <li class="item">
            <a class="ui small image" href="single-painting.php?id=<?php echo $work['PaintingID']; ?>"><img src="images/art/works/square-medium/<?php echo $work['ImageFileName']; ?>.jpg"></a>
            <div class="content">
              <a class="header" href="single-painting.php?id=<?php echo $work['PaintingID']; ?>"><?php echo utf8_encode($work['Title']); ?></a>
              <div class="meta"><span class="cinema"><?php echo makeArtistName($work['FirstName'],$work['LastName']); ?></span></div>        
              <div class="description">
                <p><?php echo utf8_encode($work['Excerpt']); ?></p>
              </div>
              <div class="meta">     
                  <strong><?php echo '$' . number_format($work['MSRP'],0); ?></strong>        
              </div>        
              <div class="extra">
                <a class="ui icon orange button" href="cart.php?id=<?php echo $work['PaintingID']; ?>"><i class="add to cart icon"></i></a>
                <a class="ui icon button" href=""><i class="heart icon"></i></a>  
              </div>        
            </div>      
          </li>
            
          <?php } ?>

        </ul>        
    </section>  
   
</main>    
    
<footer class="ui black inverted segment">
  <div class="ui container">footer for later</div>
</footer>

</body>
</html>