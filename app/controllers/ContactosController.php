<?php

class ContactosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /contactos
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /contactos/create
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$user = Usuario::find($id);
		return View::make('contactos.create', array('user' => $user,'contacto' => new Contacto()));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /contactos
	 *
	 * @return Response
	 */
	public function store()
	{
		$id=Input::get('usuario_id');
		$contacto = new Contacto();
		$contacto->name = Input::get('name');
		$contacto->last_name = Input::get('last_name');
		$contacto->email = Input::get('email');
		$contacto->address = Input::get('address');
		$contacto->usuario_id = Input::get('usuario_id');		
		if($contacto->save()){
			var_dump($contacto);
			 return Redirect::route('contactos.show', array($contacto->id));
		}else{
			// var_dump($id);
			return Redirect::route('contactos.create',array($id))->withErrors($contacto->errors());
		}
	}

	/**
	 * Display the specified resource.
	 * GET /contactos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contacto = Contacto::find($id);
		//$contacto->posts = $contacto->filterPostsByCriteria('text', 'NOT LIKE', 'Prueba%');
		// $contacto->posts = $contacto->getNPostsOrdered(10, 'created_at', 'DESC');
		if($contacto){
			// var_dump($contacto);
			return View::make('contactos.show', ['contacto' => $contacto]);
		}else{
			Throw new NotFoundHttpException;
		}	
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /contactos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$contacto = Contacto::find($id);
		if($contacto){
			return View::make('contactos.edit', array('contacto' => $contacto));
		}else{
			Throw new NotFoundHttpException;
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /contactos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$contacto = Contacto::find($id);
		if($contacto){
			$contacto->name = Input::get('name');
			$contacto->last_name = Input::get('last_name');
			$contacto->email = Input::get('email');
			$contacto->address = Input::get('address');
			$contacto->usuario_id = Input::get('usuario_id');
			if($contacto->updateUniques()){
				return Redirect::route('contactos.show', array($id));
			}else{
				return Redirect::route('contactos.edit', array($contacto->contacto_id))->withErrors($user->errors());
			}
		}else{
			Throw new NotFoundHttpException;	
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /contactos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$contacto = Contacto::find($id);
		$id_usuario=$contacto->usuario_id;
		if($contacto){
			if($contacto->delete()){
				return Redirect::route('usuarios.show', array($id_usuario));
			}else{
				App::abort(500);
			}
		}else{
			Throw new NotFoundHttpException;
		}
	}

}