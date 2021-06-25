<?php 

class modeloSOS{

	private $db;

	public function __construct(){
		$this->db = new Conexion();
	}

	

	public function login($correo,$pass){
		$query = $this->db->query("SELECT * FROM usuarios WHERE correo = '$correo' ");
		$resultado = $query->fetch_object();

		if(is_null($resultado)){
			return false;
		}
		$hashed_pass = $resultado->pass;
		
		if (password_verify($pass, $hashed_pass)) {
			return $resultado;		
		}else{
			return false;
		}
	}

	public function get_imgs(){
		$images = array();
		$ins = $this->db->query("select * from image order by created_at desc");
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
		$ins = $this->db->query("select * from embajadoressos");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
		}else{
			return false;
		}

	}

	public function get_imgsAcor(){
		$images = array();
		$ins = $this->db->query("select * from acord order by created_at desc");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
		}else{
			return false;
		}

	}

	public function get_ufooter(){
		$images = array();
		$ins = $this->db->query("select * from ulinks order by id desc");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
		}else{
			return false;
		}

	}

	public function get_messenger(){
		$images = array();
		$ins = $this->db->query("select * from messenger");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
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

	public function get_video(){
		$images = array();
		$ins = $this->db->query("select * from video where id=1");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
		}else{
			return false;
		}

	}
	
	public function get_videos(){
		$images = array();
		$ins = $this->db->query("select * from video");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
		}else{
			return false;
		}

	}

	public function get_preguntas(){
		$images = array();
		$ins = $this->db->query("select * from preguntas");
		while($r=$ins->fetch_object()){
			$images[] = $r;
		}
		if ($ins) {
			return $images;
		}else{
			return false;
		}

	}

	public function contacto_upload($data){
	
		if(isset($data['donacionOtro'])){
			$Individual = $data['Individual'];
			$Nombre = $data['Nombre'];
			$celular = $data['celular'];
			$correo = $data['correo'];
			$tipo = $data['tipo'];
			$donacion  = $data['donacion'];
			$donacionOtro  = $data['donacionOtro'];
			$openyoureyes  = $data['openyoureyes'];	
			$dato = $donacionOtro * 35;
			
		
			if($openyoureyes == 1){
				if($tipo == "tooglein"){
				    $ins = $this->db->query("INSERT INTO `contacto` (`id`, `empresa`, `nombre`, `celular`, `correo`, `tipo`, `cantidad`, `state`, `created_at`, `updated_at`) VALUES (NULL, '$Individual', '$Nombre', '$celular', '$correo', 'Bingo', '$dato', 'Pendiente', NULL, NULL);");
					if ($ins) {
						return true;
					}else{
						return false;
					}
				}else if($tipo == "destroyy"){
				    $ins = $this->db->query("INSERT INTO `contacto` (`id`, `empresa`, `nombre`, `celular`, `correo`, `tipo`, `cantidad`, `state`, `created_at`, `updated_at`) VALUES (NULL, '$Individual', '$Nombre', '$celular', '$correo', 'Ayuda Recurrente', '$dato', 'Pendiente', NULL, NULL);");
					if ($ins) {
						return true;
					}else{
						return false;
					}  
				}else if($tipo == "destroy"){
				    $ins = $this->db->query("INSERT INTO `contacto` (`id`, `empresa`, `nombre`, `celular`, `correo`, `tipo`, `cantidad`, `state`, `created_at`, `updated_at`) VALUES (NULL, '$Individual', '$Nombre', '$celular', '$correo', 'Donacion Unica', '$dato', 'Pendiente', NULL, NULL);");
					if ($ins) {
						return true;
					}else{
						return false;
					}
				}
			}
		}else{
		    $Individual = $data['Individual'];
			$Nombre = $data['Nombre'];
			$celular = $data['celular'];
			$correo = $data['correo'];
			$tipo = $data['tipo'];
			$donacion  = $data['donacion'];
				echo $Individual, $Nombre,$celular, $correo, $tipo, $donacion;
						if($tipo == "tooglein"){
						    $ins = $this->db->query("INSERT INTO `contacto` (`id`, `empresa`, `nombre`, `celular`, `correo`, `tipo`, `cantidad`, `state`, `created_at`, `updated_at`) VALUES (NULL, '$Individual', '$Nombre', '$celular', '$correo', 'Bingo', '$donacion', 'Pendiente', NULL, NULL);");
							if ($ins) {
								return true;
							}else{
								return false;
							}   
						}else if($tipo == "destroyy"){
						    $ins = $this->db->query("INSERT INTO `contacto` (`id`, `empresa`, `nombre`, `celular`, `correo`, `tipo`, `cantidad`, `state`, `created_at`, `updated_at`) VALUES (NULL, '$Individual', '$Nombre', '$celular', '$correo', 'Ayuda Recurrente', '$donacion', 'Pendiente', NULL, NULL);");
							if ($ins) {
								return true;
							}else{
								return false;
							}  
						}else if($tipo == "destroy"){
						    $ins = $this->db->query("INSERT INTO `contacto` (`id`, `empresa`, `nombre`, `celular`, `correo`, `tipo`, `cantidad`, `state`, `created_at`, `updated_at`) VALUES (NULL, '$Individual', '$Nombre', '$celular', '$correo', 'Donacion Unica', '$donacion', 'Pendiente', NULL, NULL);");
							if ($ins) {
								return true;
							}else{
								return false;
							}
						}
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
}
?>