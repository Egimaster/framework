 /**
 * Created by jose on 26/03/14.
 */

/* FUNCIÓN DE THUMBNAILS ESPECIALES PARA GALERÍA CON BOTONES DE REDES SOCIALES */
 $(function() {
     $('.panel-image img.panel-image-preview').on('click', function(e) {
         $(this).closest('.panel-image').toggleClass('hide-panel-body');
     });
 });