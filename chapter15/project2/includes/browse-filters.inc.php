

<form class="ui form" method="get" action="browse-paintings.php">
  <h3 class="ui dividing header">Filters</h3>

  <div class="field">
    <label>Artist</label>
    <select class="ui fluid dropdown" name="artist">
        <option value='0'>Select Artist</option>  
    </select>
  </div>  
  <div class="field">
    <label>Museum</label>
    <select class="ui fluid dropdown" name="museum">
        <option value='0'>Select Museum</option>  
    </select>
  </div>   
  <div class="field">
    <label>Shape</label>
    <select class="ui fluid dropdown" name="shape">
        <option value='0'>Select Shape</option>  
    </select>
  </div>   

  <button class="small ui orange button" type="submit">
    <i class="filter icon"></i> Filter 
  </button>    

</form>