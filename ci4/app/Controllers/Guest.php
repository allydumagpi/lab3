<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
	public function index()
	{
		$model = model (GuestModel::class);
		
		$data = [
			'guest' => $model->getGuest(),
			'title' => 'Commision Entry'
		];
		
		return view('templates/header', $data)
			 . view('guest/index')
			 . view('templates/footer');		 
	}
	
	public function create()
	{
		helper('form');
		
		// Checks whether the form is submitted.
		if (! $this->request->is('post')) {
			// The form is not submitted, so returns the form.
			return view('templates/header', ['title' => 'Create a guest entry'])
				. view('guest/create')
				. view('templates/footer');
		}
		
		$post = $this->request->getPost(['name', 'email', 'website', 'comment']);
		
		// Checks whether the submitted data passed the validation rules.
		if (! $this->validateData($post, [
			'name' => 'required|max_length[255]|min_length[3]',
			'email' => 'required|max_length[255]|min_length[3]',
			'website' => 'required|max_length[255]|min_length[3]',
			'comment' => 'required|max_length[500]|min_length[3]',
			
		])) {
			// The validation fails, so returns the form.
			return view('templates/header', ['title' => 'Create a guest list'])
				. view('guest/create')
				. view('templates/footer');
		}
		
		$model = model(GuestModel::class);
		
		$model->save([
			'name' => $post['name'],
			//'slug' => url_title($post['title'], '-', true),
			'email' => $post['email'],
			'website' => $post['website'],
			'comment' => $post ['comment'],
			
			
		]);
		
		return view('templates/header', ['title' => 'Create a guest item'])
			. view('guest/success')
			. view('templates/footer');
	}
}

			
		
		