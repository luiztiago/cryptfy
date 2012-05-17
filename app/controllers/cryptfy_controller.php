<?php
class CryptfyController extends AppController {

	public function index() {
		if ($this->data) {
			if ($this->data['string']) {
				$string 	= $this->data['string'];
				$results 	= $this->Cryptfy->getAll($string);

			} else {
				$results = array(
					'error' 	=> 'invalid_string',
					'string' 	=> $string,
					'results' 	=> false
				);
			}

			$this->output($results);
		}
	}


	public function output($results) {
		switch ($this->param('extension')) {
			case 'json':
				$this->autoRender = false;
				$this->JSONOutput(array('results' => $results));
				break;
			default:
				$this->set('results', $results);
				$this->set('string', $this->data['string']);
		}
	}
}