<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
	protected $layout = 'layouts.default';

	protected function setupLayout(){
		if(!is_null($this->layout)){
			return View($this->layout);
		}
	}
}
