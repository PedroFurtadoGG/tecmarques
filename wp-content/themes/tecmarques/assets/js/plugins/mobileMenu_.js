/**
 * @Menu Mobile
 */
if (typeof($('#mobileMenu')) != 'undefined' && $('#mobileMenu') != null) {
    var btnToggleMenu = $('a[href="#mobileMenu"]');
    var overlay = $('<div class="overlay overlay--mobile-menu" hidden></div>').attr('id', 'overlayMobileMenu').appendTo('body');
    var menu = $('#mobileMenu');
    var body = $('body');
    var content = $('#globalHeaderNav').html();

    mobileMenu();
}

function mobileMenu() {
    $('#mobileMenuContainer').html(content);

    $(document).delegate('a[href="#mobileMenu"]', "click", function(e) {
        menu.toggleClass('mobile-menu--open');
        body.toggleClass('mobile-menu--open');
        overlay.fadeToggle(500);
    });

    $('#mobileMenu #mobileMenuContainer ul').each(function() {
        $(this).removeClass().addClass('list-mobile cf').removeAttr("data-grid").removeAttr("data-atomic");
        $(this).children('li').removeAttr("data-grid").removeAttr("data-atomic");

        if($(this).children('li').hasClass('mega-menu')){
            var listContent = $(this).find('ul').html();
            $(this).html(listContent);
        }
    });

    /* @Menu interno */
    if (typeof($('#mobileMenu .list-dropdown')) != 'undefined' && $('#mobileMenu .list-dropdown') != null) {
        setTimeout(function() {
            mobileMenuInterno();
        }, 1000);
    }

}

function openMobileMenu() {
    menu.addClass('mobile-menu--open');
    body.addClass('mobile-menu--open');
    overlay.fadeIn(500);
}

function closeMobileMenu() {
    menu.removeClass('mobile-menu--open');
    body.removeClass('mobile-menu--open');
    overlay.fadeOut(500);
}

function mobileMenuInterno() {
    $('#mobileMenu .list-dropdown').each(function() {
        var item = $(this);
        var trigger = item.children('a');
        var list = item.children('ul');
        var bc = $('#mobileMenu').css('backgroundColor');

        list.wrapAll('<div class="mobile-menu--layer" style="background-color:' + bc + '"></div>');
        list.addClass('mobile-menu--layer--list').attr('data-atomic', '');
        item.removeClass('list-dropdown').addClass('trigger-layer');

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
