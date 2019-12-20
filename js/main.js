
$(document).ready(function(){

  // Staticki slajder
  $('.carousel').carousel({
    interval: false
});

  // Hamburger
   $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');
    $toggleCollapse.click(function(){
        $nav.toggleClass('myCollapse', 1);
    })


   
    
    
  
    window.addEventListener("click",  function(event) {
      // Modal Kinezi terapija
      var modal5 = document.getElementById("myModal1");
      if (event.target == modal5) {
        document.getElementById('htmls').style.overflow = "auto";
      }
      var span2 = document.getElementById("close1");
      span2.onclick = function() {
        modal.style.display = "none";
        document.getElementById('htmls').style.overflow = "auto";
      }
      var btn5 = document.getElementsByClassName("button")[0];
      btn5.onclick = function(){
        document.getElementById('htmls').style.overflow = "hidden";
      }
      $('#myModal1').on('show.bs.modal', function(e) {
        window.location.hash = "modal";
    });
    $(window).on('hashchange', function (event) {
        if(window.location.hash != "#modal") {
            $('#myModal1').modal('hide');
        }
    });

      // Modal Elektro terapija
      var modal6 = document.getElementById("myModal2");
      if (event.target == modal6) {
        
        document.getElementById('htmls').style.overflow = "auto";
      }
      var span1 = document.getElementById("close");
      span1.onclick = function() {
        modal.style.display = "none";
        document.getElementById('htmls').style.overflow = "auto";
      }
      var btn6 = document.getElementById("btn2");
      btn6.onclick = function(){
        document.getElementById('htmls').style.overflow = "hidden";
      }
      $('#myModal2').on('show.bs.modal', function(e) {
        window.location.hash = "modal";
    });
    $(window).on('hashchange', function (event) {
        if(window.location.hash != "#modal") {
            $('#myModal2').modal('hide');
        }
    });
      // Modal Manuelna terapija
      var modal7 = document.getElementById("myModal3");
      if (event.target == modal7) {
        
        document.getElementById('htmls').style.overflow = "auto";
      }
      var span3 = document.getElementById("close2")
    span3.onclick = function() {
      modal.style.display = "none";
      document.getElementById('htmls').style.overflow = "auto";
    }
    var btn7 = document.getElementById("btn3");
    btn7.onclick = function(){
      document.getElementById('htmls').style.overflow = "hidden";
    }
    $('#myModal3').on('show.bs.modal', function(e) {
      window.location.hash = "modal";
  });
  $(window).on('hashchange', function (event) {
      if(window.location.hash != "#modal") {
          $('#myModal3').modal('hide');
      }
  });
    //Modal Patronazna terapija
      var modal8 = document.getElementById("myModal4");
      if (event.target == modal8) {
        document.getElementById('htmls').style.overflow = "auto";
      }
      var btn8 = document.getElementById("btn4");
      btn8.onclick = function(){
        document.getElementById('htmls').style.overflow = "hidden";
      }
      var span4 = document.getElementById("close3")
    span4.onclick = function() {
      modal.style.display = "none";
      document.getElementById('htmls').style.overflow = "auto";
    }
   // Modal Biography
   var modal = document.getElementById("myModal");
   var btn = document.getElementById("more");
   var span = document.getElementsByClassName("close")[0];
   btn.onclick = function() {
       modal.style.display = "block";
       document.getElementById('htmls').style.overflow = "hidden";
     }
     // When the user clicks on <span> (x), close the modal
     span.onclick = function() {
       modal.style.display = "none";
       document.getElementById('htmls').style.overflow = "auto";
     }
     
     // When the user clicks anywhere outside of the modal, close it 
     window.addEventListener("click",  function(event) {
       if (event.target == modal) {
         modal.style.display = "none";
         document.getElementById('htmls').style.overflow = "auto";
       }
    })

    $('#myModal').on('show.bs.modal', function(e) {
      window.location.hash = "modal";
  });
  $(window).on('hashchange', function (event) {
      if(window.location.hash != "#modal") {
          $('#myModal').modal('hide');
      }
  });

  

   

    

    

    var span5 = document.getElementById("close4")
    span5.onclick = function() {
      modal.style.display = "none";
      document.getElementById('htmls').style.overflow = "auto";
    }
       
     
    // Click to scroll on section
    $('li#biographyNav').click(function(){
        positionabout = $('.biography').offset().top - $('.nav-menu').height();
        $('html, body').animate({scrollTop:positionabout}, '500', 'swing');
    
    })

    $('li#therapyNav').click(function(){
      positiontherapy = $('.therapy-sec').offset().top - $('.nav-menu').height();
      $('html, body').animate({scrollTop:positiontherapy}, '500', 'swing');
    })


    $('li#packetsNav').click(function(){
      positiontherapy = $('.sec-packets').offset().top - $('.nav-menu').height();
      $('html, body').animate({scrollTop:positiontherapy}, '500', 'swing');
    })

    $('li#contactNav').click(function(){
      positiontherapy = $('.contact').offset().top - $('.nav-menu').height();
      $('html, body').animate({scrollTop:positiontherapy}, '500', 'swing');
    })

    $('.nav-brand').click(function(){
      positiontop = $('.top-page').offset().top;
      $('html, body').animate({scrollTop:positiontop}, '500', 'swing');
    })


    // Certificate slider
    var number = 800;
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: -20,
      freeMode: true,
      width: 1300,
      touchEventsTarget: 'container',
      simulateTouch: true,
      preventClicks: false,
       preventClicksPropagation: false,
       grabCursor: true
     /*  pagination: {
        el: '.swiper-pagination',
        clickable: true,
    
      }, */
    });
   

    

       
      })
      
     
 
});