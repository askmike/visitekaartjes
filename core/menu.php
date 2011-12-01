<?

class Menu {
	
	public $html;
	
	function __construct($current) {
		
		$menu = $this->menu();
		
		$current = (empty($current)) ? 'PHP' : strtoupper($current);
		
		foreach ($menu as $value) {
			if ($value['name'] == $current) {
				$html .= $value['name'] . '  &#126; ';
			} else {
				$html .= '<a href="' . $value['url'] . '">' . $value['name'] . '</a> &#126; ';
			}
		}
		//strip out the last ~
		//since I'm not counting this is the easiest
		$this->html = substr($html,0,-7);
	}
	
	function __toString() {
		return $this->html;
	}
	
	function menu() {
		return array(
			array('name' => 'PHP', 'url' => BASE),
			array('name' => 'AJAX', 'url' => BASE . 'ajax'),
			array('name' => 'JS', 'url' => BASE . 'js')
		);
	}
}

?>