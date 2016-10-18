<?php
/**
 * form template.
 *
 * @package minimal
 */
?>

<form id="contact" name="contact-form" method="post" action="<?php bloginfo('stylesheet_directory'); ?>/formulario.php">

      <div class="form-group">
        <label for="f_name">Nombre <span class="asterisk">*</span></label>
        <input type="text" id="f_name" name="f_name" class="form-control" value="" placeholder="Introduce tu nombre" required aria-required="true">
      </div>

      <div class="form-group">
        <label for="f_email">E-mail <span class="asterisk">*</span></label>
        <input type="email" id="f_email" name="f_email" class="form-control"  placeholder="Introduce tu e-mail" required aria-required="true">
      </div>

      <div class="form-group">
        <label for="f_message">Consulta <span class="asterisk">*</span></label>
        <textarea id="f_message" name="f_message" rows="7" class="form-control" placeholder="Escribe aquí tu consulta" required aria-required="true"></textarea>
      </div>

      <button id="btn-submit" name="btn-submit" class="btn btn-default">Enviar</button>

<!-- cruz para cerrar el formulario -->
    <div class="close-form">
          <span class="cruz-l"></span>
          <span class="cruz-lr"></span>
    </div> 
</form>