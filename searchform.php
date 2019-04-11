<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="d-flex">
        <input type="text" class="search-input form-control" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e('O que você procura?', 'shape' ); ?>" autocomplete="off"/>
    </div>
</form>