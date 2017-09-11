
    <header class="w3-container w3-theme-d1">
      <h3>Newsletter</h3>
    </header>

<div class="w3-container" >
<?php 

$doc = new DOMDocument;

// Load mailpoet with php UTF-8 magic bullshit
$doc->loadHTML(
  mb_convert_encoding(
    do_shortcode('[mailpoet_form id="1"]') , 'HTML-ENTITIES', 'UTF-8'
  ),
  LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

$finder = new DomXPath($doc);

// Customize: Green sumit button
$items = $finder->query("//*[contains(@class, 'mailpoet_submit')]");
$button_summit= $items->item(0);
addClassDOMElement($button_summit, 'w3-button w3-green w3-margin-right');

// Customize: Add gray footer
$p_summit = $button_summit->parentNode;


// Move button on bottom
$form= $p_summit->parentNode;
$form->appendChild($p_summit);

// Customize: Change style of email input
$items = $finder->query("//input[contains(@class, 'mailpoet_text')]");
$email_input= $items->item(0);
addClassDOMElement($email_input, 'w3-input w3-hover-theme w3-theme-l4 w3-border-0');

// Customize: Fix margin of <p> input
$p_input= $email_input->parentNode;
addClassDOMElement($p_input, 'w3-margin-top');

// Customize: Fix margin of <div> message
$items = $finder->query("//div[contains(@class, 'mailpoet_message')]");
$message= $items->item(0);
addClassDOMElement($message, 'w3-margin-top');

echo $doc->saveHTML();

?>





      </div>

