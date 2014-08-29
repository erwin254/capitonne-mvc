<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	protected function __noEsAjax(){
		if(!Request::ajax()) return Response::make(Lang::get('error.post_403'), 403);
		if(Request::ajax()) return FALSE;
	}

	protected function __datosInsuficientes($arreglo){
		$suficientes = TRUE;
		foreach ($arreglo as $fila) $suficientes = !is_null(Input::get($fila));
		if($suficientes) return FALSE;
		else return Response::json(array('status' => 'error', 'error' => array('message' => Lang::get('error.post_inconsistencia')) ), 406);
	}

	protected function __retornoInconsistencia(){
		return Response::json(array('status' => 'error', 'error' => array('message' => Lang::get('error.post_inconsistencia')) ) , 406);
	}

	protected function __retornoError($mensaje){
		return Response::json(array('status' => 'error', 'error' => array('message' => $mensaje) ) , 500);
	}

	protected function __loginExist(){
		$user = Sentry::getUser();
		if  ($user == NULL) {
			return false;
		}
		else{
			return true;
		}
		
	}
}