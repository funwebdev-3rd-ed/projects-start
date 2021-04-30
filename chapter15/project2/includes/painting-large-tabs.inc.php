<section class="ui doubling stackable grid container">
    <div class="sixteen wide column">
    
        <div class="ui top attached tabular menu ">
          <a class="active item" data-tab="first">Description</a>
          <a class="item" data-tab="second">On the Web</a>
          <a class="item" data-tab="third">Reviews</a>
        </div>
        <div class="ui bottom attached active tab segment" data-tab="first">
         <?php echo  utf8_encode($row['Description']); ?>
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">

          <table class="ui definition very basic collapsing celled table">
              <tbody>
                <tr>
                  <td>Wikipedia Link</td>
                  <td>
                  <?php 
                    if (isset($row['WikiLink']))
                        echo  generateLink($row['WikiLink'],"View painting on Wikipedia"); 
                  ?>
                  </td>                       
                </tr>                       
                
                <tr>
                  <td>Google Link</td>
                    <td>
                      <?php 
                          if (isset($row['GoogleLink']))
                            echo generateLink($row['GoogleLink'],"View painting on Google Art Project"); ?>
                    </td>                       
                </tr>
              
                <tr>
                  <td>Google Description</td>
                  <td><?php echo  $row['GoogleDescription']; ?></td>                       
                </tr>                      
              </tbody>
          </table>

        </div>
        <div class="ui bottom attached tab segment" data-tab="third">

          <div class="ui feed">
              reviews not included in this sample data set             
          </div>                
            
        </div>            
    
    </div>        
</section> 