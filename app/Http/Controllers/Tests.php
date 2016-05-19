<?php


namespace App\Http\Controllers;


class Tests extends ProtectedController
{
	public function getIndex(){
		return view('tests.index');
	}
}