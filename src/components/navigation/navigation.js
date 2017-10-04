jQuery( document ).ready( function( $ ){
  if ( $( window ).width() >= 767 ){
    $( '.navbar-nav > li.menu-item > a' ).click( function(){
      if( $( this ).attr('target') !== '_blank' ){
        window.location = $( this ).attr( 'href' );
      }else{
        var win = window.open($( this ).attr( 'href' ), '_blank');
        win.focus();
      }
    });
  }
});
