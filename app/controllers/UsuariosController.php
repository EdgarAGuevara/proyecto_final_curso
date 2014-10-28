<?php

class UsuariosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /usuarios
	 *
	 * @return Response
	 */
	public function index()
	{
		$id=Auth::id();
		return Redirect::route('usuarios.show',[$id]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /usuarios/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Usuarios.create', array('user' => new Usuario()));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /usuarios
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new Usuario();
		$user->name = Input::get('name');
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->password_confirmation = Input::get('password_confirmation');
		if($user->save()){
			return Redirect::route('usuarios.show', array($user->id));
		}else{
			return Redirect::route('usuarios.create')->withErrors($user->errors());
		}
	}

	/**
	 * Display the specified resource.
	 * GET /usuarios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = Usuario::find($id);
		//$user->posts = $user->filterPostsByCriteria('text', 'NOT LIKE', 'Prueba%');
		// $user->posts = $user->getNPostsOrdered(10, 'created_at', 'DESC');
		if($user){
			return View::make('Usuarios.show', ['user' => $user]);
		}else{
			Throw new NotFoundHttpException;
		}	
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /usuarios/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /usuarios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /usuarios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Form for login at app.
	 * GET /usuarios/login
	 *
	 * @return Response
	 */
	public function login()
	{
		$error = Session::get('error');
		return View::make('Usuarios.login')->with('error', $error);
	}

	/**
	 * Auth at app.
	 * POST /usuarios/auth
	 *
	 * @return Response
	 */
	public function auth()
	{
		$auth_data = ['email' => Input::get('email'), 'password' => Input::get('password')];
		
		// Auth::attempt recive un campo que sea unico y un campo de password

		if(Auth::attempt($auth_data)){
			// var_dump("GOLA");
			return Redirect::intended( route('main') );
		}else{
			// var_dump("GOLA");
			return Redirect::route('Usuraios.login')->with('error', Lang::get('messages.wrong_credentials'))->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('login')->with('error', 'Has cerrado sesión exitosamente');
	}
}