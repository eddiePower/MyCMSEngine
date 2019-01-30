/**
* jQuery file for jquery v: 2.2.4
* Usage: Is used to collapse the menu to a hamburger
*       by changing the class present on the page 
*       header element.
* By Eddie Power
* 2016 and again in 2019.
**/
$(function ()
{ 
    /iP/i.test(navigator.userAgent) && $(".navbar-nav").css("cursor", "pointer");
    
    //if the window size is smaller then desktop / ipad then toggle drop down menu.
    if ($(window).width() > 767) 
    {
        $(".navbar-nav").removeClass("dropdown-menu");
    }
    else if($(window).width() < 767)
    {
      $(".navbar-nav").addClass("dropdown-menu");    
    }
  //as # is a jQuery special char need escaping using \\
  //if the menu icon is clicked expand the menu
  $("a[href=\\#menuExpand]").on('click touchstart', (function(e) 
  {
     $(".navbar-nav").toggleClass("dropdown-menu");
     e.preventDefault();
  }));  
});

//run when resize event occurs - jquery stock event .resize very helpful!
$(window).resize(function () 
{
    
       //if the window size is smaller then desktop / ipad then toggle drop down menu.
    if ($(window).width() > 767) 
    {
        $(".navbar-nav").removeClass("dropdown-menu");
    }
    else if($(window).width() < 767)
    {
      $(".navbar-nav").addClass("dropdown-menu");    
    } 
});