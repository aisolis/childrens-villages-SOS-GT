<?php 

class modeloAdmin{

	private $db;

	public function __construct(){
		$this->db = new Conexion();
	}



	public function todolist($data){
		$usuario = $data['usuario'];
		$nombre = $data['todoname'];
		$fecha = $data['fecha'];
		$hora = $data['hora'];

        $ins = $this->db->query("INSERT INTO todo VALUES (DEFAULT, '$usuario', '$nombre','$fecha','$hora', 'Pendiente')");

		if ($ins) {
			return true;
		}else{
			return false;
		}
	

	}

	/*todo*/

	public function updatetodolist($data){
		$id = $data['id'];
		$usuario = $data['usuario'];
		$nombre = $data['todoname'];
		$fecha = $data['fecha'];
		$hora = $data['hora'];
		$estado = $data['estado'];

		$ins = $this->db->query("UPDATE `todo` SET `usuario` = '$usuario', `nombre` = '$nombre', `fecha` = '$fecha', `hora` = '$hora', `estado` = '$estado' WHERE `todo`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function deltodo($data){
		$id = $data['id'];

		$ins = $this->db->query("DELETE FROM `todo` WHERE `todo`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}


	}

	/*todo*/

	/*slider*/

	public function insertimg($data){
		$folder = $data['folder'];
		$imagen = $data['imagen'];

		$ins = $this->db->query("INSERT INTO `image` (`id`, `folder`, `src`, `created_at`, `updated_at`) VALUES (NULL, '$folder', '$imagen', NULL, NULL)");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}


	public function updateimg($data){
		$id = $data['id'];
		$img = $data['img'];

		$ins = $this->db->query("UPDATE `image` SET `src` = '$img' WHERE `image`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function delimg($data){
		$id = $data;

		$ins = $this->db->query("DELETE FROM `image` WHERE `image`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}


	}

	/*slider*/

	/*video*/

	public function insertvid($data){
		$folder = $data['folder'];
		$imagen = $data['imagen'];
		$url = $data['url'];

		$ins = $this->db->query("INSERT INTO `video` (`id`, `Urla`, `folder`, `src`, `updated_at`) VALUES (NULL, '$url', '$folder', '$imagen', NULL)");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}


	public function updatevid($data){
		$id = $data['id'];
		$img = $data['img'];
		$url = $data['url'];

		$ins = $this->db->query("UPDATE `video` SET `Urla` = '$url', `src` = '$img' WHERE `video`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function delvid($data){
		$id = $data;

		$ins = $this->db->query("DELETE FROM `video` WHERE `video`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}


	}

	/*video*/

	/*sos*/

	public function insertsos($data){
		$folder = $data['folder'];
		$imagen = $data['imagen'];
		$nombre = $data['nombre'];
		$cargo = $data['cargo'];

		$ins = $this->db->query("INSERT INTO `embajadoressos` (`id`, `nombre`, `rol`, `folder`, `src`, `updated_at`) VALUES (NULL, '$nombre', '$cargo', '$folder', '$imagen', NULL)");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}


	public function updatesos($data){
		$id = $data['id'];
		$folder = $data['folder'];
		$imagen = $data['imagen'];
		$nombre = $data['nombre'];
		$cargo = $data['cargo'];

		$ins = $this->db->query("UPDATE `embajadoressos` SET `nombre` = '$nombre', `rol` = '$cargo', `folder` = '$folder', `src` = '$imagen' WHERE `embajadoressos`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function delsos($data){
		$id = $data;

		$ins = $this->db->query("DELETE FROM `embajadoressos` WHERE `embajadoressos`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}


	}

	/*sos*/

	/*acordeon*/

	public function insertacord($data){
		$folder = $data['folder'];
		$imagen = $data['imagen'];
		$titulo = $data['titulo'];
		$contenido = $data['contenido'];

		$ins = $this->db->query("INSERT INTO `acord` (`id`, `titulo`, `contenido`, `folder`, `src`, `updated_at`) VALUES (NULL, '$titulo', '$contenido', '$folder', '$imagen', NULL)");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}


	public function updateacord($data){
		$id = $data['id'];
		$folder = $data['folder'];
		$imagen = $data['imagen'];
		$titulo = $data['titulo'];
		$contenido = $data['contenido'];

		$ins = $this->db->query("UPDATE `acord` SET `titulo` = '$titulo', `contenido` = '$contenido', `folder` = '$folder', `src` = '$imagen' WHERE `acord`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function delacord($data){
		$id = $data;

		$ins = $this->db->query("DELETE FROM `acord` WHERE `acord`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}


	}

	/*acordeon*/

	/*contacto*/

	public function updatecon($data){
		echo var_dump($data);
		if(isset($data['donacionOtro'])){
			$id = $data['id'];
			$Individual = $data['Individual'];
			$Nombre = $data['Nombre'];
			$celular = $data['celular'];
			$correo = $data['correo'];
			$tipo = $data['tipo'];
			$donacion  = $data['donacion'];
			$estado  = $data['estado'];
			$donacionOtro  = $data['donacionOtro'];
			$openyoureyes  = $data['openyoureyes'];	
			$dato = $donacionOtro * 35;
			if($openyoureyes == 1){
				if($tipo == "tooglein"){
					$ins = $this->db->query("UPDATE `contacto` SET `empresa` = '$Individual', `nombre` = '$Nombre', `celular` = '$celular', `correo` = '$correo', `tipo` = 'Bingo', `cantidad` = '$dato', `state` = '$estado' WHERE `contacto`.`id` = '$id'");
					if ($ins) {
						return true;
					}else{
						return false;
					}
				}else if($tipo == "destroyy"){
					$ins = $this->db->query("UPDATE `contacto` SET `empresa` = '$Individual', `nombre` = '$Nombre', `celular` = '$celular', `correo` = '$correo', `tipo` = 'Ayuda Recurrente', `cantidad` = '$dato', `state` = '$estado' WHERE `contacto`.`id` = '$id'");
					if ($ins) {
						return true;
					}else{
						return false;
					}  
				}else if($tipo == "destroy"){
					$ins = $this->db->query("UPDATE `contacto` SET `empresa` = '$Individual', `nombre` = '$Nombre', `celular` = '$celular', `correo` = '$correo', `tipo` = 'Donacion Unica', `cantidad` = '$dato', `state` = '$estado' WHERE `contacto`.`id` = '$id'");
					if ($ins) {
						return true;
					}else{
						return false;
					}
				}
			}
		}else{
			$id = $data['id'];
			$Individual = $data['Individual'];
			$Nombre = $data['Nombre'];
			$celular = $data['celular'];
			$correo = $data['correo'];
			$tipo = $data['tipo'];
			$donacion  = $data['donacion'];
			$estado  = $data['estado'];
						if($tipo == "tooglein"){
							$ins = $this->db->query("UPDATE `contacto` SET `empresa` = '$Individual', `nombre` = '$Nombre', `celular` = '$celular', `correo` = '$correo', `tipo` = 'Bingo', `cantidad` = '$donacion', `state` = '$estado' WHERE `contacto`.`id` = '$id'");
							if ($ins) {
								return true;
							}else{
								return false;
							}   
						}else if($tipo == "destroyy"){
							$ins = $this->db->query("UPDATE `contacto` SET `empresa` = '$Individual', `nombre` = '$Nombre', `celular` = '$celular', `correo` = '$correo', `tipo` = 'Ayuda Recurrente', `cantidad` = '$donacion', `state` = '$estado' WHERE `contacto`.`id` = '$id'");
							if ($ins) {
								return true;
							}else{
								return false;
							}  
						}else if($tipo == "destroy"){
							$ins = $this->db->query("UPDATE `contacto` SET `empresa` = '$Individual', `nombre` = '$Nombre', `celular` = '$celular', `correo` = '$correo', `tipo` = 'Donacion Unica', `cantidad` = '$donacion', `state` = '$estado' WHERE `contacto`.`id` = '$id'");
							if ($ins) {
								return true;
							}else{
								return false;
							}
						}
					}
	}

	public function delcon($data){
		$id = $data;

		$ins = $this->db->query("DELETE FROM `contacto` WHERE `contacto`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}


	}

	/*contacto*/



	/*SEO*/

	public function updatemess($data){
		$id = $data['idfb'];
		$mensajein = $data['mensajelog'];
		$mensajeout = $data['mensajeout'];
		$color = $data['color'];

		$ins = $this->db->query("UPDATE `messenger` SET `page` = '$id', `messageL` = '$mensajein', `messageO` = '$mensajeout', `color` = '$color' WHERE `messenger`.`id` = 1");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function updateAna($data){
		$id = $data['uacode'];

		$ins = $this->db->query("UPDATE `analytics` SET `uaCode` = '$id' WHERE `analytics`.`id` = 1");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function updatetagconacto($data){
		$keywords = $data['tagsdecontacto'];
		$desc = $data['descripcionContacto'];

		$ins = $this->db->query("UPDATE `seo` SET `keywords` = '$keywords', `descripcion` = '$desc' WHERE `seo`.`id` = 1");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function updatetagFAQS($data){
		$keywords = $data['tagsdefaq'];
		$desc = $data['descripcionfaq'];

		$ins = $this->db->query("UPDATE `seo` SET `keywords` = '$keywords', `descripcion` = '$desc' WHERE `seo`.`id` = 2");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function updatetagind($data){
		$keywords = $data['tagsdeindex'];
		$desc = $data['descripcionindex'];

		$ins = $this->db->query("UPDATE `seo` SET `keywords` = '$keywords', `descripcion` = '$desc' WHERE `seo`.`id` = 3");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function updatetagvid($data){
		$keywords = $data['tagsdevideos'];
		$desc = $data['descripcionvideos'];

		$ins = $this->db->query("UPDATE `seo` SET `keywords` = '$keywords', `descripcion` = '$desc' WHERE `seo`.`id` = 4");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}
	/*SEO*/

    /*Links*/
	public function insertlink($data){
		$nombre = $data['nombre'];
		$url = $data['url'];
		$icono = $data['icono'];

		$ins = $this->db->query("INSERT INTO `ulinks` (`id`, `nombre`, `icono`, `url`) VALUES (NULL, '$nombre', '$icono', '$url')");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function updatelink($data){
		$id = $data['id'];
		$nombre = $data['nombre'];
		$url = $data['url'];
		$icono = $data['icono'];

		$ins = $this->db->query("UPDATE `ulinks` SET `nombre` = '$nombre', `icono` = '$icono', `url` = '$url' WHERE `ulinks`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function dellink($data){
		$id = $data;

		$ins = $this->db->query("DELETE FROM `ulinks` WHERE `ulinks`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}


	}

	/*links*/

	/*FAQ*/

	public function insertpre($data){
		$pregunta = $data['pregunta'];
		$respuesta = $data['respuesta'];

		$ins = $this->db->query("INSERT INTO `preguntas` (`id`, `Pregunta`, `Respuesta`) VALUES (NULL, '$pregunta', '$respuesta')");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}


	public function updatepre($data){
		$id = $data['id'];
		$pregunta = $data['pregunta'];
		$respuesta = $data['respuesta'];


		$ins = $this->db->query("UPDATE `preguntas` SET `Pregunta` = '$pregunta', `Respuesta` = '$respuesta' WHERE `preguntas`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function delpre($data){
		$id = $data;

		$ins = $this->db->query("DELETE FROM `preguntas` WHERE `preguntas`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}


	}

	/*FAQ*/

	/*usuarios*/

	public function insertuser($data){
		$nick = $data['nick'];
		$nombre = $data['nombre'];
		$apellidos = $data['apellidos'];
		$correo = $data['correo'];
		$pass = $data['pass'];
		$imagen = $data['imagen'];

		$ins = $this->db->query("INSERT INTO `usuarios` (`id`, `NombreUsuario`, `Nombre`, `Apellido`, `Correo`, `pass`, `img`) VALUES (NULL, '$nick', '$nombre', '$apellidos', '$correo', '$pass', '$imagen')");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}


	public function updateuser($data){
		$id = $data['id'];
		$nick = $data['nick'];
		$nombre = $data['nombre'];
		$apellidos = $data['apellidos'];
		$correo = $data['correo'];
		$pass = $data['pass'];
		$imagen = $data['imagen'];


		$ins = $this->db->query("UPDATE `usuarios` SET `NombreUsuario` = '$nick', `Nombre` = '$nombre', `Apellido` = '$apellidos', `Correo` = '$correo', `pass` = '$pass', `img` = '$imagen' WHERE `usuarios`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}

	}

	public function deluser($data){
		$id = $data;

		$ins = $this->db->query("DELETE FROM `usuarios` WHERE `usuarios`.`id` = '$id'");

		if ($ins) {
			return true;
		}else{
			return false;
		}


	}

	/*usuarios*/

	public function get_imgs(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from image");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}
	}

	public function get_seo(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from seo where id='1'");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}
	}

	public function get_seo2(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from seo where id='2'");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}
	}

	public function get_seo3(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from seo where id = '3'");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}
	}

	public function get_seo4(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from seo where id='4'");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}
	}

	
	public function get_con(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from contacto order by id desc");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}

	}

	public function get_contactos(){
		$images = array();
		$ins = $this->db->query("select * from contacto order by id desc");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
		}else{
			return false;
		}

	}

	public function get_todo(){
		$images = array();
		$id = $_SESSION['id_usuario'][1];
		$ins = $this->db->query("SELECT * FROM todo WHERE usuario = '$id'");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
		}else{
			return false;
		}

	}

	public function get_imgsSOS(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from embajadoressos order by created_at desc");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}

	}

	public function get_imgsAcor(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from acord order by created_at desc");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}

	}

	public function get_ufooter(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from ulinks order by id desc");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}

	}

	public function get_messenger(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from messenger");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}

	}

	public function get_gAnalyticsId(){
		$images = array();
		$ins = $this->db->query("select * from analytics");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
		}else{
			return false;
		}

	}


	public function get_user(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from usuarios");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}

	}

	public function get_video(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from video where id=1");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}

	}

	public function get_videos(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from video");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}

	}

	public function get_preguntas(){
		$images = array();
		$filas = 0;
		$ins = $this->db->query("select * from preguntas");
		while($r=$ins->fetch_object()){
			$images[] = $r;
			$filas = mysqli_num_rows ($ins);
		}
		if ($ins) {
			if (is_null($filas)){
				return array($images,0);
			}
			return array($images,$filas);
		}else{
			return false;
		}

	}

	



}
?>