
jQuery(document).ready(function($) {  

$(window).load(function() {	
    
	$('#preloader').fadeOut('slow',function(){$(this).remove();});
    
    
    /*
    $('#pageHolder0>.bg1>.oswald1txt1').stop().css({scale:0});
    $('#pageHolder0>.bg1>.oswald1txt2').stop().css({scale:0});
    $('#pageHolder0>.bg1>.batmantxt1').css({scale:0});
    $('#pageHolder0>.bg1>.batmantxt2').css({scale:0});  
    */
   
   
   
   /******************* SLIDER 1 ************************/
   

   
    $('.slide-1').on('show',function(){
          
         $('.slide-1>.stickman_sl1>img').stop().css({'height':"0%", top: '217px'});
          $('.slide-1>.dialog_sl1').stop().css({'margin-top': "-500px"});
          $('.slide-1 #arrow_sl1, .slide-1 #arrow_sl1 em').stop().css({'display': "none"});
          $('.slide-1 #focus_1').stop().css({'display': "none"});
          
          setTimeout(function(){$('.slide-1 #arrow_sl1, .slide-1 #arrow_sl1 em').stop().css({'display': "block"})}, 1200);
          setTimeout(function(){$('.slide-1 #focus_1').stop().css({'display': "block"})}, 1700);     
          
          $('.slide-1 .arrow').stop().css({'opacity': "0"});
   
          setTimeout(function(){$('.slide-1 .arrow').stop().animate({'opacity': "1"}, 10)}, 1000);   
          setTimeout(function(){$('.slide-1 #arrow_sl1').sprite({no_of_frames: 8, play_frames: 8})}, 900);
          setTimeout(function(){$('.slide-1 #focus_1').sprite({no_of_frames: 6, play_frames: 6})}, 1400);
      
        
          $( ".slide-1>.stickman_sl1>img" ).stop().delay(500).animate({height: "100%", top: "0"}, 950, 'easeOutElastic' );
          $( ".slide-1>.dialog_sl1" ).stop().delay(700).animate({marginTop: "0px"}, 550, 'easeOutExpo');
      
    });
    
   
    $('.slide-2').on('show',function(){
   	    
   	    
          $('.slide-2>.stickman_sl2>img').stop().css({'height':"0%", top: '217px'});
          $('.slide-2>.dialog_sl2').stop().css({'margin-top': "-500px"});
          $('.slide-2 #arrow_sl2, .slide-2 #arrow_sl2 em').stop().css({'display': "none"});
          $('.slide-2 #focus_2').stop().css({'display': "none"});
          
          setTimeout(function(){$('.slide-2 #arrow_sl2, .slide-2 #arrow_sl2 em').stop().css({'display': "block"})}, 1200);
          setTimeout(function(){$('.slide-2 #focus_2').stop().stop().css({'display': "block"})}, 1700);  
          
          $('.slide-2 .arrow').stop().css({'opacity': "0"});
          
          setTimeout(function(){$('.slide-2 .arrow').stop().animate({'opacity': "1"}, 10)}, 1000); 
          setTimeout(function(){$('.slide-2 #arrow_sl2').sprite({no_of_frames: 7, play_frames: 7})}, 900);
          setTimeout(function(){$('.slide-2 #focus_2').sprite({no_of_frames: 7, play_frames: 7})}, 1400);
      
        
          $( ".slide-2>.stickman_sl2>img" ).stop().delay(500).animate({height: "100%", top: "0"}, 950, 'easeOutElastic' );
          $( ".slide-2>.dialog_sl2" ).stop().delay(700).animate({marginTop: "0px"}, 550, 'easeOutExpo');
      
    });
       
   
    $('.slide-3').on('show',function(){
   	    
   	    
          $('.slide-3>.stickman_sl3>img').stop().css({'height':"0%", top: '217px'});
          $('.slide-3>.dialog_sl3').stop().css({'margin-top': "-500px"});
          $('.slide-3 #arrow_sl3, .slide-3 #arrow_sl3 em').stop().css({'display': "none"});
          $('.slide-3 #focus_3').stop().css({'display': "none"});
          
          setTimeout(function(){$('.slide-3 #arrow_sl3, .slide-3 #arrow_sl3 em').stop().css({'display': "block"})}, 1200);
          setTimeout(function(){$('.slide-3 #focus_3').stop().css({'display': "block"})}, 1700);   
          
          $('.slide-3 .arrow').stop().css({'opacity': "0"});
          
          
          setTimeout(function(){$('.slide-3 .arrow').stop().animate({'opacity': "1"}, 10)}, 1000);    
          setTimeout(function(){$('#arrow_sl3').sprite({no_of_frames: 6, play_frames: 6})}, 900);
          setTimeout(function(){$('#focus_3').sprite({no_of_frames: 7, play_frames: 7})}, 1400);
      
        
          $( ".slide-3>.stickman_sl3>img" ).stop().delay(500).animate({height: "100%", top: "0"}, 950, 'easeOutElastic' );
          $( ".slide-3>.dialog_sl3" ).stop().delay(700).animate({marginTop: "0px"}, 550, 'easeOutExpo');
      
    });

    
   
   /******************** SLIDER 2 ************************/
   
   
    $('.slide-21').on('show',function(){
   	    
   	    
          $('.slide-21>.stickman_sl1>img').stop().css({'height':"0%", top: '217px'});
          $('.slide-21>.dialog_sl1').stop().css({'margin-top': "-500px"});
          $('.slide-21 #arrow_sl2_1, .slide-21 #arrow_sl2_1 em').stop().css({'display': "none"});
          $('.slide-21 #focus2_1').stop().css({'display': "none"});
          
          setTimeout(function(){$('.slide-21 #arrow_sl2_1, .slide-21 #arrow_sl2_1 em').stop().css({'display': "block"})}, 1200);
          setTimeout(function(){$('.slide-21 #focus2_1').stop().css({'display': "block"})}, 1700);          
          
          $('.slide-21 .arrow').stop().css({'opacity': "0"});
          
          setTimeout(function(){$('.slide-21 .arrow').stop().animate({'opacity': "1"}, 10)}, 1000);   
          setTimeout(function(){$('.slide-21 #arrow_sl2_1').sprite({ no_of_frames: 8, play_frames: 8})}, 900);
          setTimeout(function(){$('.slide-21 #focus2_1').sprite({ no_of_frames: 9, play_frames: 9})}, 1400);
      
        
          $( ".slide-21>.stickman_sl1>img" ).stop().delay(500).animate({height: "100%", top: "0"}, 950, 'easeOutElastic' );
          $( ".slide-21>.dialog_sl1" ).stop().delay(700).animate({marginTop: "0px"}, 550, 'easeOutExpo');
      
    });
    
   
    $('.slide-22').on('show',function(){
   	    
   	    
          $('.slide-22>.stickman_sl2>img').stop().css({'height':"0%", top: '217px'});
          $('.slide-22>.dialog_sl2').stop().css({'margin-top': "-500px"});
          $('.slide-22 #arrow_sl2_2, .slide-22 #arrow_sl2_2 em').stop().css({'display': "none"});
          $('.slide-22 #focus2_2').stop().css({'display': "none"});
          
          setTimeout(function(){$('.slide-22 #arrow_sl2_2, .slide-22 #arrow_sl2_2 em').stop().css({'display': "block"})}, 1200);
          setTimeout(function(){$('.slide-22 #focus2_2').stop().css({'display': "block"})}, 1700);
        
          
          $('.slide-22 .arrow').stop().css({'opacity': "0"});
          
          setTimeout(function(){$('.slide-22 .arrow').stop().animate({'opacity': "1"}, 200)}, 900);   
          setTimeout(function(){$('.slide-22 #arrow_sl2_2').sprite({no_of_frames: 7, play_frames: 7})}, 900);
          setTimeout(function(){$('.slide-22 #focus2_2').sprite({no_of_frames: 5, play_frames: 5})}, 1400);
      
        
          $( ".slide-22>.stickman_sl2>img" ).stop().delay(500).animate({height: "100%", top: "0"}, 950, 'easeOutElastic' );
          $( ".slide-22>.dialog_sl2" ).stop().delay(700).animate({marginTop: "0px"}, 550, 'easeOutExpo');
      
    });
       
   
    
      /******************** SLIDER 3 ************************/
   
   
    $('.slide-31').on('show',function(){
   	    
   	    
          $('.slide-31>.stickman_sl1>img').stop().css({'height':"0%", top: '217px'});
          $('.slide-31>.dialog_sl1').stop().css({'margin-top': "-500px"});
          $('.slide-31 #arrow_sl3_1, .slide-31 #arrow_sl3_1 em').stop().css({'display': "none"});
          $('.slide-31 #focus3_1').stop().css({'display': "none"});
          
          setTimeout(function(){$('.slide-31 #arrow_sl3_1, .slide-31 #arrow_sl3_1 em').stop().css({'display': "block"})}, 1200);
          setTimeout(function(){$('.slide-31 #focus3_1').stop().css({'display': "block"})}, 1700);
        
          
          $('.slide-31 .arrow').stop().css({'opacity': "0"});
          
          setTimeout(function(){$('.slide-31 .arrow').stop().animate({'opacity': "1"}, 200)}, 900);   
          setTimeout(function(){$('.slide-31 #arrow_sl3_1').sprite({no_of_frames: 7, play_frames: 7})}, 900);
          setTimeout(function(){$('.slide-31 #focus3_1').sprite({no_of_frames: 5, play_frames: 5})}, 1400);
      
        
          $( ".slide-31>.stickman_sl1>img" ).stop().delay(500).animate({height: "100%", top: "0"}, 950, 'easeOutElastic' );
          $( ".slide-31>.dialog_sl1" ).stop().delay(700).animate({marginTop: "0px"}, 550, 'easeOutExpo');
      
    });
    
   
    $('.slide-32').on('show',function(){
   	    
   	    
          $('.slide-32>.stickman_sl2>img').stop().css({'height':"0%", top: '217px'});
          $('.slide-32>.dialog_sl2').stop().css({'margin-top': "-500px"});
          $('.slide-32 #arrow_sl3_2, .slide-32 #arrow_sl3_2 em').stop().css({'display': "none"});
          $('.slide-32 #focus3_2').stop().css({'display': "none"});
          
          setTimeout(function(){$('.slide-32 #arrow_sl3_2, .slide-32 #arrow_sl3_2 em').stop().css({'display': "block"})}, 1200);
          setTimeout(function(){$('.slide-32 #focus3_2').stop().css({'display': "block"})}, 1700);
        
          
          $('.slide-32 .arrow').stop().css({'opacity': "0"});
          
          setTimeout(function(){$('.slide-32 .arrow').stop().animate({'opacity': "1"}, 200)}, 900);   
          setTimeout(function(){$('.slide-32 #arrow_sl3_2').sprite({no_of_frames: 11, play_frames: 11})}, 900);
          setTimeout(function(){$('.slide-32 #focus3_2').sprite({no_of_frames: 6, play_frames: 6})}, 1400);
      
        
          $( ".slide-32>.stickman_sl2>img" ).stop().delay(500).animate({height: "100%", top: "0"}, 950, 'easeOutElastic' );
          $( ".slide-32>.dialog_sl2" ).stop().delay(700).animate({marginTop: "0px"}, 550, 'easeOutExpo');
      
    });
       
   
    $('.slide-33').on('show',function(){
   	    
   	    
          $('.slide-33>.stickman_sl3>img').stop().css({'height':"0%", top: '217px'});
          $('.slide-33>.dialog_sl3').stop().css({'margin-top': "-500px"});
          $('.slide-33 #fire').css({'display': "none"});
          
          setTimeout(function(){$('.slide-33 #fire').stop().css({'display': "block"})}, 1200);
        
          
          $('.slide-33 .arrow').stop().css({'opacity': "0"});
          setTimeout(function(){$('.slide-33 #fire').sprite({no_of_frames: 8, play_frames: 8})}, 900);
      
        
          $( ".slide-33>.stickman_sl3>img" ).stop().delay(500).animate({height: "100%", top: "0"}, 950, 'easeOutElastic' );
          $( ".slide-33>.dialog_sl3" ).stop().delay(700).animate({marginTop: "0px"}, 550, 'easeOutExpo');
      
    });
    
   

});

});