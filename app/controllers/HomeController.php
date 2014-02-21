<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('landingPage');
	}

	public function haoInsert()
	{
		/*
		 * Validation Input
		 */
		$validation = Validator::make(
			Input::all(),
			array(
				'email' => 'required|email',
				'FirstName' => 'required|min:3',
				'Surname' => 'required|min:3',
				'Company' => 'required|min:2',
				'Country' => 'required|min:2',
				'RWithSAP' => 'required|min:2'
		)
		);
		if ($validation->fails())
		{
			return Redirect::to('/')->withErrors($validation)
				->withInput();
		}else {

		/*
		 * insert a record
		 */

		$user = new User;
		$user->Email = Input::get('email');
		$user->FirstName = Input::get('FirstName');
		$user->Surname = Input::get('Surname');
		$user->Company = Input::get('Company');
		$user->Country = Input::get('Country');
		$user->RelationshipWithSAP = Input::get('RWithSAP');
		$user->save();
		return View::make('haoInsert')->with(
		'Email', Input::get('email'));
		}
	}
}
