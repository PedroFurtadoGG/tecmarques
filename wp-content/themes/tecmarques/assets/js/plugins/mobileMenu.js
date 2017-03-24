/**
 * @Mobile Menu
 */
(function() {
  if (typeof($('#mobileMenu')) !== 'undefined' && $('#mobileMenu') !== null) {
    mobileMenu();
  }
}());

function mobileMenu() {
  var overlay = $('<div class="overlay overlay--mobile-menu" hidden></div>').attr('id', 'overlayMobileMenu').insertAfter('#mobileMenu');
  var dragTarget = $('<div class="drag-target" hidden></div>').attr('id', 'dragTarget').insertAfter('#mobileMenu');
  if ($('[data-mobilemenu-content]')) {
    $('[data-mobilemenu-content]').each(function() {
      if ($(this).attr('data-mobilemenu-content') == 'top') {
        $('#mobileMenuContainer').prepend($(this).clone());
      } else {
        $('#mobileMenuContainer').append($(this).clone());
      }
    });
  }
  $(document).delegate('a[href="#mobileMenu"]', "click", function(e) {
    $('#mobileMenu').toggleClass('-open');
    $('html').toggleClass('-open');
    $('#overlayMobileMenu').fadeToggle(200);
  });
  $(document).on('keydown', function(e) {
    if (e.keyCode === 27 && $('#mobileMenu').hasClass('-open')) {
      closeMobileMenu();
    }
  });
  //$('#mobileMenuContainer').find('[data-grid]').removeAttr("data-grid");
  //$('#mobileMenuContainer').find('[data-atomic]').removeAttr("data-atomic");
  //$('#mobileMenuContainer').find('.gutter-m, .grid-inline, .grid-va-m').removeClass("gutter-m grid-inline grid-va-m");
  $('#mobileMenu #mobileMenuContainer ul').each(function() {
    $(this).addClass('list-mobile cf');
    if ($(this).children('li').hasClass('trigger--mega-menu')) {
      $(this).find('ul').addClass('mega-menu');
    }
  });
  /* @Menu interno */
  if (typeof($('#mobileMenu .list-dropdown')) !== 'undefined' && $('#mobileMenu .list-dropdown') !== null) {
    setTimeout(function() {
      mobileMenuInterno();
    }, 1000);
  }
}

function openMobileMenu() {
  $('#mobileMenu').addClass('-open');
  $('html').addClass('-open');
  $('#overlayMobileMenu').fadeIn(260);
}

function closeMobileMenu() {
  $('#mobileMenu').removeClass('-open');
  $('html').removeClass('-open');
  $('#overlayMobileMenu').fadeOut(260);
}

function mobileMenuInterno() {
  $('#mobileMenu .list-dropdown').each(function() {
    var item = $(this);
    var trigger = item.children('a');
    var list = item.children('ul');
    var bc = $('#mobileMenu').attr('data-bccolor');
    list.wrapAll('<div class="mobile-menu--layer ' + bc + '"></div>').addClass(bc);
    list.addClass('mobile-menu--layer--list').attr('data-atomic', '');
    item.addClass('trigger-layer');
    var layer = list.closest('.mobile-menu--layer');
    var btnBack = $('<div class="mobile-menu--header"><span class="btn-back mobile-menu--layer--btn-back"><i class="fa fa-angle-left" data-atomic="va-b fs-xl mr-xs"></i>Voltar</span></div>').prependTo(layer);
    var back = layer.find('.btn-back');
    trigger.click(function(e) {
      e.preventDefault();
      layer.addClass('visible');
      $('#mobileMenu').addClass('mobile-menu--layer-visible');
    });
    back.click(function() {
      layer.removeClass('visible');
      $('#mobileMenu').removeClass('mobile-menu--layer-visible');
    });
  });
}
if (typeof($('#asideNav')) !== 'undefined' && $('#asideNav') !== null) {
  var asideNav = $('#asideNav');
  mobileAsideNav();
}

function mobileAsideNav() {
  $(document).delegate("[data-href='#asideNav']", "click", function(e) {
    toggleAsideNav();
  });
  $(document).keyup(function(e) {
    if (e.keyCode == 27 && $('#asideNav') && $('#asideNav').hasClass('aside-nav--open') && !$('#mobileMenu').hasClass('-open')) {
      toggleAsideNav();
    }
  });
}

function toggleAsideNav() {
  asideNav.toggleClass('aside-nav--open');
}
