<div class="ui top attached tabular menu ">
    <a class="active item" data-tab="details"><i class="image icon"></i>Details</a>
    <a class="item" data-tab="museum"><i class="university icon"></i>Museum</a>
    <a class="item" data-tab="genres"><i class="theme icon"></i>Genres</a>
    <a class="item" data-tab="subjects"><i class="cube icon"></i>Subjects</a>    
</div>
                
<div class="ui bottom attached active tab segment" data-tab="details">
  <table class="ui definition very basic collapsing celled table">
    <tbody>
      <tr>
        <td>Artist</td>
        <td><?php echo generateLink('single-artist.php?id=' . $row['ArtistID'], utf8_encode($row['FirstName'] . ' ' . $row['LastName'])); ?></td>                       
      </tr>
      <tr>                       
        <td>Year</td>
        <td><?php echo  $row['YearOfWork']; ?></td>
      </tr>       
      <tr>
        <td>Medium</td>
        <td><?php echo  $row['Medium']; ?></td>
      </tr>  
      <tr>
        <td>Dimensions</td>
        <td><?php echo  $row['Width']; ?>cm x <?php echo  $row['Height']; ?>cm</td>
      </tr>        
    </tbody>
  </table>
</div>

<div class="ui bottom attached tab segment" data-tab="museum">
    <table class="ui definition very basic collapsing celled table">
      <tbody>
        <tr>
          <td>Museum</td>
          <td>
            <?php echo generateLink('single-gallery.php?id='.$row['GalleryID'], $row['GalleryName']); ?>
          </td>
        </tr>       
        <tr>
          <td>Accession #</td>
          <td>
            <?php echo  $row['AccessionNumber']; ?>
          </td>
        </tr>  
        <tr>
          <td>Copyright</td>
          <td>
            <?php echo  $row['CopyrightText']; ?>
          </td>
        </tr>       
        <tr>
          <td>URL</td>
          <td>
            <?php echo generateLink($row['MuseumLink'],"View painting at museum site"); ?>
          </td>
        </tr>        
      </tbody>
    </table>    
</div>   

<div class="ui bottom attached tab segment" data-tab="genres">
    <ul class="ui list">
      <li>Not included in this example</li>
    </ul>
</div>  

<div class="ui bottom attached tab segment" data-tab="subjects">
    <ul class="ui list">
      <li>Not included in this example</li>
    </ul>
</div>  