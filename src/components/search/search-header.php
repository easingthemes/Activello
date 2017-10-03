<div class="nav-search"><?php
  add_filter( 'get_search_form', 'activello_header_search_filter',10,3 );
  echo get_search_form();
  remove_filter( 'get_search_form', 'activello_header_search_filter' );?>
</div>
