(function () {
  'use strict';

  // ── Menú de navegación ────────────────────────────────────────────────────

  var menuHtml = [
    '<div class="menu">',
    '  <ul>',
    '    <li><a href="index.html" data-nav="inicio">',
    '      <div class="hm"><i class="home1"></i><i class="home2"></i>',
    '          <p class="nav-label">INICIO</p>',
    '      </div>',
    '    </a></li>',
    '    <li><a href="quienes-somos.html" data-nav="quienes-somos">',
    '      <div class="cat"><i class="watching"></i><i class="watching1"></i>',
    '          <p class="nav-label">QUIENES<br>SOMOS</p>',
    '      </div>',
    '    </a></li>',
    '    <li><a href="porfolio.html" data-nav="porfolio">',
    '      <div class="video"><i class="videos"></i><i class="videos1"></i>',
    '          <p class="nav-label">PORFOLIO</p>',
    '      </div>',
    '    </a></li>',
    '    <li><a href="contacto.html" data-nav="contacto">',
    '      <div class="cnt"><i class="contact"></i><i class="contact1"></i>',
    '          <p class="nav-label">CONTACTO</p>',
    '      </div>',
    '    </a></li>',
    '  </ul>',
    '</div>'
  ].join('\n');

  // ── Pie de página ─────────────────────────────────────────────────────────

  var footerHtml = [
    '<div class="footer">',
    '  <div class="col-md-3">',
    '    <div class="thumbnail">',
    '      <div class="caption">',
    '        <h4 class="footer-heading">PUBLICIDAD TV/RADIO</h4>',
    '        <ul class="footer-list">',
    '          <li><a href="publicidad-telemadrid.html">Publicidad en Telemadrid</a></li>',
    '          <li><a href="publicidad-onda-madrid.html">Publicidad en radio (Onda Madrid)</a></li>',
    '        </ul>',
    '      </div>',
    '    </div>',
    '  </div>',
    '  <div class="col-md-3">',
    '    <div class="thumbnail">',
    '      <div class="caption">',
    '        <h4 class="footer-heading">OTROS SERVICIOS</h4>',
    '        <ul class="footer-list">',
    '          <li><a href="otros-servicios.html">Casting de actores <br>',
    '            Localizaciones <span class="text-separator">/</span> Below the Screen</a></li>',
    '          <li><a href="creacion-logotipos.html">Creación de logotipos</a></li>',
    '        </ul>',
    '      </div>',
    '    </div>',
    '  </div>',
    '  <div class="col-md-3">',
    '    <div class="thumbnail">',
    '      <div class="caption">',
    '        <h4 class="footer-heading">LOS 10 MÁS</h4>',
    '        <ul class="footer-list">',
    '          <li><a href="las-10-frases-mas-famosas-de-la-historia-del-cine.html">Las 10 frases más famosas de la historia del cine</a></li>',
    '          <li><a href="las-10-frases-5-estrellas-relacionadas-con-el-cine.html">Las 10 frases 5* relacionadas con el cine</a></li>',
    '        </ul>',
    '      </div>',
    '    </div>',
    '  </div>',
    '  <div class="col-md-3">',
    '    <div class="thumbnail">',
    '      <div class="caption">',
    '        <h4 class="footer-heading">VIAJES DE CINE</h4>',
    '        <ul class="footer-list">',
    '          <li><a href="http://viajesporchina.es/itinerario-china-de-cine.php" target="_blank">China de cine</a></li>',
    '          <li><a href="http://viajesporchina.es/itinerario-paisajes-de-avatar.php" target="_blank">China: Paisajes de Avatar</a></li>',
    '          <li><a href="enlaces-de-interes.html" target="_blank">Enlaces de interés</a></li>',
    '        </ul>',
    '      </div>',
    '    </div>',
    '  </div>',
    '  <div class="col-md-12 footer-bottom">',
    '    <div class="thumbnail no-margin-bottom">',
    '      <div class="caption text-white"><p>Todos los derechos reservados publicidadcines.com © 2015</p></div>',
    '    </div>',
    '    <div class="footer-legal-links">',
    '      <div class="caption"><a href="https://publicidadcines.com/aviso-legal.html">Aviso legal</a></div>',
    '      <div class="caption"><a href="https://publicidadcines.com/politica-privacidad.html">Política de privacidad</a></div>',
    '      <div class="caption"><a href="https://publicidadcines.com/politica-uso-cookies.html">Política de cookies</a></div>',
    '    </div>',
    '  </div>',
    '</div>'
  ].join('\n');

  // ── Botón flotante de WhatsApp ────────────────────────────────────────────

  var whatsappHtml = '<a href="https://api.whatsapp.com/send/?phone=34668554651" class="whatsapp-btn" target="_blank"><img src="images/whatsapp-icon.png" class="whatsapp-icon" alt="WhatsApp"></a>';

  // ── Logo / cabecera superior ──────────────────────────────────────────────

  var logoHtml = [
    '<div class="top-header span_top">',
    '  <a href="index.html"><img src="images/logos-top.png" class="img-full" alt="Publicidad en cines" title="Publicidad en cines" /></a>',
    '  <div class="clearfix"></div>',
    '</div>'
  ].join('\n');

  // ── Slider de vídeos (portadas anunciarse-en-cines-*) ────────────────────

  var sliderHtml = [
    '<div class="main video-slider">',
    '  <ul class="rslides" id="slider1">',
    '    <li><a href="http://publicidadcines.com/spots/piniauto-02.webm" target="_blank"><img src="images/portadas/video-cine-14.jpg" class="img-full" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/quesos-camporeal.webm" target="_blank"><img src="images/portadas/video-cine-24.jpg" class="img-full" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/restaurante-shibuya.webm" target="_blank"><img src="images/portadas/video-cine-15.jpg" class="img-full" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/spot-ceramico.webm" target="_blank"><img src="images/portadas/video-cine-16.jpg" class="img-full" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/spot-estoril.webm" target="_blank"><img src="images/portadas/video-cine-17.jpg" class="img-full" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/terranova-02.webm" target="_blank"><img src="images/portadas/video-cine-18.jpg" class="img-full" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/the-good-burger.webm" target="_blank"><img src="images/portadas/video-cine-19.jpg" class="img-full" alt="" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/clinica-h20-02.webm" target="_blank"><img src="images/portadas/video-020.jpg" class="img-full" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/la-clinica-veterinaria-02.webm" target="_blank"><img src="images/portadas/video-021.jpg" class="img-full" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/lynea-y-salud-02.webm" target="_blank"><img src="images/portadas/video-022.jpg" class="img-full" /></a></li>',
    '    <li><a href="http://publicidadcines.com/spots/spot-racc-02.webm" target="_blank"><img src="images/portadas/video-023.jpg" class="img-full" /></a></li>',
    '    <li><a href="https://www.youtube.com/embed/W_3moGr30hQ?rel=0&autoplay=1" target="_blank"><img src="images/portadas/video-cine-01.jpg" class="img-full" alt="" /></a></li>',
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

  // ── Formulario de contacto (ciudad dinámica vía data-city) ────────────────

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
    '              <input type="email" class="hidden verif" name="verificacion" />',
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
    '              <input type="checkbox" class="privacy-checkbox" name="info" value="Email" required>',
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
    '  <div class="contact_info text-center">',
    '    <div class="map"><a href="mailto:info@publicidadcines.com"><img class="img-full" src="images/footer-contact-s.jpg" alt="Plató 16 y Santiso Asesores" title="Plató 16 y Santiso Asesores"></a></div>',
    '  </div>',
    '</div>'
  ].join('\n');

  // ── Mapa de páginas para resaltar la sección activa en el menú ───────────

  var navMap = {
    'index.html':          'inicio',
    '':                    'inicio',
    'quienes-somos.html':  'quienes-somos',
    'porfolio.html':       'porfolio',
    'contacto.html':       'contacto'
  };

  // ── Inyección de componentes en el DOM ───────────────────────────────────

  function inject() {
    var navEl      = document.getElementById('site-nav');
    var footerEl   = document.getElementById('site-footer');
    var whatsappEl = document.getElementById('site-whatsapp');

    if (navEl)      navEl.innerHTML      = menuHtml;
    if (footerEl)   footerEl.innerHTML   = footerHtml;
    if (whatsappEl) whatsappEl.innerHTML = whatsappHtml;

    // outerHTML reemplaza el placeholder completo incluido su atributo data-city
    var contactEl = document.getElementById('site-contact-form');
    if (contactEl) {
      var city = contactEl.getAttribute('data-city') || '';
      contactEl.outerHTML = contactFormHtml.replace('{city}', city);
    }

    // El slider inicializa responsiveSlides tras la inserción en el DOM
    var sliderEl = document.getElementById('site-slider');
    if (sliderEl) {
      sliderEl.outerHTML = sliderHtml;
      if (typeof $ !== 'undefined' && $.fn.responsiveSlides) {
        $('#slider1').responsiveSlides({ speed: 3000 });
      }
    }

    var logoEl = document.getElementById('site-logo');
    if (logoEl) { logoEl.outerHTML = logoHtml; }

    // Inicializar popup de vídeos
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

    // Volver al inicio de la página al cargar
    window.addEventListener('load', function () { window.scrollTo(0, 0); });

    // Marcar el ítem activo del menú según la URL actual
    var page = (window.location.pathname.split('/').pop() || 'index.html').toLowerCase();
    var activeNav = navMap[page];
    if (activeNav) {
      var links = document.querySelectorAll('#site-nav [data-nav="' + activeNav + '"]');
      for (var i = 0; i < links.length; i++) {
        links[i].className = (links[i].className ? links[i].className + ' ' : '') + 'active';
      }
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', inject);
  } else {
    inject();
  }
})();
