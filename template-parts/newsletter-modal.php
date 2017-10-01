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
    <div class="w3-container">
    <?php
      echo do_shortcode('[jetpack_subscription_form
        title=""
        subscribe_text="Restez informés en vous inscrivant à la newsletter."
        subscribe_button="S\'abonner"
        show_subscribers_total="0"]
      ');
    ?>
    </div>
	</div>
</div>
