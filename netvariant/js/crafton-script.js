$(document).ready(function() {

  var headerHeight = $('.header').height();
  var secMenuHeight = $('.second-menu').height();
  var secondMenuPos = $('#our > .container').offset().top - headerHeight;
  var ourContentPos = $('#our > .container').offset().top - 300;
  var productsPos = $('#products').offset().top - 300;
  var careersPos = $('#careers').offset().top - 300;

  $(window).scroll(function() {

    //counts pixels from top
    var scrllTop = $(this).scrollTop();

    //sticks second menu after scroll
    if (scrllTop > secondMenuPos) {
      $('#our > .container').addClass('is-fixed');
    } else {
      $('#our > .container').removeClass('is-fixed');
    }

    if (scrllTop > ourContentPos || scrllTop + (window.innerHeight - $('#big-foot').height()) >= $(document).height()) {
      $('.services_description').addClass('services_descAndTiles--transform');
      $('.services_tiles').addClass('services_descAndTiles--transform');
    }

    if (scrllTop > productsPos || scrllTop + (window.innerHeight - $('#big-foot').height()) >= $(document).height()) {
      $('.products_tiles').addClass('products_tiles--transform');
    }
    if (scrllTop > careersPos || scrllTop + window.innerHeight >= $(document).height()) {
      $('.static').addClass('static--transform');
    }
  });
  //window scroll function end

  function WindowInnerWdth() {
    if (window.innerWidth > 955) {
      //main menu item hover behaviour
      $('.main-menu_item').has('ul').hover(
        function() {
          $('.header_hov-container').removeClass('hide').addClass('show');
          $('.header_hov-flip').addClass('flip');
        },
        function() {
          $('.header_hov-flip').removeClass('flip');
          $('.header_hov-container').removeClass('show').addClass('hide');
        }
      );
      $('.second-menu').appendTo('#our > .container');
    } else {
      $('.second-menu').appendTo('#header > nav');
    };

    if (window.innerWidth <= 1150 && window.innerWidth > 880) {
      $('#tiles > li:nth-child(7) > div:nth-child(2) > div').appendTo($('#tiles > li:nth-child(11) > div:nth-child(1)'));
    } else if (window.innerWidth <= 880 && window.innerWidth > 670) {
      $('#tiles > li:nth-child(11) > div:nth-child(1) > div:nth-child(2)').appendTo($('#tiles > li:nth-child(10) > div:nth-child(1)'));
    } else if (window.innerWidth <= 670){
      $('.hex_in-block').appendTo('#careers > .container');
    }
  };
  WindowInnerWdth();

  $(window).resize(function() {
    WindowInnerWdth();
  });

  $(window).on('orientationchange',function() {
    WindowInnerWdth();
  });

  // smooth scroll
  $("a").on('click', function() {
    if (this.hash !== "" && window.innerWidth > 955) {
      var hash = this.hash;
      var a = this;
      $('html, body').animate({
        scrollTop: $(hash).offset().top - headerHeight - secMenuHeight
      }, 500, function() {
        window.location.hash = hash;
      });
    } else if (this.hash !== "" && window.innerWidth <= 955) {
      var hash = this.hash;
      var a = this;
      $('html, body').animate({
        scrollTop: $(hash).offset().top - headerHeight
      }, 500, function() {
        window.location.hash = hash;
      });
    }

    if ($('#hamburger').attr('value') === 'on') {
      $('#hamburger').attr('value', 'off');
      $('#header').removeClass('header-fixed-height');
    }
  });

  //hamburger on click action
  $('#hamburger').on('click', function() {
    if ($(this).attr('value') === 'off') {
      $(this).attr('value', 'on');
      $('#header').addClass('header-fixed-height');
    } else if ($(this).attr('value') === 'on') {
      $(this).attr('value', 'off');
      $('#header').removeClass('header-fixed-height');
    }
  });

  //slider lunch
  $('.slider-wrapper').slick({
    infinite: true,
    speed: 300,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 115000,
  });

  //on slider arrow changing
  var arrowToHand = '<img src="images/handDrag.png" alt="drag">';
  var arrowPrev = '<img src="images/arrowLeft.png" alt="previous">';
  var arrowNext = '<img src="images/arrowRight.png" alt="next">';
  $('.arrow-prev').hover(
    function() {
      $('.arrow-prev').html(arrowToHand);
    },
    function() {
      $('.arrow-prev').html(arrowPrev);
    }
  );

  $('.arrow-next').hover(
    function() {
      $('.arrow-next').html(arrowToHand);
    },
    function() {
      $('.arrow-next').html(arrowNext);
    }
  );

  //careers hex tiles random color
  setInterval(function() {
    $('.hex120 > .hex120').each(function() {
      var hexagonColor = ['#1fb5e3', '#f19621', '#ffffff', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent'];
      var randomColor = Math.floor(Math.random() * hexagonColor.length);

      if ($(this).hasClass('static')) {
        null;
      } else {
        $(this).css('background-color', hexagonColor[randomColor]);
      }

    });
  }, 3000);

});
