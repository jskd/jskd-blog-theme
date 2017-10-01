<header class="w3-container w3-theme-d1">
  <h3>Newsletter</h3>
</header>
<div class="w3-container w3-margin-top">
  
</div>
<div class="w3-container" >
  <?php

echo do_shortcode('
[jetpack_subscription_form title="" subscribe_text="Restez informés en vous inscrivant à la newsletter." subscribe_button="Sign Me Up" show_subscribers_total="0"]');
   /* $form= new MailpoetFormCustom();
    $form->addClassSubmitButton('w3-button w3-green w3-margin-right');
    $form->addClassSubmitParagraph('');
    $form->addClassTextInput('w3-input w3-hover-theme w3-theme-l4 w3-border-0');
    $form->addClassTextParagraph('w3-margin-top');
    echo $form;*/
  ?>
</div>
