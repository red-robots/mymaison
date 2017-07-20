<div id="find-box-wrapper">
      <div id="find-box"> <?php echo do_shortcode("[tabby title='QUICK SEARCH']"); ?>
        <div id="home-search">
          <form name="dfform" action="https://mymaisonrealty.localhomesearch.net/idx/">
            <input type="hidden" name="op" value="query">
            <input type="hidden" name="_srf" value="1">
            <div class="home-search-column">
            <label class="qs">Property Type:</label>
              <select  class="qs-s" name="proptype" id="property-type">
                <option value="res">Single-family Homes</option>                
                <option value="cnd">Condos/Townhomes</option>
                <option value="mul">Multifamily</option>
                <option value="lnd">Land</option>
              </select>
             
                <input type="hidden" name="proptype" value="">
                <input type="hidden" name="area" value="">
                
                <!-- PUT THIS WHEREVER YOU WANT THE AUTOCOMPLETE TO GO --> 
                
                Subdivision/Complex:
                <input type="text" id="suggest1" name="subdivision" size="35" value=""/>
            </div>
            <div class="home-search-column2">
            <label class="qs">Min. Price:</label>
              <select  class="qs-s" name="price_min">
                <option value="">none</option>
                <option value="100000">$100,000
                <option value="150000">$150,000
                <option value="200000">$200,000
                <option value="250000">$250,000
                <option value="300000">$300,000
                <option value="350000">$350,000
                <option value="400000">$400,000
                <option value="450000">$450,000
                <option value="500000">$500,000
                <option value="600000">$600,000
                <option value="700000">$700,000
                <option value="800000">$800,000
                <option value="900000">$900,000
                <option value="1000000">$1,000,000
              </select>
              <label class="qs">Max Price:</label>
                <select  class="qs-s" name="price_max">
                  <option value="">none</option>
                  <option value="100000">$100,000
                  <option value="150000">$150,000
                  <option value="200000">$200,000
                  <option value="250000">$250,000
                  <option value="300000">$300,000
                  <option value="350000">$350,000
                  <option value="400000">$400,000
                  <option value="450000">$450,000
                  <option value="500000">$500,000
                  <option value="600000">$600,000
                  <option value="700000">$700,000
                  <option value="800000">$800,000
                  <option value="900000">$900,000
                  <option value="1000000">$1,000,000
                </select>
              
              <label class="qs">Beds:</label>
                <select  class="qs-s" name="beds">
                  <option value="">any</option>
                  <option value="1">1+</option>
                  <option value="2">2+</option>
                  <option value="3">3+</option>
                  <option value="4">4+</option>
                  <option value="5">5+</option>
                </select>
                <label class="qs">Baths:</label>
                <select   class="qs-s"name="baths">
                  <option value="">any</option>
                  <option value="1">1+</option>
                  <option value="2">2+</option>
                  <option value="3">3+</option>
                  <option value="4">4+</option>
                </select>
            </div>
            <div class="home-search-column"> MLS #: &nbsp;
              <input class="qs-tf"  type="text" name="mls" size="10" maxlength="15">
              <label class="qs">Street name:</label>
                <input class="qs-tf" type="text" name="street" size="15">
              
             
                <input class="qs-sub" type="submit" value="Quick Search">
              
              <div id="advanced-search-link"><a href="http://mymaisonrealty.localhomesearch.net/mthmap/">Or, Try our Advanced Search</a></div>
            </div>
          </form>
        </div>
        <?php echo do_shortcode("[tabby title='FIND AN AGENT']"); ?>
        <?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>
        <div class="find-box-content">
          <?php the_field("find_an_agent"); ?>
        </div>
        <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
        <?php echo do_shortcode("[tabby title='SELL WITH US']"); ?>
        <?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>
        <div class="find-box-content" id="sell-box">
          <?php the_field("sell_with_us"); ?>
        </div>
        <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
        <?php echo do_shortcode("[tabbyending]"); ?> </div>
    </div>
    
