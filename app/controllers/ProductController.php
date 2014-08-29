<?php

class ProductController extends BaseController {

	public function save()
	{
		//if($retorno = $this->__NoEsAjax()) return $retorno;
		if($retorno = $this->__datosInsuficientes(array('name', 'description', 'price', 'price_offer', 'link'))) return $retorno;

		Input::file('image')->move('image/', Input::file('image')->getClientOriginalName());
		Image::resize('image/'.Input::file('image')->getClientOriginalName(), 300, 300);

		$proyecto = new Product;
		$proyecto->name = Input::get('name');
		$proyecto->description = Input::get('description');
		$proyecto->price = Input::get('price');
		$proyecto->price_offer = Input::get('price_offer');
		$proyecto->link = Input::get('link');
		$proyecto->image = Input::file('image')->getClientOriginalName();
		
		if ($proyecto->save()) {
			return Redirect::to('login');
		}
	
	}

}
