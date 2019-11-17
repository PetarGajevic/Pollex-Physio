
$(document).ready(function(){

    $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');

    $toggleCollapse.click(function(){
        $nav.toggleClass('myCollapse');
    })

//     // Fixed navbar
//     window.onscroll = function() {myFunction()};

//     $header = document.getElementById('myHeader');
//     $sticky = $header.offsetTop;

//     function myFunction(){
//     if(window.pageYOffset > $sticky){
//         $header.classList.add("sticky");
//     }else{
//         $header.classList.remove("sticky");
//     }
// }

    // Click to scroll on section
    $('li#biographyNav').click(function(){
        positionabout = $('.biography').offset().top - $('.nav-menu').height();
        $('html, body').animate({scrollTop:positionabout}, '500', 'swing');
    
    })

    $('li#therapyNav').click(function(){
      positiontherapy = $('.therapy-sec').offset().top - $('.nav-menu').height();
      $('html, body').animate({scrollTop:positiontherapy}, '500', 'swing');
    })

    var number = 800;

    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      width: 1300,
     /*  loop:true,
      loopslides: 9, */
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
    
      },
    });

    



    // Modal
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("moreText");
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
      
      // Modal 1
      var modal1 = document.getElementById("myModal1");
      var btn1 = document.getElementById("btn1");
      var span1 = document.getElementsByClassName("close1")[0];
      btn1.onclick = function() {
        modal1.style.display = "block";
        document.getElementById('htmls').style.overflow = "hidden ";

      }
      span1.onclick = function() {
        modal1.style.display = "none";
        document.getElementById('htmls').style.overflow = "auto";
      }
      window.addEventListener("click",  function(event) {
        if (event.target == modal1) {
          modal1.style.display = "none";
          document.getElementById('htmls').style.overflow = "auto";
        }
      })

        // Modal 2
        var modal2 = document.getElementById("myModal2");
        var btn2 = document.getElementById("btn2");
        var span2 = document.getElementsByClassName("close2")[0];
        btn2.onclick = function() {
          modal2.style.display = "block";
          document.getElementById('htmls').style.overflow = "hidden";
 
        }
        span2.onclick = function() {
          modal2.style.display = "none";
          document.getElementById('htmls').style.overflow = "auto";
        }
        window.addEventListener("click",  function(event) {
          if (event.target == modal2) {
            modal2.style.display = "none";
            document.getElementById('htmls').style.overflow = "auto";
          }
        })

         // Modal 3
         var modal3 = document.getElementById("myModal3");
         var btn3 = document.getElementById("btn3");
         var span3 = document.getElementsByClassName("close3")[0];
         btn3.onclick = function() {
           modal3.style.display = "block";
           document.getElementById('htmls').style.overflow = "hidden";
  
         }
         span3.onclick = function() {
           modal3.style.display = "none";
           document.getElementById('htmls').style.overflow = "auto";
         }
         window.addEventListener("click",  function(event) {
           if (event.target == modal3) {
             modal3.style.display = "none";
             document.getElementById('htmls').style.overflow = "auto";
           }
         })

         // Modal 4
         var modal4 = document.getElementById("myModal4");
         var btn4 = document.getElementById("btn4");
         var span4 = document.getElementsByClassName("close4")[0];
         btn4.onclick = function() {
           modal4.style.display = "block";
           document.getElementById('htmls').style.overflow = "hidden";
  
         }
         span4.onclick = function() {
           modal4.style.display = "none";
           document.getElementById('htmls').style.overflow = "auto";
         }
         window.addEventListener("click",  function(event) {
           if (event.target == modal4) {
             modal4.style.display = "none";
             document.getElementById('htmls').style.overflow = "auto";
           }
        })

});