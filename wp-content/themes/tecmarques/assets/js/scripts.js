$(document).ready(function() {
  getUserAgent();
  //formErrors();
  styledSelect();
  activeMenu();
  //orcamento();


  if (typeof($('.section-features')) !== 'undefined' && $('.section-features') !== null) {
    $(".section-features").delegate(".btn-anime-list", "click", function(e) {
      var feature = $(this).closest('.feature');
      var list = feature.find('.list-animated');
      var item = list.find('li');
      $(this).toggleClass('active');
      list.toggleClass('active');
    });
  }
  if (typeof($('#langMenu')) !== 'undefined' && $('#langMenu') !== null) {
    $('#langMenu input:radio').change(function() {
      var lang = $(this).val();
      $('#langMenu input:radio').removeClass('active');
      $('#langMenu input:radio').closest('li').removeClass('active');
      $(this).addClass('active');
      $(this).closest('li').addClass('active');
      $('#langMenu').attr('data-lang', lang);
    });
  }
  if (typeof($('.mega-menu')) !== 'undefined' && $('.mega-menu') !== null) {
    var menuWidth = $('.mega-menu').closest('.main-nav').width();
    var img = $('.mega-menu .mega-menu--img-holder img');
    var imgSrc = img.attr('src');
    $(".trigger--mega-menu").hover(function() {
      img.attr('src', imgSrc);
    }, function() {
      img.attr('src', imgSrc);
    });
    $('.mega-menu--list-item').each(function() {
      var src = $(this).find('a').attr('data-src');
      $(this).hover(function() {
        img.attr('src', src);
      }, function() {});
    });
  }
  if (typeof($('.product-images')) !== 'undefined' && $('.product-images') !== null) {
    $('.product-slider').slick({
      dots: false,
      infinite: false,
      speed: 760,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: '.product-carousel'
    });
    $('.product-carousel').slick({
      dots: false,
      infinite: false,
      speed: 760,
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.product-slider',
      navigation: false,
      centerMode: false,
      focusOnSelect: true,
      prevArrow: '<button class="btn-prev btn-arrow fs-l br-s p-x-s">&#10094;</button>',
      nextArrow: '<button class="btn-next btn-arrow fs-l br-s p-x-s">&#10095;</button>',
      lazyLoad: 'progressive'
    });
  }
  if (typeof($('.slider')) !== 'undefined' && $('.slider') !== null) {
    $('.slider').slick({
      dots: true,
      infinite: true,
      speed: 760,
      slidesToShow: 1,
      adaptiveHeight: true,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      prevArrow: '<button class="btn-prev btn-arrow fs-l br-s p-x-s">&#10094;</button>',
      nextArrow: '<button class="btn-next btn-arrow fs-l br-s p-x-s">&#10095;</button>',
      lazyLoad: 'progressive'
    });
  }
  if (typeof($('.carousel')) !== 'undefined' && $('.carousel') !== null) {
    $('.carousel').slick({
      dots: false,
      infinite: true,
      speed: 760,
      slidesToShow: 5,
      slidesToScroll: 1,
      adaptiveHeight: true,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      prevArrow: '<button class="btn-prev btn-arrow fs-l br-s p-x-s">&#10094;</button>',
      nextArrow: '<button class="btn-next btn-arrow fs-l br-s p-x-s">&#10095;</button>',
      lazyLoad: 'progressive',
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      }, {
        breakpoint: 640,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      }, {
        breakpoint: 460,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }]
    });
  }
  jQuery.extend(jQuery.validator.messages, {
    required: "Este campo &eacute; requerido.",
    remote: "Por favor, corrija este campo.",
    email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
    url: "Por favor, forne&ccedil;a uma URL v&aacute;lida.",
    date: "Por favor, forne&ccedil;a uma data v&aacute;lida.",
    dateISO: "Por favor, forne&ccedil;a uma data v&aacute;lida (ISO).",
    number: "Por favor, forne&ccedil;a um n&uacute;mero v&aacute;lido.",
    digits: "Por favor, forne&ccedil;a somente d&iacute;gitos.",
    creditcard: "Por favor, forne&ccedil;a um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
    equalTo: "Por favor, forne&ccedil;a o mesmo valor novamente.",
    accept: "Por favor, forne&ccedil;a um valor com uma extens&atilde;o v&aacute;lida.",
    maxlength: jQuery.validator.format("Por favor, forne&ccedil;a n&atilde;o mais que {0} caracteres."),
    minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
    rangelength: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1} caracteres de comprimento."),
    range: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1}."),
    max: jQuery.validator.format("Por favor, forne&ccedil;a um valor menor ou igual a {0}."),
    min: jQuery.validator.format("Por favor, forne&ccedil;a um valor maior ou igual a {0}.")
  });
  if (typeof($('#contactForm')) !== 'undefined' && $('#contactForm') !== null) {
    $('#contactForm').validate({
      debug: false,
      errorClass: "error",
      errorElement: "div",
      onkeyup: false,
      rules: {
        nome: {
          required: true,
          minlength: 4
        },
        email: {
          required: true,
          email: true
        },
        telefone: {
          required: true
        },
        mensagem: {
          required: true,
          minlength: 10
        }
      },
      messages: {
        nome: {
          required: 'Preencha o campo nome',
          minlength: 'No mínimo 4 letras'
        },
        email: {
          required: 'Informe o seu email',
          email: 'Ops, informe um email válido'
        },
        telefone: {
          required: 'Nos diga seu telefone. exemplo: 00 0000 0000'
        },
        mensagem: {
          required: 'Deixe sua mensagem',
          minlength: 'No mínimo 10 letras'
        }
      },
      submitHandler: function(form) {
        var dados = $(form).serialize();
        $.ajax({
          type: "POST",
          url: path + 'api/form/contato',
          data: dados,
          dataType: 'json',
          encode: true
        }).done(function(data) {
          if (data.status == "ok") {
            console.log('status: ' + data.status);
          }
        });
        event.preventDefault();
      }
    });
  }
  if (typeof($('#formLogin')) !== 'undefined' && $('#formLogin') !== null) {
    $('#formLogin').validate({
      debug: false,
      errorClass: "error",
      errorElement: "div",
      onkeyup: false,
      rules: {
        nome: {
          required: true,
          minlength: 4
        },
        email: {
          required: true,
          email: true
        },
        telefone: {
          required: true
        },
        mensagem: {
          required: true,
          minlength: 10
        }
      },
      messages: {
        nome: {
          required: 'Preencha o campo nome',
          minlength: 'No mínimo 4 letras'
        },
        email: {
          required: 'Informe o seu email',
          email: 'Ops, informe um email válido'
        },
        telefone: {
          required: 'Nos diga seu telefone. exemplo: 00 0000 0000'
        },
        mensagem: {
          required: 'Deixe sua mensagem',
          minlength: 'No mínimo 10 letras'
        }
      },
      submitHandler: function(form) {
        var dados = $(form).serialize();
        $.ajax({
          type: "POST",
          url: path + 'api/form/contato',
          data: dados,
          dataType: 'json',
          encode: true
        }).done(function(data) {
          if (data.status == "ok") {
            console.log('status: ' + data.status);
          }
        });
        event.preventDefault();
      }
    });
  }

  if (typeof($('.popup-gallery')) !== 'undefined' && $('.popup-gallery') !== null) {
    $('.popup-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      mainClass: 'img-gallery',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
      }
    });
  }

  if (typeof($('.product-images')) !== 'undefined' && $('.product-images') !== null) {
    $('.product-images .thumb-img').hover(function() {
        var url = $(this).attr('src');
        $('.img-main').attr('src', url);
    });
  }
});

function orcamento() {
  if (typeof($('#orcamento')) !== 'undefined' && $('#orcamento') !== null) {
    $.get("orcamento.partial.produtos.php", function(data) {
      $("#orcamentoContainer [data-tipo=produtos] .orcamento-list-item--content").append(data);
      $('.orcamento-list-item').attr('data-items', '1').attr('data-items-removed', 0);
      styledSelect();
    });
    $.get("orcamento.partial.servicos.php", function(data) {
      $("#orcamentoContainer [data-tipo=servicos] .orcamento-list-item--content").append(data);
      $('.orcamento-list-item').attr('data-items', '1').attr('data-items-removed', 0);
      styledSelect();
    });
    $.get("orcamento.partial.locacao.php", function(data) {
      $("#orcamentoContainer [data-tipo=locacao] .orcamento-list-item--content").append(data);
      $('.orcamento-list-item').attr('data-items', '1').attr('data-items-removed', 0);
      styledSelect();
    });
    $("#orcamento").delegate(".btn-add-more", "click", function(e) {
      var li = $(this).closest('li');
      var num = parseInt(li.attr('data-items')) + 1;
      var tipo = $(this).closest('.orcamento-list-item').attr('data-tipo');
      li.attr('data-items', num);
      $.get("orcamento.partial." + tipo + ".php", function(data) {
        var last = $(data);
        last.addClass('added').find('.input').not('.styled-select').each(function() {
          $(this).attr('data-name', $(this).attr('name'));
          str_id = $(this).attr('data-name');
          $(this).attr('id', str_id + "[" + num + "]").attr('name', str_id + "[" + num + "]");
          if ($(this).attr('type') !== 'radio') {
            $(this).closest('li').find('label').attr('for', str_id + "[" + num + "]");
          }
        });
        $("#orcamentoContainer [data-tipo=" + tipo + "] .orcamento-list-item--content").append(last);
        styledSelect();
      });
    });
    $("#orcamento").delegate(".btn-remove", "click", function(e) {
      var item = $(this).closest('.orcamento-list-item').find('.list-orcamento');
      var num = parseInt($(this).closest('.orcamento-list-item').attr('data-items-removed')) + 1;
      $(this).closest('.orcamento-list-item').attr('data-items-removed', num);
      $(this).closest('.list-orcamento').fadeOut('400', function() {
        $(this).remove();
      });
    });
  }
}

function testAPI() {
  console.log('Welcome!  Fetching your information.... ');
  FB.api('/me', function(response) {
    console.log('Good to see you, ' + response.name + '.');
  });
  FB.api('/cocacola/feed?limit=5', function(response) {
    for (var i = 0; i < response.data.length; i++) {
      console.log(i + " : " + response.data[i].message);
    }
  });
}

function activeMenu() {
  var page = $('body').attr('data-current-page');
  if (page === 'index' || page === '' || page === null || page === undefined) {
    page = 'home';
  }
  $('li a[href="' + page + '"]').addClass('active');
}

function formatar(mascara, documento) {
  var i = documento.value.length;
  var saida = mascara.substring(0, 1);
  var texto = mascara.substring(i);
  if (texto.substring(0, 1) !== saida) {
    documento.value += texto.substring(0, 1);
  }
}

function limpa_formulario_cep() {
  $("#endereco").val("");
  $("#bairro").val("");
  $("#cidade").val("");
  $("#estado").val("");
}

function initializeMap(id, lat, lng) {
  var mapOptions = {
    center: new google.maps.LatLng(lat, lng),
    zoom: 8,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById(id), mapOptions);
}

function strEllipsis(el, num) {
  var str = el.html();
  if (str.length > num) {
    str = str.substring(0, num) + "…";
  }
  return el.html(str);
}

function styledSelect() {
  if (typeof($('select')) !== 'undefined' && $('select') !== null) {
    $('select').each(function() {
      if ($(this).parent().hasClass("styled-select")) {} else {
        classes = {};
        $($(this).attr('class').split(' ')).each(function() {
          if (this !== '') {
            classes[this] = this;
          }
        });
        $(this).wrap('<div class="styled-select" role="presentation"></div>');
        for (class_name in classes) {
          $(this).closest('.styled-select').addClass(class_name);
        }
      }
    });
  }
}

function formErrors() {
  if (typeof($('input.error')) !== 'undefined' && $('input.error') !== null) {
    $("body").on("focus", "input.error, select.error, textarea.error", function() {
      $(this).removeClass('error');
    });
  }
  if (typeof($('input.success')) !== 'undefined' && $('input.success') !== null) {
    $("body").on("focus", "input.success, select.success, textarea.success", function() {
      $(this).removeClass('success');
    });
  }
}

function getUserAgent() {
  ua = navigator.userAgent.toLowerCase();
  check = function(a) {
    return a.test(ua);
  };
  isStrict = document.compatMode == "CSS1Compat";
  isOpera = check(/opera/);
  isChrome = check(/chrome/);
  isWebKit = check(/webkit/);
  isSafari = !isChrome && check(/safari/);
  isSafari2 = isSafari && check(/applewebkit\/4/);
  isSafari3 = isSafari && check(/version\/3/);
  isSafari4 = isSafari && check(/version\/4/);
  isIE = !isOpera && check(/msie/);
  isIE7 = isIE && check(/msie 7/);
  isIE8 = isIE && check(/msie 8/);
  isIE6 = isIE && !isIE7 && !isIE8;
  isGecko = !isWebKit && check(/gecko/);
  isGecko2 = isGecko && check(/rv:1\.8/);
  isGecko3 = isGecko && check(/rv:1\.9/);
  isBorderBox = isIE && !isStrict;
  isWindows = check(/windows|win32/);
  isMac = check(/macintosh|mac os x/);
  isAir = check(/adobeair/);
  isLinux = check(/linux/i);
  http_str = " ";
  isSecure = /^https/i.test(window.location.protocol);
  isIE7InIE8 = isIE7 && document.documentMode == 7;
  isAndroid = check(/Android/i);
  isBlackBerry = check(/BlackBerry/i);
  ua = navigator.userAgent.toLowerCase();
  check = function(a) {
    return a.test(ua);
  };
  if (isWindows) {
    osName = "windows";
  } else {
    if (isMac) {
      osName = "iOS";
    } else {
      if (isLinux) {
        osName = "linux";
      } else {
        if (isAndroid) {
          osName = "android";
        } else {
          if (isBlackBerry) {
            osName = "blackberry";
          } else {
            osName = "";
          }
        }
      }
    }
  }
  if (isIE) {
    browserType = "IE";
  } else {
    if (isGecko) {
      browserType = "firefox";
    } else {
      if (isChrome) {
        browserType = "chrome";
      } else {
        if (isOpera) {
          browserType = "opera";
        } else {
          if (isSafari) {
            browserType = "safari";
          } else {
            browserType = " ";
          }
        }
      }
    }
  }
  im = {
    Android: function() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
      return navigator.userAgent.match(/iPhone|iPod/i);
    },
    iPad: function() {
      return navigator.userAgent.match(/iPad/i);
    },
    Opera: function() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
      return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
  };
  im_str = " ";
  if (im.iPad()) {
    im_str = "device-iPad";
  } else {
    if (im.Android()) {
      im_str = "device-mobile ua-android";
    } else {
      if (im.BlackBerry()) {
        im_str = "device-mobile ua-blackberry";
      } else {
        if (im.iOS()) {
          im_str = "device-mobile";
        } else {
          if (im.Opera()) {
            im_str = "device-mobile ua-opera-mini";
          } else {
            if (im.Windows()) {
              im_str = "device-mobile ua-ie-mobile";
            } else {
              im_str = "device-desktop";
            }
          }
        }
      }
    }
  }
  if (isSecure) {
    http_str = "https";
  }
  $("html").addClass("os-" + osName + " ua-" + browserType + " " + im_str + " " + http_str);
}
