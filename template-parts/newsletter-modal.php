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

<!-- Mail poet -->
<?php

$doc = new DOMDocument;

// Load mailpoet with php UTF-8 magic bullshit
$doc->loadHTML(
  mb_convert_encoding(
    do_shortcode('[mailpoet_form id="1"]') , 'HTML-ENTITIES', 'UTF-8'
  ),
  LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

function addClassDOMElement($element, $class) {
  $element->setAttribute('class', $element->getAttribute('class').' '.$class);
}

function createElement($domObj, $tag_name, $value = NULL, $attributes = NULL)
{
  $element = ($value != NULL ) ? $domObj->createElement($tag_name, $value) : $domObj->createElement($tag_name);

  if( $attributes != NULL )
  {
    foreach ($attributes as $attr=>$val)
    {
      $element->setAttribute($attr, $val);
    }
  }
  return $element;
}

$finder = new DomXPath($doc);

// Customize: Green sumit button
$items = $finder->query("//*[contains(@class, 'mailpoet_submit')]");
$button_summit= $items->item(0);
addClassDOMElement($button_summit, 'w3-button w3-green w3-margin-right');

// Customize: Add gray footer
$p_summit = $button_summit->parentNode;
addClassDOMElement($p_summit, 'w3-container w3-border-top w3-padding-16 w3-light-grey');

// Add close button
$close_button = createElement($doc, 'button', 'Fermer', array(
  'class'=> 'w3-button w3-red',
 'type' => 'button',
 'onclick' => 'close_newsletter_modal()',
 'id' => 'newsletter-modal-close'
));

$p_summit->appendChild($close_button);

// Move button on bottom
$form= $p_summit->parentNode;
$form->appendChild($p_summit);

// Customize: Change style of email input
$items = $finder->query("//input[contains(@class, 'mailpoet_text')]");
$email_input= $items->item(0);
addClassDOMElement($email_input, 'w3-input w3-hover-theme w3-theme-l4 w3-border-0');

// Customize: Fix margin of <p> input
$p_input= $email_input->parentNode;
addClassDOMElement($p_input, 'w3-container w3-margin-top');

// Customize: Fix margin of <div> message
$items = $finder->query("//div[contains(@class, 'mailpoet_message')]");
$message= $items->item(0);
addClassDOMElement($message, 'w3-container w3-margin-top');

echo $doc->saveHTML();

?>
	</div>
</div>
