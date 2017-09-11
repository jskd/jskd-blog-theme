<header class="w3-container w3-theme-d1">
  <h3>Newsletter</h3>
</header>

<div class="w3-container" >
  <?php
    $form= new MailpoetFormCustom();
    $form->addClassSubmitButton('w3-button w3-green w3-margin-right');
    $form->addClassSubmitParagraph('');
    $form->addClassTextInput('w3-input w3-hover-theme w3-theme-l4 w3-border-0');
    $form->addClassTextParagraph('w3-margin-top');
    echo $form;
  ?>
</div>
