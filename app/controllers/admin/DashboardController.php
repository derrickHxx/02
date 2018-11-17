<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Classes\Session;
use App\Classes\Request;

class DashboardController extends BaseController{

	public function show(){

		Session::add("admin","You are welcome");
		Session::remove('admin');

		if(Session::has('admin')){
			$msg = Session::get('admin');
		}else{
			$msg = 'Not defined';
		}
		return view("/admin/dashboard",['admin'=>$msg]);
		
	}

	public function get(){
		$request = Request::all();
		var_dump($request->file);
	}
}
?>