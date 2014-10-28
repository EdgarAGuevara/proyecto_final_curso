<?php

class TelefonosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /telefonos
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /telefonos/create
	 *
	 * @return Response
	 */
	public function create($id_contacto)
	{
		$contacto = Contacto::find($id_contacto);
		return View::make('telefonos.create', array('contacto' => $contacto,'tel' => new Telefono()));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /telefonos
	 *
	 * @return Response
	 */
	public function store()
	{
		$id=Input::get('contacto_id');
		$telefono = new Telefono();
		$telefono->label = Input::get('label');
		$telefono->num_tel = Input::get('num_tel');
		$telefono->contacto_id = Input::get('contacto_id');		
		// var_dump($id);
		if($telefono->save()){
			// var_dump($telefono);
			 return Redirect::route('telefonos.show', array($telefono->contacto_id));
		}else{
			// var_dump($id);
			return Redirect::route('telefonos.create',array($id,$telefono))->withErrors($telefono->errors());
		}
	}

	/**
	 * Display the specified resource.
	 * GET /telefonos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contacto = Telefono::find($id)->contacto;
		//$contacto->posts = $contacto->filterPostsByCriteria('text', 'NOT LIKE', 'Prueba%');
		// $contacto->posts = $contacto->getNPostsOrdered(10, 'created_at', 'DESC');
		if($contacto){
			// var_dump($contacto);
			 return Redirect::route('contactos.show', array($contacto->id));
			// return View::make('contactos.show', ['contacto' => $contacto]);
		}else{
			Throw new NotFoundHttpException;
		}	
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /telefonos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$telefono = Telefono::find($id);
		if($telefono){
			return View::make('telefonos.edit', array('tel' => $telefono));
		}else{
			Throw new NotFoundHttpException;
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /telefonos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$telefono = Telefono::find($id);
		if($telefono){
			$telefono->label= Input::get('label');
			$telefono->num_tel = Input::get('num_tel');
			if($telefono->updateUniques()){
				return Redirect::route('contactos.show', array($telefono->contacto_id));
			}else{
				return Redirect::route('telefonos.edit', array($id))->withErrors($user->errors());
			}
		}else{
			Throw new NotFoundHttpException;	
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /telefonos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$telefono = Telefono::find($id);
		$id_contacto=$telefono->contacto_id;
		if($telefono){
			if($telefono->delete()){
				return Redirect::route('contactos.show', array($id_contacto));
			}else{
				App::abort(500);
			}
		}else{
			Throw new NotFoundHttpException;
		}
	}

}