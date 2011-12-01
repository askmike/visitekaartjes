<?php

class Model {
	
	public $vars = array('naam','beroep');
	
	public function getData() {
		$data = $this->getPostInput( $this->vars );
		
		return $data;
	}
	
	
	# Public: Helpt bij de preventie van XSS aanvallen
	# (Wicked Cool PHP #20)
	#
	# $string - De tekst die gecontroleerd moet worden
	# $length - Optioneel, de maximale lengte van de tekst
	#
	# Examples:
	#
	#	transform_HTML('<evil>#script</evil>');
	#	# => &lt;evil&gt;&#35;script&lt;/evil&gt;
	#
	#	transform_HTML('<evil>#script</evil>', 10);
	#	# => &lt;evil&g
	#
	# Returns: Een veiligere versie van de opgegeven tekst
	function transform_HTML($string, $length=null) {
		# Verwijder overbodige spaties aan begin en eind van de regel
		$string = trim($string);
	
		# Voorkom potentiele Unicode codec problemen
		$string = utf8_decode($string);
	
		# HTMLiseer HTML-specifieke karakters
		$string = htmlentities($string, ENT_NOQUOTES);
		$string = str_replace('#', "&#35;", $string);
		$string = str_replace('%', "&#37;", $string);
	
		$length = intval($length);
		if($length > 0) {
			$string = substr($string, 0, $length);
		}
		return $string;
	}

	function getPostInput() {
		$input = $this->vars;
		//loop whole input array
		for($i = 0, $size = sizeof($input); $i < $size; ++$i)
		{
			//map input pairs items to (safe) POST array pairs and store them in output array
		    $output[$input[$i]] = $this->transform_HTML($_POST[$input[$i]]);
		}
		return $output;
	}
	
	public function getGetInput() {
		$input = $this->vars;
		//loop whole input array
		for($i = 0, $size = sizeof($input); $i < $size; ++$i)
		{
			//map input pairs items to (safe) POST array pairs and store them in output array
		    $output[$input[$i]] = $this->transform_HTML($_GET[$input[$i]]);
		}
		return $output;
	}
}
?>