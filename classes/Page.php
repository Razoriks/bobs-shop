<?php 
/**
* 
*/
class Page {

	var $content;
	var $title = "TLA Consalting Pty Ltd";
	var $keywords = "TLA Consalting";

	var $buttons = array(
							'Home' => 'home.php', 
							'Contact' => 'contact.php', 
							'Services' => 'services.php', 
							'Site map' => 'map.php', 
						);
	
	function setContent($newcontent) {
		$this->content = $newcontent;
	}

	function setTitle($newtitle) {
		$this->title = $newtitle;
	}

	function setKeywords($newkeywords) {
		$this->keywords = $newkeywords;
	}

	function setButtons($newbuttons) {
		$this->buttons = $newbuttons;
	}

	function display() {
		include("../includes/head.inc");
		echo $this->content;
		include("../includes/foot.inc");
	}

}