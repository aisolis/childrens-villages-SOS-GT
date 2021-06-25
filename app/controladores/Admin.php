<?php

class Admin extends Controlador {

	public function __construct(){
		if (!isset($_SESSION['id_usuario'])) {
			redirect('sos/index');
		}

		$this->modeloAdmin = $this->modelo('modeloAdmin');

	}

	public function index(){


		$posts = $this->modeloAdmin->get_imgs();
		list($embajadores, $data) = $posts;

		$postsSOS = $this->modeloAdmin->get_imgsSOS();
		list($embajadores, $SOS) = $postsSOS;

		$acordeon = $this->modeloAdmin->get_imgsAcor();
		list($nothing, $Acord) = $acordeon;

		$footer = $this->modeloAdmin->get_ufooter();
		list($nada, $foot) = $footer;

		$messenger = $this->modeloAdmin->get_con();
		list($awa, $mess) = $messenger;

		$contacto = $this->modeloAdmin->get_contactos();
		if (empty($contacto)){
			$Analy = 0;			
		}
		else{
			$Analy = [
				'post' => $contacto
			];
		}

		$todolist = $this->modeloAdmin->get_todo();
		if (empty($todolist)){
			$todo = 0;			
		}
		else{
			$todo = [
				'post' => $todolist
			];
		}

		$videos = $this->modeloAdmin->get_video();
		list($video, $Vid) = $videos;

		$preguntas = $this->modeloAdmin->get_preguntas();
		list($pregunts, $pre) = $preguntas;

		$this->vistaAdmin('Admin/index', $data, $SOS, $Acord, $foot, $mess, $Analy, $Vid, $pre, $todo);
	}

	public function ajaxres(){

		$this->modelo('modeloAjax');	
	}


	/*SLIDER INDEX*/
	public function Slider(){
		$posts = $this->modeloAdmin->get_imgs();
		list($sliders, $data) = $posts;
		$data = [
			'post' => $sliders
		];

		$postsSOS = $this->modeloAdmin->get_imgsSOS();
		$SOS = [
			'post' => $postsSOS
		];

		$acordeon = $this->modeloAdmin->get_imgsAcor();
		$Acord = [
			'post' => $acordeon
		];

		$footer = $this->modeloAdmin->get_ufooter();
		$foot = [
			'post' => $footer
		];

		$messenger = $this->modeloAdmin->get_messenger();
		$mess = [
			'post' => $messenger
		];

		$Analytics = $this->modeloAdmin->get_gAnalyticsId();
		$Analy = [
			'post' => $Analytics
		];

		$videos = $this->modeloAdmin->get_video();
		$Vid = [
			'post' => $videos
		];

		$preguntas = $this->modeloAdmin->get_preguntas();
		$pre = [
			'post' => $preguntas
		];
		$this->vistaAdmin('Admin/slider/index', $data, $SOS, $Acord, $foot, $mess, $Analy, $Vid, $pre, '');
	}


	public function newimg(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$archivo = $_FILES['imagen']['tmp_name'];
		$nombrearchivo = $_FILES['imagen']['name'];
		$info = pathinfo($nombrearchivo);
		$extension = $info['extension'];
		$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
		move_uploaded_file($archivo, RUTAIMG . '/public/imagenes/'.$nombre_imagen.'.'.$extension);
		$ruta = $nombre_imagen.'.'.$extension;


		$data = [
			'folder' => 'imagenes/',
			'imagen' => trim($ruta),
		];	

        //var_dump($data);
        
		if ($this->modeloAdmin->insertimg($data)) {
			redirect('Admin/Slider');
		}else{
			die('No guardo la publicacion');
			redirect('Admin/Slider');
		}

	}

	public function updateimg(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		$archivo = $_FILES['imagen']['tmp_name'];
		if ($archivo == '') {
			$ruta = $_POST['rutapasada'];
		}else{
			$imagen_eliminar = $_POST['rutapasada'];
			$borrar_img = RUTAIMG . '/public/imagenes/'. $imagen_eliminar;
			unlink($borrar_img);
			$nombrearchivo=$_FILES['imagen']['name'];
			$info = pathinfo($nombrearchivo);
			$extension = $info['extension'];
			$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
			move_uploaded_file($archivo, RUTAIMG.'/public/imagenes/'.$nombre_imagen.'.'.$extension);
			$ruta = $nombre_imagen.'.'.$extension;
		}
		
		$data = [
			'id' => trim($_POST['id']),
			'img' => trim($ruta)
		];

		if ($this->modeloAdmin->updateimg($data)) {
			redirect('Admin/Slider');
		}else{
			die('No se puedo registrar');
			redirect('Admin/Slider');
		}

	}

	public function delimg(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$id = $_POST['id'];
		$imagen = $_POST['rutapasada'];
		if ($this->modeloAdmin->delimg($id)) {
			$borrar_img = RUTAIMG . '/public/imagenes/'. $imagen;
			unlink($borrar_img);
			redirect('Admin/Slider');
		}else{
			die('No sé pudo eliminar la publicacion');
			redirect('Admin/Slider');
		}
	}

	/*INDEX*/


	/*videos*/
	public function videos(){
		$videos = $this->modeloAdmin->get_videos();
		list($getvideos, $rows) = $videos;
		$Vid = [
			'post' => $getvideos
		];
		$this->vistaAdmin('Admin/videos/index', '', '', '', '', '', '', $Vid, '', '');
	}


	public function newvid(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$archivo = $_FILES['imagen']['tmp_name'];
		$nombrearchivo = $_FILES['imagen']['name'];
		$info = pathinfo($nombrearchivo);
		$extension = $info['extension'];
		$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
		move_uploaded_file($archivo, RUTAIMG . '/public/Videos/'.$nombre_imagen.'.'.$extension);
		$ruta = $nombre_imagen.'.'.$extension;


		$data = [
			'folder' => 'Videos/',
			'url' => trim($_POST['url']),
			'imagen' => trim($ruta)
		];	

		if ($this->modeloAdmin->insertvid($data)) {
			redirect('Admin/videos');
		}else{
			die('No guardo la publicacion');
			redirect('Admin/videos');
		}

	}

	public function updatevid(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		$archivo = $_FILES['imagen']['tmp_name'];
		if ($archivo == '') {
			$ruta = $_POST['rutapasada'];
		}else{
			$imagen_eliminar = $_POST['rutapasada'];
			$borrar_img = RUTAIMG . '/public/Videos/'. $imagen_eliminar;
			unlink($borrar_img);
			$nombrearchivo=$_FILES['imagen']['name'];
			$info = pathinfo($nombrearchivo);
			$extension = $info['extension'];
			$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
			move_uploaded_file($archivo, RUTAIMG.'/public/Videos/'.$nombre_imagen.'.'.$extension);
			$ruta = $nombre_imagen.'.'.$extension;
		}
		
		$data = [
			'id' => trim($_POST['id']),
			'img' => trim($ruta),
			'url' => trim($_POST['url'])
		];
		
		if ($this->modeloAdmin->updatevid($data)) {
			redirect('Admin/videos');
		}else{
			die('No se puedo registrar');
			redirect('Admin/videos');
		}

	}

	public function delvid(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$id = $_POST['id'];
		$imagen = $_POST['rutapasada'];
		if ($this->modeloAdmin->delvid($id)) {
			$borrar_img = RUTAIMG . '/public/Videos/'. $imagen;
			unlink($borrar_img);
			redirect('Admin/videos');
		}else{
			die('No sé pudo eliminar la publicacion');
			redirect('Admin/videos');
		}
	}

	/*video*/

	/*Embajadores SOS*/
	public function sos(){
		$postsSOS = $this->modeloAdmin->get_imgsSOS();
		list($getsos, $rowsos) = $postsSOS;
		$SOS = [
			'post' => $getsos
		];

		$this->vistaAdmin('Admin/embajadores/index', '', $SOS, '', '', '', '', '', '', '');
	}


	public function newsos(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		$archivo = $_FILES['imagen']['tmp_name'];
		$nombrearchivo = $_FILES['imagen']['name'];
		$info = pathinfo($nombrearchivo);
		$extension = $info['extension'];
		$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
		move_uploaded_file($archivo, RUTAIMG . '/public/EmbajadoresSOS/'.$nombre_imagen.'.'.$extension);
		$ruta = $nombre_imagen.'.'.$extension;


		$data = [
			'folder' => 'EmbajadoresSOS/',
			'nombre' => trim($_POST['nombre']),
			'cargo' => trim($_POST['cargo']),
			'imagen' => trim($ruta)
		];	

		if ($this->modeloAdmin->insertsos($data)) {
			redirect('Admin/sos');
		}else{
			die('No guardo la publicacion');
			redirect('Admin/sos');
		}

	}

	public function updatesos(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		$archivo = $_FILES['imagen']['tmp_name'];
		if ($archivo == '') {
			$ruta = $_POST['rutapasada'];
		}else{
			$imagen_eliminar = $_POST['rutapasada'];
			$borrar_img = RUTAIMG . '/public/EmbajadoresSOS/'. $imagen_eliminar;
			unlink($borrar_img);
			$nombrearchivo=$_FILES['imagen']['name'];
			$info = pathinfo($nombrearchivo);
			$extension = $info['extension'];
			$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
			move_uploaded_file($archivo, RUTAIMG.'/public/EmbajadoresSOS/'.$nombre_imagen.'.'.$extension);
			$ruta = $nombre_imagen.'.'.$extension;
		}
		
		$data = [
			'id' => trim($_POST['id']),
			'folder' => 'EmbajadoresSOS/',
			'nombre' => trim($_POST['nombre']),
			'cargo' => trim($_POST['cargo']),
			'imagen' => trim($ruta)
		];
		
		if ($this->modeloAdmin->updatesos($data)) {
			redirect('Admin/sos');
		}else{
			die('No se puedo registrar');
			redirect('Admin/sos');
		}

	}

	public function delsos(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$id = $_POST['id'];
		$imagen = $_POST['rutapasada'];
		if ($this->modeloAdmin->delsos($id)) {
			$borrar_img = RUTAIMG . '/public/EmbajadoresSOS/'. $imagen;
			unlink($borrar_img);
			redirect('Admin/sos');
		}else{
			die('No sé pudo eliminar la publicacion');
			redirect('Admin/sos');
		}
	}

	/* Embajadores SOS*/

	/*acordeon*/
	public function acordeon(){
		$acordeon = $this->modeloAdmin->get_imgsAcor();
		list($gacor, $rowsos) = $acordeon;
		$Acord = [
			'post' => $gacor
		];

		$this->vistaAdmin('Admin/acordeon/index', '', '', $Acord, '', '', '', '', '', '');
	}


	public function newacord(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$archivo = $_FILES['imagen']['tmp_name'];
		$nombrearchivo = $_FILES['imagen']['name'];
		$info = pathinfo($nombrearchivo);
		$extension = $info['extension'];
		$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
		move_uploaded_file($archivo, RUTAIMG . '/public/Acordeon/'.$nombre_imagen.'.'.$extension);
		$ruta = $nombre_imagen.'.'.$extension;


		$data = [
			'folder' => 'Acordeon/',
			'titulo' => trim($_POST['titulo']),
			'contenido' => trim($_POST['contenido']),
			'imagen' => trim($ruta)
		];	

		if ($this->modeloAdmin->insertacord($data)) {
			redirect('Admin/acordeon');
		}else{
			die('No guardo la publicacion');
			redirect('Admin/acordeon');
		}

	}

	public function updateacord(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		$archivo = $_FILES['imagen']['tmp_name'];
		if ($archivo == '') {
			$ruta = $_POST['rutapasada'];
			$imagen_eliminar = $_POST['unlink'];
			$borrar_img = RUTAIMG . '/public/Acordeon/'. $imagen_eliminar;
			if($archivo <> 0){
			 unlink($borrar_img);   
			}
		}else{
			$imagen_eliminar = $_POST['unlink'];
			$borrar_img = RUTAIMG . '/public/Acordeon/'. $imagen_eliminar;
			if($archivo <> 0){
			 unlink($borrar_img);   
			}
			$nombrearchivo=$_FILES['imagen']['name'];
			$info = pathinfo($nombrearchivo);
			$extension = $info['extension'];
			$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
			move_uploaded_file($archivo, RUTAIMG.'/public/Acordeon/'.$nombre_imagen.'.'.$extension);
			$ruta = $nombre_imagen.'.'.$extension;
		}
		
		
		$data = [
			'id' => trim($_POST['id']),
			'folder' => 'Acordeon/',
			'titulo' => trim($_POST['titulo']),
			'contenido' => trim($_POST['contenido']),
			'imagen' => trim($ruta)
		];
		
		if ($this->modeloAdmin->updateacord($data)) {
			redirect('Admin/acordeon');
		}else{
			die('No se puedo registrar');
			redirect('Admin/acordeon');
		}

	}

	public function delacord(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$id = $_POST['id'];
		$imagen = $_POST['rutapasada'];
		if ($this->modeloAdmin->delacord($id)) {
			$borrar_img = RUTAIMG . '/public/Acordeon/'. $imagen;
			if($imagen <> 0){
		    	unlink($borrar_img);
			}
			redirect('Admin/acordeon');
		}else{
			die('No sé pudo eliminar la publicacion');
			redirect('Admin/acordeon');
		}
	}

	/*acordeon*/

	/*contacto*/
	public function contacto(){
		$con = $this->modeloAdmin->get_con();
		list($gcon, $rowcon) = $con;
		$contacto = [
			'post' => $gcon
		];

		$this->vistaAdmin('Admin/contacto/index', $contacto, '', '', '', '', '', '', '', '');
	}

	public function send(){
		$con = $this->modeloAdmin->get_con();
		list($gcon, $rowcon) = $con;
		$contacto = [
			'post' => $gcon
		];

		$this->vistaAdmin('Admin/contacto/mailer', $contacto, '', '', '', '', '', '', '', '');
	}


	public function updatecon(){
		ob_start();
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		if(!isset($_POST['donacionOtro'],$_POST['openyoureyes'])){
			$data = [
				'id' => trim($_POST['id']),
				'donacion' => trim($_POST['donacion']),
				'Individual' => trim($_POST['Individual']),
				'Nombre' => trim($_POST['Nombre']),
				'celular' => trim($_POST['celular']),
				'correo' => trim($_POST['correo']),
				'tipo' => trim($_POST['tipo']),
				'estado' => trim($_POST['state'])
				
			];
		}
		else{
			$data = [
				'id' => trim($_POST['id']),
				'donacion' => trim($_POST['donacion']),
				'Individual' => trim($_POST['Individual']),
				'Nombre' => trim($_POST['Nombre']),
				'celular' => trim($_POST['celular']),
				'correo' => trim($_POST['correo']),
				'tipo' => trim($_POST['tipo']),
				'donacionOtro' => trim($_POST['donacionOtro']),
				'openyoureyes' => trim($_POST['openyoureyes']),
				'estado' => trim($_POST['state'])
			];
		}

		if ($this->modeloAdmin->updatecon($data)) {
			redirect('Admin/contacto');
		}else{
			die('No se puedo registrar');
			redirect('Admin/contacto');
		}
		ob_end_flush();
	}

	public function delcon(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		$id = $_POST['id'];
		if ($this->modeloAdmin->delcon($id)) {
			redirect('Admin/contacto');
		}else{
			die('No sé pudo eliminar la publicacion');
			redirect('Admin/contacto');
		}
	}

	

	/*contacto*/


	/*Links*/
	public function links(){
		$linksuc = $this->modeloAdmin->get_ufooter();
		list($getlink, $rowsos) = $linksuc;
		$foot = [
			'post' => $getlink
		];

		
		$this->vistaAdmin('Admin/links/index', '', '', '', $foot, '', '', '', '', '');
	}


	public function newlink(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);


		$data = [
			'id' => trim($_POST['id']),
			'nombre' => trim($_POST['nombre']),
			'url' => trim($_POST['url']),
			'icono' => trim($_POST['icon'])
		];

		if ($this->modeloAdmin->insertlink($data)) {
			redirect('Admin/links');
		}else{
			die('No guardo la publicacion');
			redirect('Admin/links');
		}

	}

	public function updatelink(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		
		$data = [
			'id' => trim($_POST['id']),
			'nombre' => trim($_POST['nombre']),
			'url' => trim($_POST['url']),
			'icono' => trim($_POST['icon'])
		];
		
		if ($this->modeloAdmin->updatelink($data)) {
			redirect('Admin/links');
		}else{
			die('No se puedo registrar');
			redirect('Admin/links');
		}

	}

	public function dellink(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$id = $_POST['id'];
		if ($this->modeloAdmin->dellink($id)) {
			redirect('Admin/links');
		}else{
			die('No sé pudo eliminar la publicacion');
			redirect('Admin/links');
		}
	}

	/*links*/

	/*Links*/
	public function SEO(){
		$seosettings = $this->modeloAdmin->get_seo();
		list($seo, $rowceo) = $seosettings;
		$data = [
			'post' => $seo
		];

		$seosettings2 = $this->modeloAdmin->get_seo2();
		list($seo2, $rowceo2) = $seosettings2;
		$SOS = [
			'post' => $seo2
		];

		$seosettings3 = $this->modeloAdmin->get_seo3();
		list($seo3, $rowceo3) = $seosettings3;
		$Acord = [
			'post' => $seo3
		];

		$seosettings4 = $this->modeloAdmin->get_seo4();
		list($seo4, $rowceo4) = $seosettings4;
		$mess = [
			'post' => $seo4
		];

		$Get_messenger = $this->modeloAdmin->get_messenger();
		list($messenger, $rowmess) = $Get_messenger;
		$foot = [
			'post' => $messenger
		];

		$analythics = $this->modeloAdmin->get_gAnalyticsId(1);
		$Analy = [
			'post' => $analythics
		];

		
		$this->vistaAdmin('Admin/seo/index', $data, $SOS,$Acord , $foot, $mess, $Analy, '', '', '');
	}



	public function updatemess(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		
		$data = [
			'idfb' => trim($_POST['idfb']),
			'mensajelog' => trim($_POST['mensajelog']),
			'mensajeout' => trim($_POST['mensajeout']),
			'color' => trim($_POST['color'])
		];
		
		if ($this->modeloAdmin->updatemess($data)) {
			redirect('Admin/seo');
		}else{
			die('No se puedo registrar');
			redirect('Admin/seo');
		}

	}

	public function updateuacode(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		
		$data = [
			'uacode' => trim($_POST['uacode'])
		];
		
		if ($this->modeloAdmin->updateAna($data)) {
			redirect('Admin/seo');
		}else{
			die('No se puedo registrar');
			redirect('Admin/seo');
		}

	}

	public function updatetagcon(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		
		$data = [
			'tagsdecontacto' => trim($_POST['tagsdecontacto']),
			'descripcionContacto' => trim($_POST['descripcionContacto'])
		];
		
		if ($this->modeloAdmin->updatetagconacto($data)) {
			redirect('Admin/seo');
		}else{
			die('No se puedo registrar');
			redirect('Admin/seo');
		}

	}

	public function updatetagFAQ(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		
		$data = [
			'tagsdefaq' => trim($_POST['tagsdefaq']),
			'descripcionfaq' => trim($_POST['descripcionfaq'])
		];
		
		if ($this->modeloAdmin->updatetagFAQS($data)) {
			redirect('Admin/seo');
		}else{
			die('No se puedo registrar');
			redirect('Admin/seo');
		}

	}

	public function updatetagindex(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		
		$data = [
			'tagsdeindex' => trim($_POST['tagsdeindex']),
			'descripcionindex' => trim($_POST['descripcionindex'])
		];
		
		if ($this->modeloAdmin->updatetagind($data)) {
			redirect('Admin/seo');
		}else{
			die('No se puedo registrar');
			redirect('Admin/seo');
		}

	}

	public function updatetagvideo(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		
		$data = [
			'tagsdevideos' => trim($_POST['tagsdevideos']),
			'descripcionvideos' => trim($_POST['descripcionvideos'])
		];
		
		if ($this->modeloAdmin->updatetagvid($data)) {
			redirect('Admin/seo');
		}else{
			die('No se puedo registrar');
			redirect('Admin/seo');
		}

	}

	/*seo*/

	/*FAQ*/
	public function FAQ(){
		$preguntas = $this->modeloAdmin->get_preguntas();
		list($gpre, $rowpre) = $preguntas;
		$pre = [
			'post' => $gpre
		];

		$this->vistaAdmin('Admin/FAQ/index', '', '', '', '', '', '', '', $pre, '');
	}


	public function newpre(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$data = [
			'pregunta' => trim($_POST['pregunta']),
			'respuesta' => trim($_POST['respuesta'])
		];	

		if ($this->modeloAdmin->insertpre($data)) {
			redirect('Admin/FAQ');
		}else{
			die('No guardo la publicacion');
			redirect('Admin/FAQ');
		}

	}

	public function updatepre(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$data = [
			'id' => trim($_POST['id']),
			'pregunta' => trim($_POST['pregunta']),
			'respuesta' => trim($_POST['respuesta'])
		];

		if ($this->modeloAdmin->updatepre($data)) {
			redirect('Admin/FAQ');
		}else{
			die('No se puedo registrar');
			redirect('Admin/FAQ');
		}

	}

	public function delpre(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		$id = $_POST['id'];
		if ($this->modeloAdmin->delpre($id)) {
			redirect('Admin/FAQ');
		}else{
			die('No sé pudo eliminar la publicacion');
			redirect('Admin/FAQ');
		}
	}

	/*FAQ*/


	/*usuarios*/
	public function usuarios(){
		$user = $this->modeloAdmin->get_user();
		list($guser, $rowuser) = $user;
		$pre = [
			'post' => $guser
		];

		$this->vistaAdmin('Admin/usuarios/index', '', '', '', '', '', '', '', $pre, '');
	}


	public function newuser(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$archivo = $_FILES['imagen']['tmp_name'];
		$nombrearchivo = $_FILES['imagen']['name'];
		$info = pathinfo($nombrearchivo);
		$extension = $info['extension'];
		$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
		move_uploaded_file($archivo, RUTAIMG . '/public/admin/Profile/'.$nombre_imagen.'.'.$extension);
		$ruta = $nombre_imagen.'.'.$extension;


		$data = [
			'nick' => trim($_POST['nick']),
			'nombre' => trim($_POST['nombre']),
			'apellidos' => trim($_POST['apellidos']),
			'correo' => trim($_POST['correo']),
			'pass' => trim($_POST['pass']),
			'imagen' => trim($ruta)
		];
		$data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);

		if ($this->modeloAdmin->insertuser($data)) {
			redirect('Admin/usuarios');
		}else{
			die('No guardo el usuario');
			redirect('Admin/usuarios');
		}
	}

	public function updateuser(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		$archivo = $_FILES['imagen']['tmp_name'];
		if ($archivo == '') {
			$ruta = $_POST['rutapasada'];
		}else{
			$imagen_eliminar = $_POST['rutapasada'];
			$borrar_img = RUTAIMG . '/public/admin/Profile/'. $imagen_eliminar;
			if($archivo <>""){
			    unlink($borrar_img);
			}
			$nombrearchivo=$_FILES['imagen']['name'];
			$info = pathinfo($nombrearchivo);
			$extension = $info['extension'];
			$nombre_imagen = $_SESSION['Nombre'][2].'-'.rand(00000,99999);
			move_uploaded_file($archivo, RUTAIMG.'/public/admin/Profile/'.$nombre_imagen.'.'.$extension);
			$ruta = $nombre_imagen.'.'.$extension;
		}
		
		
		$data = [
			'id' => trim($_POST['id']),
			'nick' => trim($_POST['nick']),
			'nombre' => trim($_POST['nombre']),
			'apellidos' => trim($_POST['apellidos']),
			'correo' => trim($_POST['correo']),
			'pass' => trim($_POST['pass']),
			'imagen' => trim($ruta)
		];
		
		$data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);
		if ($this->modeloAdmin->updateuser($data)) {
			redirect('Admin/usuarios');
		}else{
			die('No se puedo registrar');
			redirect('Admin/usuarios');
		}

	}

	public function deluser(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
		$id = $_POST['id'];
		$imagen = $_POST['rutapasada'];	
		if ($this->modeloAdmin->deluser($id)) {
		    if($imagen <> ""){
			    $borrar_img = RUTAIMG .'/public/admin/Profile/'.$imagen;
			unlink($borrar_img);
			}
			
			redirect('Admin/usuarios');
		}else{
			die('No sé pudo eliminar la publicacion');
			redirect('Admin/usuarios');
		}
	}

	/*usuarios*/

	public function todo(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$data = [
			'usuario' => trim($_SESSION['id_usuario'][1]),
			'todoname' => trim($_POST['nombre']),
			'fecha' => trim($_POST['fecha']),
			'hora' => ($_POST['hora'])
		];


		if ($this->modeloAdmin->todolist($data)) {
			redirect('Admin/index');
		}else{
			die('No se puedo registrar');
			redirect('Admin/index');
		}

	}

	public function todoid($id){
		$idmodal = $id;

		$data = [
			'usuario' => trim($_SESSION['id_usuario'][1]),
			'todoname' => trim($_POST['nombre']),
			'fecha' => trim($_POST['fecha']),
			'hora' => ($_POST['hora'])
		];

		if ($this->modeloAdmin->todolist($data)) {
			redirect('Admin/index');
		}else{
			die('No se puedo registrar');
			redirect('Admin/index');
		}

	}

	public function updateTodo(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$data = [
			'id' => trim($_POST['id']),
			'usuario' => trim($_SESSION['id_usuario'][1]),
			'todoname' => trim($_POST['nombre']),
			'fecha' => trim($_POST['fecha']),
			'hora' => ($_POST['hora']),
			'estado' => ($_POST['estado'])
		];

		if ($this->modeloAdmin->updatetodolist($data)) {
			redirect('Admin/index');
		}else{
			die('No se puedo registrar');
			redirect('Admin/index');
		}

	}

	public function deletetodo(){
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

		$data = [
			'id' => trim($_POST['id']),
		];
		if ($this->modeloAdmin->deltodo($data)) {
			redirect('Admin/index');
		}else{
			die('No se puedo registrar');
			redirect('Admin/index');
		}

	}



}

 ?>