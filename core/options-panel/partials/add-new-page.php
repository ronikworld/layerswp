<?php // Fetch current user information
$user = wp_get_current_user(); ?>

<?php // Instantiate Inputs
$form_elements = new Layers_Form_Elements(); ?>

<?php // Get builder pages
$find_builder_page = layers_get_builder_pages(); ?>

<section class="layers-area-wrapper" id="layers-add-new-page">

   <?php $this->header( __( 'Select a Layout', LAYERS_THEME_SLUG ), __( 'Get started with a blank canvas or choose from a variety of preset layouts to help you fast track your website creation.' , LAYERS_THEME_SLUG ) ); ?>

   <div class="layers-row layers-well layers-content-massive">
      <?php $this->load_partial( 'preset-layouts' ); ?>
   </div>

</section>

<section class="layers-modal-container layers-hide">
   <div class="layers-vertical-center layers-modal">
      <div class="layers-section-title layers-no-push-bottom">

         <h2 class="layers-heading layers-push-bottom" id="layers-options-header">
            <?php _e( 'Add a page title', LAYERS_THEME_SLUG ); ?>
         </h2>

         <p class="layers-form-item layers-span-12">
            <?php
               echo $form_elements->input( array(
                  'type' => 'text',
                  'name' => 'layers_preset_page_title',
                  'id' => 'layers_preset_page_title',
                  'placeholder' => __( 'Enter title here', LAYERS_THEME_SLUG ),
                  'value' => NULL,
                  'class' => 'layers-text layers-large'
               ) );
            ?>
         </p>

         <p id="layers-preset-layout-next-button">
            <a id="layers-preset-proceed" href="" class="layers-button btn-primary btn-large" data-post_id="" data-location="">
               <?php _e( 'Proceed to Customizer' , LAYERS_THEME_SLUG ); ?>
            </a>
            <a id="layers-preset-cancel" href="" class="layers-button btn-link">
               <?php _e( 'Cancel' , LAYERS_THEME_SLUG ); ?>
            </a>

            <div class="layers-load-bar layers-hide">
               <span class="layers-progress zero"></span>
            </div>


         </p>

      </div>
   </div>
</section>

<?php $this->footer(); ?>