///* global thebriefcase */
if (typeof console == "undefined") { window.console = { log: function () { } }; }

$(document).ready(function () {

    $(".briefcaseplayer").YTPlayer();

    var
        $window = $(window),
        winHeight = $window.height(),
        headerContent = $('.header-content');

//    $window.resize(function () {
//        winHeight = $window.height();
//        var offsetTop = Math.max(0, (winHeight - 60) - headerContent.height()) / 2;
//        headerContent.css({ 'top': offsetTop + 'px' });
//    });
  
    $window.load(function(){
        $window.trigger('resize');
    });
    
//    $.fn.scrollEnd = function(callback, timeout) {          
//      $(this).scroll(function(){
//        var $this = $(this);
//        if ($this.data('scrollTimeout')) {
//          clearTimeout($this.data('scrollTimeout'));
//        }
//        $this.data('scrollTimeout', setTimeout(callback,timeout));
//      });
//    };
 
//    $window.scroll(function () {
//      var s = $(this).scrollTop();
//      if (s > 100) {
//        $('#nav').addClass('fxd');
//      }else{
//        $('#nav').removeClass('fxd');
//      }
//      if (s > 842) {
//        $('#nav').addClass('in');
//      }else{
//        $('#nav').removeClass('in');
//      }
//    });
  
    $('body').scrollspy({ target: '#bs-example-navbar-collapse-1' }) 

    $(".player").mb_YTPlayer().on("YTPUnstarted", function () {
        console.log("ready");
    });
    if ($window.width() > 430) {

    }
    $('.switch').change(function () {
        $('.card').toggleClass('applyflip');
        console.log("changed");
    }.bind(this));

    $('.contact-form').each(function (index) {

        var contactForm = $(this);

        contactForm.on('submit', function (event) {
            
            event.preventDefault();

            $('.form-group', contactForm).hide();
            $('.submitting', contactForm).show();

            var data = {}; $(contactForm).serializeArray().map(function (x) { data[x.name] = x.value; });

            data['ajax_nonce'] = ajax_nonce;

            $('.response', contactForm).hide();

            $.post('/wp-admin/admin-ajax.php?action=contact_form_submission', data, function (response) {
                if (response.success) {
                    $('.response.success', contactForm).show();
                } else {
                    $('.form-group', contactForm).show();
                    $('.response.error', contactForm).text(response.error).show();
                }
            }, 'json')
                .fail(function () {
                    $('.form-group', contactForm).show();
                    $('.response.error', contactForm).text('There was an error submitting your information. Please try again.').show();
                })
                .always(function (response) {
                    console.log(['response', response]);
                    $('.submitting', contactForm).hide();
                    $window.trigger('resize');
            
                });
        });
    });
    
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }


    $('.descriptions-toggle').on('click', function (event) {
        event.preventDefault();
        $('.pricing-table').toggleClass('hide-decriptions');
    });
  
  
    //NAVIGATION
    //#################################
  
    
      $('#nav button[data-target="#briefcase-menu"]').click( function(){
        $('#nav').toggleClass("nav-open");
      });
  
    //PLANS
    //#################################
  
  
    
    $('[data-toggle="popover"]').popover();
    $('[data-toggle="popover"]').click(function(){
      $('[data-toggle="popover"]').not(this).popover('destroy');
      $(this).popover('show');
    });

    $(function() {
      var oH = 0;
      $('.plan-container').each(function() {
        //find height of each plan desc
        var h = $(this).find('.plan-desc').height();
        //if previous height < current height, change height
        if(oH < h){ oH = h; }
        //Set margin top to negative plan desc height to make drawer
        $(this).find('.plan-desc').css("margin-top",'-'+h+'px');
      });
      //if width of #theplan is greater than 480 do below
      var w = $('#theplans').width() + 60;
      var planDesc = $('.plan-container').find('.plan-desc');
      if(w > 480){
        planDesc.height(oH);
      }
      $(window).resize(function(){
        var w = $('#theplans').width() + 60;
        if(w > 480){
          planDesc.height(oH);
        }else{
          planDesc.height('auto');
        }
      });
    });

    $('a.plan-header').on('click', function(ev) {
      ev.preventDefault();
      $(this).find('.chevron').toggleClass('chevron--down chevron--up');
      $(this).next().toggleClass('open');
    });
  
  
  // END PLANS
  //########################################
  
  
  //HOWITWORKS_SLIDER
  //########################################
  $(function() {
    var slider = $('#howitworks_slider');
    slider.find('.controls>ul.bullets>:eq(0)').addClass('active');
    slider.find('.backgrounds>.img_bgs>.img_bg:gt(0)').hide();
    slider.find('.backgrounds>.icon_bgs>.icon_bg:gt(0)').hide();
    slider.find('.container>.contentboxes>.contentbox:gt(0)').hide();
    slider.find('.controls>.nextarrow').click( function(event){
      event.preventDefault();
      if(slider.find('.controls>ul.bullets>li.active').next().length == 0){
        slider.find('.controls>ul.bullets>li.active').removeClass('active');
        slider.find('.controls>ul.bullets>:first-child').addClass('active');
      }else{
        slider.find('.controls>ul.bullets>li.active').removeClass('active').next('li').addClass('active');
      }
      slider.find('.backgrounds>.img_bgs>:first-child').fadeOut().next('.img_bg').fadeIn(900).end().appendTo(slider.find('.backgrounds>.img_bgs'));
      slider.find('.backgrounds>.icon_bgs>:first-child').fadeOut().next('.icon_bg').delay(300).fadeIn(900).end().appendTo(slider.find('.backgrounds>.icon_bgs'));
      slider.find('.container>.contentboxes>:first-child').fadeOut().next('.contentbox').fadeIn().end().appendTo(slider.find('.container>.contentboxes'));
    });
    slider.find('.controls>.prevarrow').click( function(event){
      event.preventDefault();
      if(slider.find('.controls>ul.bullets>li.active').prev().length == 0){
        slider.find('.controls>ul.bullets>li.active').removeClass('active');
        slider.find('.controls>ul.bullets>:last-child').addClass('active');
      }else{
        slider.find('.controls>ul.bullets>li.active').removeClass('active').prev('li').addClass('active');
      }
      slider.find('.backgrounds>.img_bgs>:last-child').prependTo(slider.find('.backgrounds>.img_bgs'));
      slider.find('.backgrounds>.img_bgs>:nth-child(2)').fadeOut().prev('.img_bg').fadeIn(900).end();
      slider.find('.backgrounds>.icon_bgs>:last-child').prependTo(slider.find('.backgrounds>.icon_bgs'));
      slider.find('.backgrounds>.icon_bgs>:nth-child(2)').fadeOut().prev('.icon_bg').delay(300).fadeIn(900).end();
      slider.find('.container>.contentboxes>:last-child').prependTo(slider.find('.container>.contentboxes'));
      slider.find('.container>.contentboxes>:nth-child(2)').fadeOut().prev('.contentbox').fadeIn().end();
    });
  });
  
  //QUOTES_SLIDER
  //########################################
  $(function() {
    var c = 1;
    var slider = $('#quote-slider');
    slider.find('.controls>ul.avatars>li:eq(0)').addClass('active');
    slider.find('.backgrounds>.background:not(:eq(0))').hide();
    slider.find('.container>.contents>.content:not(:eq(0))').hide();
    slider.find('.controls>ul.avatars>li').click( function(event){
      event.preventDefault();
      var i = $(this).index();
//      alert(i);
      slider.find('.controls>ul.avatars>li:not(:eq('+i+'))').removeClass('active');
      slider.find('.backgrounds>.background:not(:eq('+i+'))').fadeOut();
      slider.find('.container>.contents>.content:not(:eq('+i+'))').fadeOut();
      slider.find('.controls>ul.avatars>li:eq('+i+')').addClass('active');
      slider.find('.backgrounds>.background:eq('+i+')').fadeIn();
      slider.find('.container>.contents>.content:eq('+i+')').fadeIn();
      slider.find('.controls>ul.avatars').removeClass('active'+c);
      slider.find('.controls>ul.avatars').addClass('active'+i);
      c = i;
    });
  });
  
});