jQuery(function($){
  'use strict';
  // Adjust Slider Height
  var featured_frame = wp.media({
      title:            'Select or update media',
      button:           {
        title:          'Select this media'
      },
      multiple:         false
  });
  var card_selected,
      input_hidden;

  $('.btn_upload_media').on( 'click', function(e){
      e.preventDefault();
      featured_frame.open();
      card_selected = $(this).parent().siblings('img');
      input_hidden  = $(this).siblings('input');
  });

  featured_frame.on( 'select', function(){
    var attachement     = featured_frame.state().get( 'selection' ).first().toJSON();
    card_selected.attr( 'src', attachement.url );
    input_hidden.val( attachement.url );
  });
  


});