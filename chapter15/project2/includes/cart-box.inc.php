<div class="ui segment">
    <div class="ui form">
        <div class="ui tiny statistic">
          <div class="value">
            <?php echo  '$' . number_format($row['MSRP'],0); ?>
          </div>
        </div>
        <div class="four fields">
            <div class="three wide field">
                <label>Quantity</label>
                <input type="number">
            </div>                               
            <div class="four wide field">
                <label>Frame</label>
                <select id="frame" class="ui search dropdown">
                    <option>
                      Sample
                    </option>
                </select>
            </div>  
            <div class="four wide field">
                <label>Glass</label>
                <select id="glass" class="ui search dropdown">
                  <option>
                      Sample
                    </option>
                </select>
            </div>  
            <div class="four wide field">
                <label>Matt</label>
                <select id="matt" class="ui search dropdown">
                    <option>
                      Sample
                    </option>
                </select>
            </div>           
        </div>                     
    </div>

    <div class="ui divider"></div>

    <a class="ui labeled icon orange button" href="">
      <i class="add to cart icon"></i>
      Add to Cart
    </a>
    <a class="ui right labeled icon button" href="">
      <i class="heart icon"></i>
      Add to Favorites
    </a>        
</div>  