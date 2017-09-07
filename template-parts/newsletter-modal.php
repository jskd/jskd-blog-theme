<?php

?>

    <!-- Newsletter modal -->
    <div id="newsletter-modal" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-theme-l5" style="max-width:600px">
        <header class="w3-container w3-theme-d1">
          <span onclick="close_newsletter_modal()" title="Close Modal"
            class="w3-button w3-xlarge w3-hover-red w3-display-topright">
            &times;
          </span>
          <h2>Abonnement à la newsletter</h2>
        </header>
          <div class="w3-container w3-margin-top">
<?php echo do_shortcode('[mailpoet_form id="1"]'); ?>
          Restez informés en vous inscrivant à la newsletter. 
        </div>
        <form id="newsletter-modal-form" method="post" action="/?na=s">
          <div class="w3-container w3-margin-top">
            <label for="newsletter-modal-email">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              Adresse de messagerie *
            </label>
            <label for="newsletter-modal-email" class="w3-right w3-text-red">
              Obligatoire
            </label>
            <input required id="newsletter-modal-mail" name="ne" type="email"
              class="w3-input w3-hover-theme w3-theme-l4 w3-border-0" value=""
              placeholder="Entrer son email pour s'abonner" size="30">
            <label for="enewsletter-modal-mail" class="w3-small w3-right">
              Votre adresse de messagerie ne sera pas publiée.
            </label>
          </div>
        </form>

       <div class="w3-container">
         <div id="newsletter-modal-error" class="w3-panel w3-pale-red w3-leftbar w3-border w3-border-red w3-padding">
           L'adresse de messagerie n'est pas valide.
         </div>
         <div id="newsletter-modal-sucess" class="w3-panel w3-pale-green w3-leftbar w3-border w3-border-green w3-padding">
           Merci, vous êtes abonné à la newsletter. <br>
           Vous recevrez un e-mail de confirmation dans quelques minutes. 
           Suivez le lien pour confirmer votre abonnement. <br>
           Si le courrier électronique prend plus de 15 minutes pour apparaître dans 
           votre messagerie, vérifiez votre dossier de spam.
         </div>
       </div>
       <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
         <button id="newsletter-modal-submit" type="button" class="w3-button w3-green w3-margin-right"  onclick="submit_newsletter_modal()"> S'abonner</button>
         <button id="newsletter-modal-close" type="button" class="w3-button w3-red" onclick="close_newsletter_modal()"> Annuler</button>
       </div>
     </div>
     </div>
