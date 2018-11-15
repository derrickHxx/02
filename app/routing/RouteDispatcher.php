<?php 
namespace App;

use AltoRouter;

class RouteDispatcher{

	protected $match;

	protected $controller;

	protected $method;


	public function __construct(AltoRouter $router){

		$this->match = $router->match();

		if($this->match){

			list($controller,$method) = explode('@',$this->match['target']);
			$this->controller = $controller;
			$this->method = $method;

			if(is_callable(array(new $this->controller,$this->method))){
				
			}else{
				echo "The method {$this->method} is not definded in {$this->controller}";
			}

			
			$index = new \App\Controllers\IndexController();
			$index->show();
		}else{
			header($_SERVER["SERVER_PROTOCOL"].'404 Not Found');
			view("errors/404");
		}

	}
}
?>