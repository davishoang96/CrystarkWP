<form id="searchform" class="navbar-form navbar-right" role="search" action="<?php echo esc_url( site_url() ); ?>" method="get">
         <div class="form-group">
             <input id="s" name="s" type="text" class="form-control" placeholder="<?php esc_attr_e( 'Search &hellip;', 'alienship' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
         </div>
         <button  class="btn btn-success" id="searchsubmit" type="submit" name="submit" class="btn btn-default">Submit</button>
 </form>
