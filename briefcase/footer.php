<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		<!--Footer Section Starts-->
<section class="footer" style="z-index: 1;">
  <footer class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="colophon"> <a class="home-link" href="#"><img src="<?php bloginfo('template_url');?>/images/Briefcase_Logo_White.png" alt=""></a>
          <p class="copy">© Briefcase 2016</p>
        </div>
        <ul>
          <li class="col-title">Stay in Touch</li>
<<<<<<< HEAD
          <li><a href="mailto:essentials@thebriefcase.co" target="_blank">Contact Us</a></li>
=======
          <li><a href="mailto:essentials@thebriefcase.co" target="_blank">Contact Us</a></li>
>>>>>>> 8c6702d17246eef6d759169356d1347e40e8ce9d
          <ul class="social">
            <li><a href="#" target="_new"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" target="_new"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" target="_new"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" target="_new"></i></a></li>
            <li><a href="#"><i class="fa fa-rss" target="_new"></i></a></li>
          </ul>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-9">
        <div class="row">
          <ul class="col-xs-12 col-sm-12 col-md-4">
            <li class="col-title">Using Briefcase</li>
            <ul>
              <li><a href="#">Features</a></li>
              <li><a data-nav=".quotes" href="#">Customers</a></li>
              <li><a href="pricing">Pricing and Plans</a></li>
              <li><a href="https://app.thebriefcase.co/users/sign_up" class="text-primary">Sign Up Free</a></li>
            </ul>
          </ul>
          <ul class="col-xs-12 col-sm-12 col-md-4">
            <li class="col-title">About</li>
            <ul>
              <li><a href="about">Company</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#" target="_blank">Track</a></li>
            </ul>
          </ul>
          <ul class="col-xs-12 col-sm-12 col-md-4">
            <li class="col-title">Support</li>
            <ul>
              <li><a href="terms-of-service">Terms of Service</a></li>
              <li><a href="security">Security</a></li>
              <li><a href="privacy-policy">Privacy Policy</a></li>
            </ul>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</section>
<!--Footer Section Ends-->
</div>
<div class="clearfix"></div>
<script src="<?php bloginfo('template_url');?>/js/jquery-2.1.1.min.js"></script>
 
<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.mb.YTPlayer.js"></script>
<script src="<?php bloginfo('template_url');?>/js/user.js"></script>

<script>
      $(function() {
        $( "#freestuff>a" ).on( "click", function() { //Click
          $( "#connect" ).slideToggle( function(){
                if ($(this).is(":visible")) { //Check to see if element is visible then scroll to it
                    $('html,body').animate({ //animate the scroll
                        scrollTop: $(this).offset().top - 25 // the - 25 is to stop the scroll 25px above the element
                    }, "slow")
                }
            });
          return false; //This works similarly to event.preventDefault(); as it stops the default link behavior
        });
      });
      
        $(document).ready(function () {
                    $(window).scroll(function () {
            var s = $(this).scrollTop();
            if (s > 100) {
              $('#nav').addClass('fxd');
            }else{
              $('#nav').removeClass('fxd');
            }
            if (s > 897) {
              $('#nav').addClass('in');
            }else{
              $('#nav').removeClass('in');
            }
          });
          
          $(".navbar-nav li a[data-nav], .btn.ask, [data-nav]").click(function (event) {
              event.preventDefault();
      //        $(".navbar-nav li a").removeClass("selected");
      //        $(this).addClass("selected");
              var navUrl = $(this).data("nav");
              $('html, body').animate({
                  scrollTop: $(navUrl).offset().top - 60
              }, 500);
          });
                  });
      
    </script>
	<?php wp_footer(); ?>
</body>
</html>