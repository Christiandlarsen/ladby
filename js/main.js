jQuery(document).ready(function(){       
    var scroll_start = 0;
    var startchange = jQuery('#site-ship-info');
    var offset = startchange.offset();
    if (startchange.length)
    jQuery(document).scroll(function() { 
    scroll_start = jQuery(this).scrollTop();
    if(scroll_start > offset.top) {
      jQuery('.navbar-inverse').stop().animate({
              backgroundColor:'#181818',
              opacity: 0.8
          }, 400, "linear");
       } else {
           $('.navbar-inverse').stop().animate({
               backgroundColor:'transparent'
           }, 250, "linear");
       }
    });
});

jQuery('#fb-share-btn').click(function() {
    window.open('https://www.facebook.com/sharer/sharer.php?sdk=joey&u=https%3A%2F%2Fwww.facebook.com%2Fvikingemuseetladby%2F%3Fref%3Dts%26fref%3Dts&display=popup&ref=plugin&src=share_button','name','width=600,height=400') 
});


jQuery('.navbar-toggle.collapsed').click(function() {
    jQuery('.navbar-inverse').animate({
              backgroundColor:'#181818',
              opacity: 0.8
    }, 350, "linear");
});


jQuery('#site-video').click(function(){
    jQuery(this).html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/qHJKfR3EJwE?autoplay=1;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>')
});

jQuery('.thumbnail-container').click(function() {
    var modalContent = jQuery(this).parent().find('.modal-content').html();
    var modalHeader = jQuery(this).parent().find('.thumbnail-title').html();
    
    jQuery('body').append('<div class="mask modal-close"></div>');
    jQuery('.mask').animate({
        backgroundColor: 'black',
        opacity: 0.8
    }, 500);
    jQuery('body').append('<div id="modal"> <h2>' + modalHeader + '</h2> <i class="fa fa-times modal-close"></i> '
 + modalContent + '<input class="btn center-block modal-close" type="submit" value="Luk"></div>');
    jQuery('#modal').animate({
        top: '10%',
        opacity: 1,
    }, 500);
    
    jQuery('.modal-close').click(function() {
        jQuery('#modal').animate({
            top: '20%',
            opacity: 0,
        }, 550);
        
        jQuery('.mask').animate({
            opacity: 0,
        }, 550);
        
        setTimeout(function() {
            jQuery('#modal').remove();
            jQuery('.mask').remove();
        }, 550);
    });
    
});

jQuery('.thumbnail-container').hover(
    function() {
        jQuery(this).find('.thumbnail-read').animate({
            opacity: 1,
        }, 350 );
    },
    function() {
        jQuery(this).find('.thumbnail-read').animate({
            opacity: 0,
        }, 350);
    }
);

jQuery('.menu-item').click(function(){
    var thisLink = jQuery(this).find('a').prop('hash');
    jQuery('html, body').animate({
        scrollTop: jQuery(thisLink).offset().top
    }, 750);
});

