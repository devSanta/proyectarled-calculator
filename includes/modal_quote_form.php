<?php ?>

<div id="modal-quiote-form" class="led-modal-content test" style="display:block;">
  <h2>Dejanos tus datos</h2>
  <div class="led-cal-suggestion led-form-description">
      <p>Tan pronto nuestros agentes reciban el corre se estarán comunicando para brindarte toda la sesoría necesaria</p>
  </div>
  <form>
      <div class="led-form-item">
          <label for="led-name">Nombre completo</label>
          <input type="text" name="led-name" id="led-name" class="led-form-input" placeholder="e.g. Cristian Henao">
      </div>
      <div class="led-form-item">
          <label for="led-email">Correo electrónico</label>
          <input type="email" name="led-email" id="led-email" class="led-form-input" placeholder="e.g. proyectarled@gmail.com">
      </div>
      <div class="led-form-item">
          <label for="led-phone">Telefóno de contacto</label>
          <input type="tel" name="led-phone" id="led-phone" class="led-form-input" placeholder="e.g. 3153068840">
      </div>
      <input type="hidden" name="led-body" class="led-form-input">
      <div id="product-button">
          <a class="led-product-button">Cotizar</a>
      </div>
  </form>
</div>