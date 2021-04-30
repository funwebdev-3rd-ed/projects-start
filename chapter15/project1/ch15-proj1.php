<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chapter 15</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

    <link rel="stylesheet" href="css/styles.css">

  
</head>

<body>
    
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
            
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>
    
    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">

            <div class="mdl-grid">

              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--12-col mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Creating the Cookies</h2>
                </div>
                <form action="make-cookies.php" method="post">
                <div class="mdl-card__supporting-text">
                    
                        <p>
                        <select name="theme">
                            <option value="0">Choose a theme to be stored in persistent cookie</option>
                            <option>Dark</option>
                            <option>Light</option>
                            <option>Wild</option>
                        </select>
                        </p>
                        <select name="philosopher">
                            <option value="0">Choose a philosopher to be stored in session cookie</option>
                            <option>John Locke</option>
                            <option>Karl Marx</option>
                            <option>Thomas Hobbes</option>
                        </select>

                    
                </div>
                <div class="mdl-card__actions mdl-card--border">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
                          Create Cookies
                        </button>                    
                </div>
                </form>
              </div>  <!-- / mdl-cell + mdl-card -->
              
              
              <div class="mdl-cell mdl-cell--12-col mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Reading the Cookies</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    
                    <?php

                   
                   
                    ?>                     
                    
                </div>
                <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="other-page.php">
                          Go to another page in same domain
                        </a>                    
                </div>
    
 
            </div>   
           
           
            </div>  <!-- / mdl-grid -->    

        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>