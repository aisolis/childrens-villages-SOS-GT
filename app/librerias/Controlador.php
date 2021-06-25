<?php 

class Controlador{

	public function modelo($modelo){

		require_once '../app/modelos/'.$modelo.'.php';

		return new $modelo();
	}

	public function vista($url=[], $data = [], $SOS = [], $Acord = [], $foot = [], $mess = [], $Analy = [], $Vid = [], $pre = []){
		if (file_exists('../app/vistas/'.$url.'.php')) {
			require_once '../app/vistas/'.$url.'.php';
		}else{
			die('Esta vista no existe');
		}
	}

	public function vistaAdmin($url, $data = [], $SOS = [], $Acord = [], $foot = [], $mess = [], $Analy = [], $Vid = [], $pre = [], $todo=[]){
		if (file_exists('../app/vistas/'.$url.'.php')) {
			require_once '../app/vistas/'.$url.'.php';
		}else{
			die('Esta vista no existe');
		}
	}


}

 ?>