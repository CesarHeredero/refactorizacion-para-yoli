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
