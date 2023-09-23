jQuery(document).ready(function(){

    jQuery("ul").parent("li").children("a").append("<i class='fa fa-angle-down'></i>");

    jQuery(".menu ul li").click(function(){
        jQuery(this).children("ul").slideToggle(1000);
        return false;
    });

    //jQuery(".check").click(function(){
        //var width = jQuery("body").width();
       // alert(width);
    //});

    var width = jQuery("body").width();
    if(width <= 768){
        jQuery(".dropdown").show();
        jQuery(".menu").hide();
        jQuery(".open").show();
        jQuery(".close").hide();
  
    }
    else{
        jQuery(".dropdown").hide();
        jQuery(".menu").show();
    }

    jQuery(".open").click(function(){
        jQuery(".menu").slideDown(100);
        jQuery(this).hide();
        jQuery(".close").show();
        return false;
    });

    jQuery(".close").click(function(){
        jQuery(".menu").hide();
        jQuery(this).hide();
        jQuery(".open").show();
        return false;
    });

    jQuery(window).scroll(function(){
        var top = jQuery(window).scrollTop();
        //jQuery(".top").text(top);
        if(top >= 306){
            jQuery("nav").addClass("mysticky");
            jQuery(".tp").fadeIn(1000);
        }
        else{
            jQuery("nav").removeClass("mysticky");
            jQuery(".tp").fadeOut(1000);
        }
    });

    jQuery("ul li a").click(function(){
        
    });
    
    jQuery(".tp").click(function(){
        jQuery("html").animate({"scrollTop":"0"},1000);
    });

});
