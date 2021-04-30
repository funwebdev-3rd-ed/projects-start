<?php
include 'includes/data.inc.php';
include 'includes/art-functions.inc.php';

// TODO: start session

// is there an ID passed?
$id = 406;
if (isset($_GET['id'])) {
    $id = $_GET['id']; 
}
// find the appropriate painting/row
foreach($paintings as $p) {
    if ($p["PaintingID"] == $id) $row = $p;
}

?>

<!DOCTYPE html>
<html lang=en>   
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

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
    
<main >
    <!-- Main section about painting -->
    <section class="ui segment grey100">
        <div class="ui doubling stackable grid container">
            <div class="nine wide column">
              <img src="images/art/medium/<?php echo  $row['ImageFileName']; ?>.jpg" alt="..." class="ui big image" id="artwork">
                            
                
            </div>
            <div class="seven wide column">
                
                <!-- Main Info -->
                <div class="item">
                    <h2 class="header"><?php echo  utf8_encode($row['Title']); ?></h2>
                    <h3 ><?php echo utf8_encode($row['FirstName'] . ' ' . $row['LastName']); ?></h3>
                      <div class="meta">
                        <p><?php echo  utf8_encode($row['Excerpt']); ?></p>
                      </div>  
                </div>                          
                  
                <!-- Tabs For Details, Museum, Genre, Subjects -->
                <?php include 'includes/painting-small-tabs.inc.php'; ?>
                
                <!-- Cart and Price -->
                <?php include 'includes/cart-box.inc.php'; ?>                        
                          
            </div>
        </div>
    </section>
    
    <!-- Tabs for Description, On the Web, Reviews -->
    <?php include 'includes/painting-large-tabs.inc.php'; ?> 
        
</main>    
    

<footer class="ui black inverted segment">
    <div class="ui container">footer</div>
</footer>
</body>
</html>