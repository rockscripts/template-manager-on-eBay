<?php
/**
 * Default controller
 * This class is called when using these urls:
 * - http://yoursite.com/
 * - http://yoursite.com/index.php?act=home
 */

include 'base.php';

class Home extends GController {

	/**
	 * index is the default method for controller
	 * this method is called when using these urls:
	 * - http://yoursite.com/
	 * - http://yoursite.com/index.php?act=home
	 * - http://yoursite.com/index.php?act=home.index
	 */
	public function index() {
		$data['menu'] = $this->easymenu(1);
		
		$data['horizontal1'] = $this->easymenu(1, 'class="horizontal white"');
		$data['horizontal2'] = $this->easymenu(1, 'class="horizontal black"');
		$data['horizontal3'] = $this->easymenu(1, 'class="horizontal red"');
		$data['horizontal4'] = $this->easymenu(1, 'class="horizontal green"');
		$data['horizontal5'] = $this->easymenu(1, 'class="horizontal blue"');
		
		$data['vertical1'] = $this->easymenu(2, 'class="vertical white"');
		$data['vertical2'] = $this->easymenu(2, 'class="vertical black"');
		$data['vertical3'] = $this->easymenu(2, 'class="vertical red"');
		$data['vertical4'] = $this->easymenu(2, 'class="vertical green"');
		$data['vertical5'] = $this->easymenu(2, 'class="vertical blue"');

		$this->view('home', $data);
	}

}

/* End of home.php */