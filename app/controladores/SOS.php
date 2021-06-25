<?php 

class SOS extends Controlador {

	public function __construct(){
		$this->modeloSOS = $this->modelo('modeloSOS');
	}

	public function index(){
		$posts = $this->modeloSOS->get_imgs();
		$data = [
			'post' => $posts
		];

		$postsSOS = $this->modeloSOS->get_imgsSOS();
		$SOS = [
			'post' => $postsSOS
		];

		$acordeon = $this->modeloSOS->get_imgsAcor();
		$Acord = [
			'post' => $acordeon
		];

		$footer = $this->modeloSOS->get_ufooter();
		$foot = [
			'post' => $footer
		];

		$messenger = $this->modeloSOS->get_messenger();
		$mess = [
			'post' => $messenger
		];

		$Analytics = $this->modeloSOS->get_gAnalyticsId();
		$Analy = [
			'post' => $Analytics
		];

		$videos = $this->modeloSOS->get_video();
		$Vid = [
			'post' => $videos
		];

		$seosettings = $this->modeloSOS->get_seo3();
		list($seo, $rowceo) = $seosettings;
		$pre = [
			'post' => $seo
		];

		$this->vista('sos/index', $data, $SOS, $Acord, $foot, $mess, $Analy, $Vid, $pre);
	}
	

	public function donar(){
		$posts = $this->modeloSOS->get_imgs();
		$data = [
			'post' => $posts
		];

		$postsSOS = $this->modeloSOS->get_imgsSOS();
		$SOS = [
			'post' => $postsSOS
		];

		$acordeon = $this->modeloSOS->get_imgsAcor();
		$Acord = [
			'post' => $acordeon
		];

		$footer = $this->modeloSOS->get_ufooter();
		$foot = [
			'post' => $footer
		];

		$messenger = $this->modeloSOS->get_messenger();
		$mess = [
			'post' => $messenger
		];

		$Analytics = $this->modeloSOS->get_gAnalyticsId();
		$Analy = [
			'post' => $Analytics
		];

		$videos = $this->modeloSOS->get_video();
		$Vid = [
			'post' => $videos
		];

		$seosettings = $this->modeloSOS->get_seo();
		list($seo, $rowceo) = $seosettings;
		$pre = [
			'post' => $seo
		];

		$this->vista('sos/contact', $data, $SOS, $Acord, $foot, $mess, $Analy, $Vid, $pre);
	}

	public function Videos(){
		$posts = $this->modeloSOS->get_imgs();
		$data = [
			'post' => $posts
		];

		$postsSOS = $this->modeloSOS->get_imgsSOS();
		$SOS = [
			'post' => $postsSOS
		];

		$acordeon = $this->modeloSOS->get_imgsAcor();
		$Acord = [
			'post' => $acordeon
		];

		$footer = $this->modeloSOS->get_ufooter();
		$foot = [
			'post' => $footer
		];

		$messenger = $this->modeloSOS->get_messenger();
		$mess = [
			'post' => $messenger
		];

		$Analytics = $this->modeloSOS->get_gAnalyticsId();
		$Analy = [
			'post' => $Analytics
		];

		$videos = $this->modeloSOS->get_videos();
		$Vid = [
			'post' => $videos
		];

		$seosettings = $this->modeloSOS->get_seo4();
		list($seo, $rowceo) = $seosettings;
		$pre = [
			'post' => $seo
		];
		$this->vista('sos/ourvideos', $data, $SOS, $Acord, $foot, $mess, $Analy, $Vid, $pre);
	}

	public function FAQ(){
		$seosettings = $this->modeloSOS->get_seo2();
		list($seo, $rowceo) = $seosettings;
		$data = [
			'post' => $seo
		];

		$postsSOS = $this->modeloSOS->get_imgsSOS();
		$SOS = [
			'post' => $postsSOS
		];

		$acordeon = $this->modeloSOS->get_imgsAcor();
		$Acord = [
			'post' => $acordeon
		];

		$footer = $this->modeloSOS->get_ufooter();
		$foot = [
			'post' => $footer
		];

		$messenger = $this->modeloSOS->get_messenger();
		$mess = [
			'post' => $messenger
		];

		$Analytics = $this->modeloSOS->get_gAnalyticsId();
		$Analy = [
			'post' => $Analytics
		];

		$videos = $this->modeloSOS->get_video();
		$Vid = [
			'post' => $videos
		];

		$preguntas = $this->modeloSOS->get_preguntas();
		$pre = [
			'post' => $preguntas
		];
		$this->vista('sos/FAQ', $data, $SOS, $Acord, $foot, $mess, $Analy, $Vid, $pre);
	}

	public function UploadContacto(){
		ob_start();
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(!isset($_POST['donacionOtro'],$_POST['openyoureyes'])){
			$data = [
				'donacion' => trim($_POST['donacion']),
				'Individual' => trim($_POST['Individual']),
				'Nombre' => trim($_POST['Nombre']),
				'celular' => trim($_POST['celular']),
				'correo' => trim($_POST['correo']),
				'tipo' => trim($_POST['tipo'])
				
			];
		}
		else{
			$data = [
				'donacion' => trim($_POST['donacion']),
				'Individual' => trim($_POST['Individual']),
				'Nombre' => trim($_POST['Nombre']),
				'celular' => trim($_POST['celular']),
				'correo' => trim($_POST['correo']),
				'tipo' => trim($_POST['tipo']),
				'donacionOtro' => trim($_POST['donacionOtro']),
				'openyoureyes' => trim($_POST['openyoureyes'])
				
			];
		}
		if ($this->modeloSOS->contacto_upload($data)) {
			redirect('sos/donar');
		}else{
		die('No se puedo registrar');
		redirect('sos/donar');
			
		}
		ob_end_flush();
	}

	public function loginAdmin(){
		$this->vista('sos/login');
	}

	public function iniciarSesion(){
		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
		$data = [
			'correo' => trim($_POST['correo']),
			'pass' => trim($_POST['pass'])
		];
		$usuario_logeado = $this->modeloSOS->login($data['correo'],$data['pass']);

		if ($usuario_logeado) {
			$this->crearSesionDeUsuario($usuario_logeado);
		}else{
			redirect('sos/loginAdmin');
		}
	}

	public function crearSesionDeUsuario($user){
		$_SESSION['id_usuario'][1]= $user->id;
		$_SESSION['Nombre'][2]= $user->Nombre;
		$_SESSION['Correo'][3]= $user->Correo;
		$_SESSION['img'][4]= $user->img;
		$_SESSION['pass'][5]= $_POST['pass'];
		redirect('alertas/entro');
		
	}

	public function salir(){
		unset($_SESSION['id_usuario']);
		session_destroy();
		redirect('sos/loginAdmin');
	}

	public function checarLogeo(){
		if (isset($_SESSION['id_usuario'])) {
			return true;
		}else{
			return false;
		}
	}


	

}

 ?>