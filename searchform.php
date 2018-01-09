<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" >
    <div class="d-flex">
        <div class="col">
            <label class="screen-reader-text" for="s"><?php echo __('Search for:'); ?></label>
            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search Barcamp Bangalore"/>
        </div>
        <div class="">
            <button type="submit" id="searchsubmit" ><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </div>
</form>