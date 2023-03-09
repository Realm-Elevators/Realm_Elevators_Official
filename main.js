
 
const swiper = new Swiper('.swiper', {
    spaceBetween: 30,
    centeredSlides: true,      
    // Optional parameters
    loop: true,
    
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });


  
//   Container animations
$(document).ready(function(){
    

    $('.carousel').owlCarousel({
        margin: 20,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
        },
    
        loop: true,
        autoplayTimeOut: 4000,
        autoplayHoverPouse: true,
        responsive: {
            0:{
                items:1,
                nav: false
            },
    
            600:{
                items:2,
                nav: false
            },
            1000:{
                items:3,
                nav: false
            },
        }
    });
        $(window).scroll(function(){
            if(this.scrollY > 20){
                $('.navbar').addClass("sticky");
            }
            else{
                $('.navbar').removeClass("sticky");
            }
        });
    
        // Typed animation
        var type = new Typed(".typing",{
            strings: ["Freelancer", "Developer", "Blogger", "Youtuber"],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true,
        });
        var type = new Typed(".typing-2",{
            strings: ["Freelancer", "Developer", "Blogger", "Youtuber"],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true,
        });
    })   


