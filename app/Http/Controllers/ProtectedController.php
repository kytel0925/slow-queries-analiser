<?php


namespace App\Http\Controllers;


/**
 * Los Controllers que solo son accesibles por usuarios autenticados deben de heredar
 * de este controlador
 *
 * Class ProtectedController
 * @package App\Http\Controllers
 */
abstract class ProtectedController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
}