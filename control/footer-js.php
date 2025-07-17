<script>

function nachCaptcha() {
grecaptcha.render('recaptchaWidget3', {
'sitekey': '6Le7p8MUAAAAANqFwzEPma0e7NG4V50Jlb1almhK',
'theme': 'light',
});
}
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=nachCaptcha&render=explicit"></script>

<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/swiper.min.js"></script>
<script src="./assets/js/flickity.pkgd.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/counter.js"></script>
<script src="./assets/js/custom.js"></script>
<script src="./assets/js/aos.js"></script>

<script>
function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};
if(getUrlParameter('nach_cancellation')=='true'){
    //alert(getUrlParameter('nach_cancellation'));
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
    document.body.style.overflow = 'hidden';
    if ($(window).height() <= 767) {
      document.querySelector('.modal-content').className = "modal-content newClass";
      document.querySelector('.pop-up-content-wrap').className = "pop-up-content-wrap newscrrolClass";
    }
}



AOS.init();

    $(window).scroll(function(){
      var header = $('header'),
        scroll = $(window).scrollTop();
      if (scroll >= 300) header.addClass('fixed');
      else header.removeClass('fixed');
    });
    $(window).scroll(function(){
      var header = $('.top-arrow'),
      scroll = $(window).scrollTop();
      if (scroll >= 400) header.removeClass('display_none');
      else header.addClass('display_none');
    });


  // Model Popup
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  var btn1 = document.getElementById("myBtn1");
   var btn1 = document.getElementById("myBtn2");
  // var btn1 = document.getElementsByClassName("b2directmyBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the modal
 /* btn.onclick = function() {
    modal.style.display = "block";
    document.body.style.overflow = 'hidden';
    if ($(window).height() <= 767) {
      document.querySelector('.modal-content').className = "modal-content newClass";
      document.querySelector('.pop-up-content-wrap').className = "pop-up-content-wrap newscrrolClass";
    }
  }*/
 /* btn1.onclick = function() {
    modal.style.display = "block";
    document.body.style.overflow = 'hidden';
  }*/


  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
    document.body.style.overflow = 'scroll';
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
  }


  // Model Popup
  var loginModal = document.getElementById("loginModal");
  var loginBtn = document.getElementById("loginBtn");
  var loginBtn1 = document.getElementById("loginBtn1");
  var loginSpan = document.getElementsByClassName("bofd_closeLogin")[0];

  loginBtn.onclick = function() {
    loginModal.style.display = "block";
    document.body.style.overflow = 'hidden';
  }
  loginBtn1.onclick = function() {
    loginModal.style.display = "block";
    document.body.style.overflow = 'hidden';
  }

  loginSpan.onclick = function() {
    loginModal.style.display = "none";
    document.body.style.overflow = 'scroll';
  }
</script>

<script type="text/javascript">
  // Model Popup
  var Modal = document.getElementById("b2bmyModal");

  // Get the button that opens the modal
  var btn = document.getElementById("b2directmyBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("bofd_close")[0];

  btn.onclick = function() {
    Modal.style.display = "block";
    document.body.style.overflow = 'hidden';
  }


  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    Modal.style.display = "none";
    document.body.style.overflow = 'scroll';
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == Modal) {
      Modal.style.display = "none";
      document.body.style.overflow = 'scroll';
    }
  }
</script>
