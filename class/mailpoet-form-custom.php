<?php
class MailpoetFormCustom { 

  private $dom;
  private $xpath;

  private $submit_button;
  private $submit_paragraph;

  private $text_input;
  private $text_paragraph;

  private $message_div;

  public function __construct() {
    $this->dom = new DOMDocument;

    // Load mailpoet with php UTF-8 magic bullshit
    $this->dom->loadHTML(
      mb_convert_encoding(
        do_shortcode('[mailpoet_form id="1"]') , 'HTML-ENTITIES', 'UTF-8'
      ), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
    );

    $this->xpath = new DomXPath($this->dom);
    $items = $this->xpath->query("//input[contains(@class, 'mailpoet_submit')]");
    $this->submit_button= $items->item(0);
    $this->submit_paragraph= $this->submit_button->parentNode;

    $items = $this->xpath->query("//input[contains(@class, 'mailpoet_text')]");
    $this->text_input= $items->item(0);
    $this->text_paragraph= $this->text_input->parentNode;


    $items = $this->xpath->query("//div[contains(@class, 'mailpoet_message')]");
    $this->message_div= $items->item(0);
  }

  private function addClassDOMElement($element, $class) {
    $element->setAttribute('class', $element->getAttribute('class').' '.$class);
  }

  private function createElement($domObj, $tag_name, $value = NULL, $attributes = NULL)
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

  public function addClassSubmitButton($class) {
    $this->submit_button->setAttribute('class', $class);
  }

  public function addClassSubmitParagraph($class) {
    $this->submit_paragraph->setAttribute('class', $class);
  }

  public function addButton($text, $attr) {
    $close_button = createElement($doc, 'button', $text, $attr);
    $this->submit_paragraph->appendChild($close_button);
  }

  public function moveButtonBottom() {
    $this->submit_paragraph->parentNode->appendChild($this->submit_paragraph);
  }

  public function addClassTextInput($class) {
    $this->text_input->setAttribute('class', $class);
  }

  public function addClassTextParagraph($class) {
    $this->text_paragraph->setAttribute('class', $class);
  }

  public function addClassMessageDiv($class) {
    $this->message_div->setAttribute('class', $class);
  }

  public function __toString() {
        return $this->dom->saveHTML();
  }
}
?>
