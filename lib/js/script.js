 /*home*/
function getSideNav()
{
    
    

    if (document.getElementById('toggle').checked) 
    {
       
        $('nav').addClass('display-nav-sm');
               
        
    } else {
        
        $('nav').removeClass('display-nav-sm');

    }

    
}








$(document).on("click",".menu-item a", function (event) {
    

    child = $(this).next();


    
    $(child).toggleClass('show-sub-menu');
    

   
  
})





jQuery(document).ready(function () {

   //remove empty link

   $('[href="#"]').removeAttr('href');

    

    

    

    
   
    $('.investing-widget body').css('background','#FAFAFA');


    $('.word-carousel').slick({
        dots: true,

        infinite: true,
        speed: 400,
        fade: true,
        cssEase: 'linear',
        autoplay: true,

        pauseOnFocus: true
    });




    /*view-services*/

    $('.function-carousel').slick({
        dots: true,

        infinite: true,
        speed: 400,

        cssEase: 'linear',
    });

    /*single-project*/

    $('.single-project-carousel').slick({
        dots: true,

        infinite: true,
        speed: 400,
        fade: true,
        cssEase: 'linear',
        autoplay: true,

        pauseOnFocus: true
    });









    $(window).scroll(function () {



        var navBarHeight = Number($('.main-header').css('height').replace(/[^-\d\.]/g, '')) + 300;





        if ($(window).scrollTop() > navBarHeight) {

            $('.main-header').addClass('fixed-header show-header slideInDown');
            
            $('.main-header').removeClass('hide-header');
        
           
            
           

            $('nav>ul>li>a').addClass('change-nav-font-color');

            $('label.hamburger').addClass('hamburger-color');
            
            $('.header-wrapper').css('height','120px');
            
        } else {
           
            $('.main-header').removeClass('hide-header');
           
            
            $('.main-header').removeClass('fixed-header show-header slideInDown');

            

            $('nav>ul>li>a').removeClass('change-nav-font-color');
            $('label.hamburger').removeClass('hamburger-color');
            $('.header-wrapper').css('height','0');
        }




        


    });

    if ($(window).scrollTop()==0) {


        
        $('.main-header').removeClass('hide-header');

    }
    




});