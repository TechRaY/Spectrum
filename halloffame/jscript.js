jQuery(document).ready(function(){
	
		var navOffset=jQuery("nav").offset().top;
		
		jQuery(window).scroll(function(){
		var scrollPos=jQuery(window).scrollTop();
		
		if(scrollPos >= navOffset){
			jQuery("nav").addClass("navbar-fixed-top");
			jQuery("#mar,#form1").addClass("carousel-top");
			jQuery("#cu_h2,#au_mar").addClass("mar-top");
			jQuery("#hof_sec").addClass("hof-top");
		}else{
			jQuery("nav").removeClass("navbar-fixed-top");
			jQuery("#mar,#form1").removeClass("carousel-top");
			jQuery("#cu_h2,#au_mar,#hof_sec").removeClass("mar-top");
			jQuery("#hof_sec").removeClass("hof-top");
		}
			
		});
		

});