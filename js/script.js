var current_file = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
var doc_language = getCookie('doc_language');
console.log(doc_language);

/*Language switcher*/
	function select_menu(id){
	    var icon = $(id).find('.select-menu_icon');
	    var list = $(id).find('.select-menu_list');

	    $(icon).toggle(function(){
	        console.log('clicked');
	        $(icon).find('i').removeClass('icon-angle-down').addClass('icon-angle-up');
	        $(list).slideDown(200);
	    }, function(){
	        $(list).slideUp(200);
	        $(icon).find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
	    })

	    $(list).find('li').click(function(){
	        $(list).slideUp(200);
	        $(icon).find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
	    })

	    $(document).click(function() { 
	        $(list).slideUp(200);
	        $(icon).find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
	    })

	    $(icon).click(function(e){ 
	        e.stopPropagation(); 
	    });         
	}

/* General languages list */
	function languages_list(append_element){
	    /*
	    * array values:
	    * 1 - language shortand, 2 - language name, 3 - is active  
	    */
	    var languages = [ 
	        ['en', 'English', true], 
	        ['ru', 'Русский', true], 
	        ['es', 'Español', true], 
	        ['de', 'Deutsch', true], 
	        ['fr', 'Français', true],
	        ['pl', 'Polski', true], 
	        ['pt', 'Português', true], 
	        ['tr', 'Türk', true], 
	        ['it', 'Italiano', true]
	    ];

	    for (var i = 0; i <= languages.length - 1; i++) {
	    	var filename = 'index_' + languages[i][0] + '.html';
	    	if ( filename == current_file){
	    		var item_class = 'active'
	    	} else {
	    		var item_class = ''
	    	}

	        if (languages[i][2] == true){
	            $(append_element).append('<li class="' + item_class + '"><a href="' + filename + '"><span>' + languages[i][1] + '</span><img src="img/flags/' + languages[i][0] + '.png" height="14" width="22" alt="' + languages[i][0] + '"></a></li>');
	        }
	    }
	}

/* Working with cookies */
	function setCookie(cname, cvalue) {
	    document.cookie = cname + "=" + cvalue;
	}

	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
	        var c = ca[i].trim();
	        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
	    }
	    return "";
	}

/* Set language cookie */

	function language_cookie(selector){
		$(selector).click(function(){
			//get current filename
			var filename = $(this).find('a').attr('href');		

			if (doc_language != filename){
				setCookie('doc_language', filename);
			}
		})
	}

/* Modal languages function */
	function modal_languages(){	

		// check active language
		var active_lang = $('#modal_languages').find('.active');
		var active_filename = active_lang.find('a').attr('href');

		if (active_filename != doc_language){
			$('.modal').fadeIn(100);
			$('.modal_bg').fadeIn(100);
		}

		// close modal
		var delete_elements = '.modal_bg, .modal_remove, #modal_languages li';

		$(delete_elements).click(function(){
			$('.modal').fadeOut(100);
			$('.modal_bg').fadeOut(100);
		});

		// saving selected language in cookie
		language_cookie('#modal_languages li');		
	}



/* Scripts initialization */
/*=======================================================================*/

$(document).ready(function() {

	languages_list('#languages .select-menu_list');
	languages_list('#modal_languages');

	//Modal languages
	modal_languages();

	$('.flexslider').flexslider({
		animation: "fade",			
		slideshow: false,		 
		slideshowSpeed: 7000,
		animationDuration: 0,
		prevText: "",
		nextText: "",
		controlNav: true
	}) 

	// current year
	var date = new Date();
	$("#date").html(date.getFullYear());

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
	});

	// Copyright
	if ($(location).attr('href').indexOf("http://info.template-help.com")+1){
		$('#copyright').text('Template-Help.com');
	}
			
    // prettyphoto init
	$("a[data-gal^='prettyPhoto']").prettyPhoto({
		animationSpeed:'slow',
		theme:'facebook',
		slideshow:false,
		autoplay_slideshow: false,
		show_title: true,
		overlay_gallery: false
	}).append('<span></span>').hover(
		function(){
			$(this).find('>img').stop().animate({opacity:.5})
		},
		function(){
			$(this).find('>img').stop().animate({opacity:1})
		}
	);		

    // slide-down-box-------------------------------	
		var idArray = [],
		click_scroll = false;
		$("#nav a").each(function(index){
			idArray[index]=$(this).attr("href");
		});
		
		$('ul.list li a').prepend('<i class="icon-sample"></i>');
		$('li:first-child', "#nav").addClass('first');
		$('li:last-child', "#nav").addClass('last');

		$("#affect_all").toggle(
			function(){
				$("#nav>li").not(".act_item").addClass("open_item").find("dd").stop(true).slideDown(200);
				$(this).find('.expand').hide();
				$(this).find('.close').show();
			},
			function(){
				$("#nav>li").not(".act_item").removeClass("open_item").find("dd").stop(true).slideUp(200);
				$(this).find('.expand').show();
				$(this).find('.close').hide();
			}
		);

		$(".slide-down dt i").click(function(){
			$(this).parents("li").toggleClass("open_item").find('dd').slideToggle(300);
			return false;
		});

		$(".slide-down a").click(function(){
			click_scroll = true;
			$(window).scrollTo($(this).attr("href"), 800, function(){
				click_scroll = false;
				change_menu_item();
			});
			return false;
		});

	// Change menu item
	$(window).scroll(change_menu_item).trigger("scroll");

	function change_menu_item(){
	    if(!click_scroll){
	        $(".current").removeClass("current");
	        $(".act_item").removeClass("act_item");
	        $(".open_item").removeClass("open_item");
	        for(var i=0, lenghtArray = idArray.length; i<lenghtArray; i++){
	            if(
	                $(idArray[i]).offset().top- $(window).scrollTop() <= (($(window).height()/2)) && 
	                $(idArray[i]).offset().top- $(window).scrollTop()>=0 || 
	                $(window).scrollTop() + (($(window).height()/2)-100) > $(idArray[i]).offset().top&& 
	                $(idArray[i]).offset().top+ $(idArray[i]).height() > $(window).scrollTop() + (($(window).height()/2)))
	            {
	                    $("a[href="+idArray[i]+"]").parent("li").addClass("current");
	                    $("a[href="+idArray[i]+"]").parents("li").addClass("act_item open_item");
	            }
	        }
	        $(".act_item").find("dd").slideDown(200);
	        $("li", '#nav').not(".act_item").find("dd").stop().slideUp(200);
	    }
	}

	select_menu("#languages");
	select_menu("#versions");

	language_cookie('#languages .select-menu_list li');

})	

!function ($) {
	$(function(){	
		var $window = $(window)		
		// make code pretty
		window.prettyPrint && prettyPrint()
		// side bar
		$('#nav_container').affix({
			offset: {
				top: 80		
			}
		})
	})
}(window.jQuery) 

$(document).ready(function() { 
	var currentYear = (new Date).getFullYear();	
	$("#copyright-year").text( (new Date).getFullYear() );
}); 