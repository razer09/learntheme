jQuery(function($){
  'use strict';

  //nice scroll 
  $("body").niceScroll({
    cursorcolor:"#08526d",
     cursoropacitymin: 0.3,
    cursorwidth:"10px",
    cursorminheight: 102,
    cursorborder:"1px solid #08526d",
    zindex: 9999999
  });


  /* Loading function */
  $(window).on('load', function() { 
   
    $(".loading , .loading .spinner").fadeOut(2000);
  });﻿


  // Adjust Slider Height
  var winH    = $(window).height(),
      upperH  = $('.upper-bar').innerHeight(),
      navH    = $('.navbar').innerHeight();
  $('.slider, .carousel-item').height(winH - ( upperH + navH ));

  // Featured Work Shuffle
  $('.featured-work ul li').on('click', function () {
    $(this).addClass('active').siblings().removeClass('active');
    if ($(this).data('class') === 'all') {
      $('.shuffle-imgs .col-md').css('opacity', 1);
    } else {
      $('.shuffle-imgs .col-md').css('opacity', '.08');
      $($(this).data('class')).parent().css('opacity', 1);
    }
  });

    var img,thubnurl;
    //image thubnail
  $("ul.products li.product").on({
    mouseenter: function(){
        img= $( this ).find('a img').attr( 'src');
        thubnurl= $( this ).find('.product_thubnai').val();
        if( thubnurl !== '' ){
            $( this ).find('a img').fadeOut(0, function(){
               $( this ).attr( 'srcset', thubnurl );
            }).fadeIn(100);
        }
    }, 
    mouseleave: function(){
        if( thubnurl !== '' ){
            $( this ).find('a img').fadeOut(0, function(){
               $( this ).attr( 'srcset', img );
            }).fadeIn(100);
        }
    }
  });

  //fixed menu 
  $( '.fixed-menu .fa-shopping-basket' ).on('click', function() {
      
    $(this).parent('.fixed-menu').toggleClass('is-visible');

    if ( $(this).parent('.fixed-menu').hasClass('is-visible') ) {

      $(this).parent('.fixed-menu').animate({ left: 0,},500);

      $( 'body' ).animate({ paddingLeft: '300px',},500);

    }else{

      $(this).parent('.fixed-menu').animate({left: '-300px',},500);

      $( 'body' ).animate({ paddingLeft: 0,},500);

    }

  });
   

   //Refrecher fragement  
   
  function refresh_fragments() {
    console.log('fragments refreshed!');
    $( document.body ).trigger( 'wc_fragment_refresh' );
  }

  refresh_fragments();
  setInterval(refresh_fragments, 60000);
      function refresh_cart_fragment() {
      $.ajax( $fragment_refresh );
  } 
  

  $( '#ex_register_form' ).on( 'submit', function( e ){
    e.preventDefault();

    $( '#ex_status' ).html(
      '<div class="alert alert-info col-md-12" role="alert">Please wait your count is been created</div>'
    );

    $(this).hide();

      var form    =           {
          action:                 'ex_create_account',
          name:                   $( '#ex_registration_name' ).val(),
          email:                  $( '#ex_registration_email' ).val(),
          user_name:              $( '#ex_registration_username' ).val(),
          password:               $( '#ex_registration_password' ).val(),
          confirm_password:       $( '#ex_registration_confirm_password' ).val(),
          _wpnonce:               $( '#_wpnonce' ).val()
      };
      
      $.post( ex_object.ajax_url, form ).always( function( respond ){

          if( respond.status == 2 ){
            $( '#ex_status' ).html(
              '<div class="alert alert-success col-md-12" role="alert">Acount created!!</div>'
            );  
            location.href =  ex_object.home_url;           
          }else{
            $( '#ex_status' ).html(
              '<div class="alert alert-danger col-md-12" role="alert">unable username and email.</div>'
            );
            console.log(respond.desc);
            $( '#ex_register_form' ).show();  
          }

      } );
        /*optional stuff to do after success */
      });

$( '#ex_login_form' ).on( 'submit', function( e ){
    e.preventDefault();

    $( '#login_statu' ).html(
      '<div class="alert alert-info col-md-12 " role="alert">Please wait ...</div>'
    ).show();

    $(this).hide();

      var form    =           {
          action:                 'ex_login',
          name:                   $( '#ex_login_name' ).val(),
          password:               $( '#ex_login_password' ).val(),
          _wpnonce:               $( '#_wpnonce' ).val()
      };
      
      $.post( ex_object.ajax_url, form ).always( function( respond ){

          if( respond.status == 2 ){
            $( '#login_statu' ).html(
              '<div class="alert alert-success col-md-12" role="alert">Login avec success!!</div>'
            );  
            location.href =  ex_object.home_url;           
          }else{
            $( '#login_statu' ).html(
              '<div class="alert alert-danger col-md-12" role="alert">unable username and email.</div>'
            );
            console.log(respond.desc);
            $( '#ex_login_form' ).show();  
          }

      } );
        /*optional stuff to do after success */
      });

});


