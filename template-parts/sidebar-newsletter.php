
    <header class="w3-container w3-theme-d1">
      <h3>Newsletter</h3>
    </header>
<div class="w3-container" >
      <div class="w3-section">
        Restez informés en vous inscrivant à la newsletter
      </div>
    <form  class="w3-section" id="newsletter-sidebar-form" method="post" action="/?na=s">
        <div class="w3-row">
          <div class="w3-col" style="width:50px">
            <i class="w3-xxlarge fa fa-envelope-o"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-hover-theme w3-theme-l4 w3-border-0" placeholder="Entrer son email" name="ne" type="email" required placeholder="Email">
          </div>
        </div>
    </form>


       <div class="w3-section">
         <div id="newsletter-sidebar-error" class="w3-panel w3-pale-red w3-leftbar w3-border w3-border-red w3-padding">
           L'adresse de messagerie n'est pas valide.
         </div>
         <div id="newsletter-sidebar-sucess" class="w3-panel w3-pale-green w3-leftbar w3-border w3-border-green w3-padding">
           Merci, vous êtes abonné à la newsletter. <br>
           Vous recevrez un e-mail de confirmation dans quelques minutes. 
           Suivez le lien pour confirmer votre abonnement. <br>
           Si le courrier électronique prend plus de 15 minutes pour apparaître dans 
           votre messagerie, vérifiez votre dossier de spam.
         </div>
       </div>

      <div class="w3-section" id="newsletter-sidebar-submit" >
        <button class="w3-button w3-green" onclick="submit_newsletter_sidebar()">S'abonner</button>
      </div>

