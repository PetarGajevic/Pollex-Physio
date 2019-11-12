
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
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
          document.getElementById('htmls').style.overflow = "auto";
        }
      }
});