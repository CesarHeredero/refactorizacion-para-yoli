(function () {
  'use strict';

  var menuHtml = [
    '<div class="menu">',
    '  <ul>',
    '    <li><a href="index.html" data-nav="inicio">',
    '      <div class="hm"><i class="home1"></i><i class="home2"></i>',
    '          <p style="font-size:11px;">INICIO</p>',
    '      </div>',
    '    </a></li>',
    '    <li><a href="quienes-somos.html" data-nav="quienes-somos">',
    '      <div class="cat"><i class="watching"></i><i class="watching1"></i>',
    '          <p style="font-size:11px;">QUIENES<br>SOMOS</p>',
    '      </div>',
    '    </a></li>',
    '    <li><a href="porfolio.html" data-nav="porfolio">',
    '      <div class="video"><i class="videos"></i><i class="videos1"></i>',
    '          <p style="font-size:11px;">PORFOLIO</p>',
    '      </div>',
    '    </a></li>',
    '    <li><a href="contacto.html" data-nav="contacto">',
    '      <div class="cnt"><i class="contact"></i><i class="contact1"></i>',
    '          <p style="font-size:11px;">CONTACTO</p>',
    '      </div>',
    '    </a></li>',
    '  </ul>',
    '</div>'
  ].join('\n');

  var footerHtml = [
    '<div class="footer">',
    '  <div class="col-md-3">',
    '    <div class="thumbnail">',
    '      <div class="caption">',
    '        <h4 style="color:#fbfbfb; padding-left:0;">PUBLICIDAD TV/RADIO</h4>',
    '        <ul style="list-style-image:none; list-style-type:none;">',
    '          <li><a href="publicidad-telemadrid.html">Publicidad en Telemadrid</a></li>',
    '          <li><a href="publicidad-onda-madrid.html">Publicidad en radio (Onda Madrid)</a></li>',
    '        </ul>',
    '      </div>',
    '    </div>',
    '  </div>',
    '  <div class="col-md-3">',
    '    <div class="thumbnail">',
    '      <div class="caption">',
    '        <h4 style="color:#fbfbfb; padding-left:0;">OTROS SERVICIOS</h4>',
    '        <ul style="list-style-image:none; list-style-type:none;">',
    '          <li><a href="otros-servicios.html">Casting de actores <br>',
    '            Localizaciones <span style="color:#555;">/</span> Below the Screen</a></li>',
    '          <li><a href="creacion-logotipos.html">Creación de logotipos</a></li>',
    '        </ul>',
    '      </div>',
    '    </div>',
    '  </div>',
    '  <div class="col-md-3">',
    '    <div class="thumbnail">',
    '      <div class="caption">',
    '        <h4 style="color:#fbfbfb; padding-left:0;">LOS 10 MÁS</h4>',
    '        <ul style="list-style-image:none; list-style-type:none;">',
    '          <li><a href="las-10-frases-mas-famosas-de-la-historia-del-cine.html">Las 10 frases más famosas de la historia del cine</a></li>',
    '          <li><a href="las-10-frases-5-estrellas-relacionadas-con-el-cine.html">Las 10 frases 5* relacionadas con el cine</a></li>',
    '        </ul>',
    '      </div>',
    '    </div>',
    '  </div>',
    '  <div class="col-md-3">',
    '    <div class="thumbnail">',
    '      <div class="caption">',
    '        <h4 style="color:#fbfbfb; padding-left:0;">VIAJES DE CINE</h4>',
    '        <ul style="list-style-image:none; list-style-type:none;">',
    '          <li><a href="http://viajesporchin.es/itinerario-china-de-cine.php" target="_blank">China de cine</a></li>',
    '          <li><a href="http://viajesporchin.es/itinerario-paisajes-de-avatar.php" target="_blank">China: Paisajes de Avatar</a></li>',
    '          <li><a href="enlaces-de-interes.html" target="_blank">Enlaces de interés</a></li>',
    '        </ul>',
    '      </div>',
    '    </div>',
    '  </div>',
    '  <div class="col-md-12" style="text-align:center;">',
    '    <div class="thumbnail" style="margin-bottom:0;">',
    '      <div class="caption" style="color:#fff;"><p>Todos los derechos reservados publicidadcines.com © 2015</p></div>',
    '    </div>',
    '  </div>',
    '</div>'
  ].join('\n');

  var whatsappHtml = '<a href="https://api.whatsapp.com/send/?phone=34668554651" style="position:fixed; z-index:100; bottom:20px; right:20px;" target="_blank"><img src="images/whatsapp-icon.png" style="width:55px; height:55px;" alt="WhatsApp"></a>';

  var logoHtml = [
    '<div class="top-header span_top">',
    '  <a href="index.html"><img src="images/logos-top.png" style="max-width:100%; height:auto;" alt="Publcidad en cines" title="Publcidad en cines" /></a>',
    '  <div class="clearfix"></div>',
    '</div>'
  ].join('\n');

  var sliderHtml = [
    '<div class="main" style="background-color:#000; height:auto; padding-top:30px; padding-bottom:200px; background-image:url(images/bg-cine-sala2.png); background-position: 50% 100%; background-repeat:no-repeat;">',
    '  <ul class="rslides" id="slider1">',
    '    <li><a href="http://publicidadcines.com/spots/piniauto-02.webm" target="_blank"><img src="images/portadas/video-cine-14.jpg" style="max-width:100%; height:auto;" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/quesos-camporeal.webm" target="_blank"><img src="images/portadas/video-cine-24.jpg" style="max-width:100%; height:auto;" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/restaurante-shibuya.webm" target="_blank"><img src="images/portadas/video-cine-15.jpg" style="max-width:100%; height:auto;" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/spot-ceramico.webm" target="_blank"><img src="images/portadas/video-cine-16.jpg" style="max-width:100%; height:auto;" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/spot-estoril.webm" target="_blank"><img src="images/portadas/video-cine-17.jpg" style="max-width:100%; height:auto;" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/terranova-02.webm" target="_blank"><img src="images/portadas/video-cine-18.jpg" style="max-width:100%; height:auto;" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/the-good-burger.webm" target="_blank"><img src="images/portadas/video-cine-19.jpg" style="max-width:100%; height:auto;" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/clinica-h20-02.webm" target="_blank"><img src="images/portadas/video-020.jpg" style="max-width:100%; height:auto;" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/la-clinica-veterinaria-02.webm" target="_blank"><img src="images/portadas/video-021.jpg" style="max-width:100%; height:auto;" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/lynea-y-salud-02.webm" target="_blank"><img src="images/portadas/video-022.jpg" style="max-width:100%; height:auto;" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/spot-racc-02.webm" target="_blank"><img src="images/portadas/video-023.jpg" style="max-width:100%; height:auto;" /></a></li>',
    '    <li><a href="https://www.youtube.com/embed/W_3moGr30hQ?rel=0&autoplay=1" target="_blank"><img src="images/portadas/video-cine-01.jpg" style="max-width:100%; height:auto;" alt="" /></a></li>',
    '    <li><a href="https://www.youtube.com/embed/lfBwjKxsFzQ?rel=0&autoplay=1" target="_blank"><img src="images/portadas/video-cine-02.jpg" class="img-responsive" alt="" /></a></li>',
    '    <li><a href="https://player.vimeo.com/video/111247044" target="_blank"><img src="images/portadas/video-cine-03.jpg" class="img-responsive" alt="" /></a></li>',
    '    <li><a href="https://www.youtube.com/embed/KvQHcIwh1S8?rel=0&autoplay=1" target="_blank"><img src="images/portadas/video-cine-06.jpg" class="img-responsive" alt="" /></a></li>',
    '    <li><a href="https://www.youtube.com/embed/SsWSLFJtKng?rel=0&autoplay=1" target="_blank"><img src="images/portadas/video-cine-07.jpg" class="img-responsive" alt="" /></a></li>',
    '    <li><a href="https://www.youtube.com/embed/aN8wnBSk_1Y?rel=0&autoplay=1" target="_blank"><img src="images/portadas/video-cine-10.jpg" class="img-responsive" alt="" /></a></li>',
    '    <li><a href="https://www.youtube.com/embed/6rIjZ8uIWEw?rel=0&autoplay=1" target="_blank"><img src="images/portadas/video-cine-11.jpg" class="img-responsive" alt="" /></a></li>',
    '    <li><a href="https://www.youtube.com/embed/DuT703SnkVo?rel=0&autoplay=1" target="_blank"><img src="images/portadas/video-cine-12.jpg" class="img-responsive" alt="" /></a></li>',
    '  </ul>',
    '</div>'
  ].join('\n');

  var contactFormHtml = [
    '<div class="main-contact">',
    '  <h2 class="head">CONTACTO</h2>',
    '  <p><strong>Solicite ahora un presupuesto sin compromiso para anunciarse en salas de {city}</strong></p>',
    '  <div class="contact-form">',
    '    <form name="contact-form" id="contact-form" action="_contacto_OK.php" method="post">',
    '      <fieldset>',
    '        <div class="row">',
    '          <div class="form-group">',
    '            <div class="col-md-4 col-sm-4">',
    '              <label>Nombre *</label>',
    '              <input type="text" name="nombre" id="nombre" class="form-control required" required />',
    '            </div>',
    '            <div class="col-md-4 col-sm-4">',
    '              <label>Email *</label>',
    '              <input type="email" name="email" id="email" class="form-control required" required />',
    '            </div>',
    '            <div class="col-md-4 col-sm-4">',
    '              <label>Teléfono*</label>',
    '              <input type="text" name="telefono" id="telefono" class="form-control" required/>',
    '            </div>',
    '          </div>',
    '        </div>',
    '        <div class="row">',
    '          <div class="form-group">',
    '            <div class="col-md-4 col-sm-4">',
    '              <label>Empresa *</label>',
    '              <input type="text" name="empresa" id="empresa" class="form-control required" required />',
    '            </div>',
    '            <div class="col-md-4 col-sm-4">',
    '              <label>Ciudad/Población</label>',
    '              <input type="text" name="ciudad" id="ciudad" class="form-control" />',
    '            </div>',
    '          </div>',
    '        </div>',
    '        <div class="row">',
    '          <div class="form-group">',
    '            <div class="col-md-12 col-sm-12">',
    '              <label>Mensaje</label>',
    '              <textarea name="mensaje" id="mensaje" rows="5" class="form-control word-count" data-info="textarea-words-info" placeholder="Deje su mensaje..."></textarea>',
    '              <input type="email" style="display:none;" name="verificacion" class="verif" />',
    '            </div>',
    '          </div>',
    '        </div>',
    '        <div class="row">',
    '          <div class="form-group">',
    '            <div class="col-md-6 col-sm-6">',
    '              <span><strong>Deseo recibir la información solicitada por *</strong></span><br>',
    '              <label class="radio"><input type="radio" name="info" value="Email" checked="checked" required><i></i> Email</label>',
    '              <label class="radio"><input type="radio" name="info" value="Teléfono" required><i></i> Teléfono</label>',
    '              <label class="radio"><input type="radio" name="info" value="Ambos" required><i></i> Ambos</label>',
    '            </div>',
    '          </div>',
    '        </div>',
    '        <div class="row">',
    '          <div class="form-group">',
    '            <div class="col-md-6 col-sm-6">',
    '              <input type="checkbox" style="margin-bottom:24px;margin-top:24px;" name="info" value="Email" required>',
    '              <i></i> He leido y acepto la <a href="https://publicidadcines.com/politica-privacidad.html">política de privacidad</a>',
    '            </div>',
    '          </div>',
    '        </div>',
    '        <div class="row">',
    '          <div class="col-md-12">',
    '            <div id="action">',
    '              <button type="submit" class="btn btn-3d btn-teal btn-primary btn-lg margin-top-0"><i class="fa fa-check"></i>  ENVIAR FORMULARIO</button>',
    '            </div>',
    '          </div>',
    '        </div>',
    '      </fieldset>',
    '    </form>',
    '  </div>',
    '  <div class="contact_info" style="text-align:center;">',
    '    <div class="map"><a href="mailto:info@publicidadcines.com"><img style="max-width:100%;height:auto;" src="images/footer-contact-s.jpg" alt="Plató 16 y Santiso Asesores" title="Plató 16 y Santiso Asesores"></a></div>',
    '  </div>',
    '</div>'
  ].join('\n');

  var navMap = {
    'index.html':          'inicio',
    '':                    'inicio',
    'quienes-somos.html':  'quienes-somos',
    'porfolio.html':       'porfolio',
    'contacto.html':       'contacto'
  };

  function inject() {
    var navEl      = document.getElementById('site-nav');
    var footerEl   = document.getElementById('site-footer');
    var whatsappEl = document.getElementById('site-whatsapp');

    if (navEl)      navEl.innerHTML      = menuHtml;
    if (footerEl)   footerEl.innerHTML   = footerHtml;
    if (whatsappEl) whatsappEl.innerHTML = whatsappHtml;

    var contactEl = document.getElementById('site-contact-form');
    if (contactEl) {
      var city = contactEl.getAttribute('data-city') || '';
      contactEl.outerHTML = contactFormHtml.replace('{city}', city);
    }

    var sliderEl = document.getElementById('site-slider');
    if (sliderEl) {
      sliderEl.outerHTML = sliderHtml;
      if (typeof $ !== 'undefined' && $.fn.responsiveSlides) {
        $('#slider1').responsiveSlides({ speed: 3000 });
      }
    }

    var logoEl = document.getElementById('site-logo');
    if (logoEl) { logoEl.outerHTML = logoHtml; }

    if (typeof $ !== 'undefined' && $.fn.magnificPopup) {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });
    }

    window.addEventListener('load', function () { window.scrollTo(0, 0); });

    var page = (window.location.pathname.split('/').pop() || 'index.html').toLowerCase();
    var activeNav = navMap[page];
    if (activeNav) {
      var links = document.querySelectorAll('#site-nav [data-nav="' + activeNav + '"]');
      for (var i = 0; i < links.length; i++) {
        links[i].className = (links[i].className ? links[i].className + ' ' : '') + 'active';
        links[i].style.color = '#1B242F';
      }
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', inject);
  } else {
    inject();
  }
})();
