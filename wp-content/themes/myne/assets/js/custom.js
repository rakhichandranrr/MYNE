

//STICKY-HEADER START 

window.onscroll = function() {myFunction()};
var header = document.getElementById("mainHeader");
var sticky = header.offsetTop;

function myFunction() {

  if (window.pageYOffset > sticky) {

    header.classList.add("sticky");

  } else {

    header.classList.remove("sticky");

  }

}
//STICKY-HEADER END 




// MENU-SCRIPT START
function darken_screen(yesno){
  if( yesno == true ){
      document.querySelector('.screen-darken').classList.add('active');
  }
  else if(yesno == false){
      document.querySelector('.screen-darken').classList.remove('active');
  }
}

function close_offcanvas(){
  darken_screen(false);
  document.querySelector('.mobile-offcanvas.show').classList.remove('show');
  document.body.classList.remove('offcanvas-active');
}

function show_offcanvas(offcanvas_id){
  darken_screen(true);
  document.getElementById(offcanvas_id).classList.add('show');
  document.body.classList.add('offcanvas-active');
}

document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('[data-trigger]').forEach(function(everyelement){
      
      let offcanvas_id = everyelement.getAttribute('data-trigger');
      
      everyelement.addEventListener('click', function (e) {
          e.preventDefault();
          show_offcanvas(offcanvas_id);
            
      });
  });

  document.querySelectorAll('.btn-close').forEach(function(everybutton){
      
      everybutton.addEventListener('click', function (e) {
          e.preventDefault();
          close_offcanvas();
        });
  });

  document.querySelector('.screen-darken').addEventListener('click', function(event){
      close_offcanvas();
  });
  
}); 
// CANVAS-MENU  END




// SCROLL-LEFT-RIGHT START
document.addEventListener('DOMContentLoaded', function() {
  var links = document.querySelectorAll('ul.scrolRL li a');
  
  // Function to scroll to the right end of the container
  function scrollToRightEnd(container) {
      container.scrollLeft = container.scrollWidth;
  }
  
  // Function to scroll to the left end of the container
  function scrollToLeftEnd(container) {
      container.scrollLeft = 0;
  }

  // Observer configuration
  var observerConfig = { attributes: true, subtree: true };

  // Callback function to handle changes to the class attribute
  function classChangeCallback(mutationsList, observer) {
      for(var mutation of mutationsList) {
          if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
              var target = mutation.target;
              var container = target.closest('ul.scrolRL');
              
              // Check if the clicked link is the first or last child and if it has the "active" class
              var isFirstChildActive = target.parentElement === container.firstElementChild && target.classList.contains('active');
              var isLastChildActive = target.parentElement === container.lastElementChild && target.classList.contains('active');

              // Scroll to the left end if the link is the first child and active, otherwise scroll to the right end
              if (isFirstChildActive) {
                  scrollToLeftEnd(container);
              } else if (isLastChildActive) {
                  scrollToRightEnd(container);
              }
          }
      }
  }

  // Create a new observer instance
  var observer = new MutationObserver(classChangeCallback);

  // Start observing the target links for changes in attributes
  links.forEach(function(link) {
      observer.observe(link, observerConfig);
  });
});
// SCROLL-LEFT-RIGHT END

// SCROLL-TO PRICE 
// $(document).ready(function(){
//   // Check if there's a hash in the URL
//   var hash = window.location.hash;
//   if(hash) {
//     // Smooth scroll to the section corresponding to the hash
//     $('html, body').animate({
//       scrollTop: $(hash).offset().top
//     }, 800);
//   }
// });
// SCROLL-TO PRICE END



// SCROLL-ACTIVE
$(document).ready(function() {
  var $menuLink = $('ul.navbar-nav li a#pricemenu');
  var $section = $('#price');

  $(window).on('scroll', function() {
    var scrollPosition = $(this).scrollTop();
    var sectionTop = $section.offset().top;

    if (scrollPosition >= sectionTop - 50) { // Adjust as needed
      $menuLink.addClass('active');
    } else {
      $menuLink.removeClass('active');
    }
  });
});
// SCROLL-ACTIVE END




 // Typed.js (Type_writter effcet)
 var typed = new Typed('#typed', {
  strings: [
      'net worth?', 
      'budgeting?',
      'investing?',
      'estate Planning?'
  ],
  typeSpeed: 70,
  backSpeed: 0,
  startDelay: 10,
  cursorChar: '_',
  shuffle: false,
  smartBackspace: false,
  loop: true,
  loopCount: Infinity
});