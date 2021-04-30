<?php
include 'includes/travel-config.inc.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 14</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
   
    <link rel="stylesheet" href="css/styles.css" />

</head>

<body>
    <header>
        <form action="ch14-proj1.php" method="get" >
          <div class="form-inline">
          <select name="continent" >
            <option value="0">Select Continent</option>
          </select>     
          
          <select name="country">
            <option value="0">Select Country</option>
          </select>    
          <input type="text"  placeholder="Search title" name=title>
          <button type="submit" class="btn-primary">Filter</button>
          <button type="submit" class="btn-secondary">Reset</button>
          </div>
        </form>
    </header>   
                                    
    <main >
        <ul >

            <li>
                link+img here
            </li>        

          </ul>       

      
      </main>

</body>

</html>