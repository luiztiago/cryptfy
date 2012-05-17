<?php
class AppController extends Controller {

	public $layout = 'default';
	public $components = array();
	public $helpers = array(
		'Html',
		'Form'
	);

	/**
	 * Método utilitário para retorno
	 * em JSON
	 *
	 * @param string $response
	 * @return void
	 * @author Djalma Araújo
	 */
	protected function JSONOutput($response) {
		header('Content-Type: application/json');
		echo json_encode($response);
		exit;
	}
}