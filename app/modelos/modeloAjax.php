<?php 

class modeloAjax{

	public function __construct(){
		
	}   
}
        $db;
        $this->db = new Conexion();
        $id = $_POST['id'];
		if($_POST['action'] == "infoProducto"){
			if(!empty($_POST)){
                $id = $_POST['id'];
                    $ins = $this->db->query("SELECT * FROM `todo` WHERE id = '$id'");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "infoimg"){
            if(!empty($_POST)){
                $id = $_POST['id'];
                    $ins = $this->db->query("SELECT * FROM `image` WHERE id = '$id'");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "infovid"){
            if(!empty($_POST)){
                $id = $_POST['id'];
                    $ins = $this->db->query("SELECT * FROM `video` WHERE id = '$id'");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "infosos"){
            if(!empty($_POST)){
                $id = $_POST['id'];
                    $ins = $this->db->query("SELECT * FROM `embajadoressos` WHERE id = '$id'");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "infoacord"){
            if(!empty($_POST)){
                $id = $_POST['id'];
                    $ins = $this->db->query("SELECT * FROM `acord` WHERE id = '$id'");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "infosol"){
            if(!empty($_POST)){
                $id = $_POST['id'];
                    $ins = $this->db->query("SELECT * FROM `contacto` WHERE id = '$id'");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "infofoot"){
            if(!empty($_POST)){
                $id = $_POST['id'];
                    $ins = $this->db->query("SELECT * FROM `ulinks` WHERE id = '$id'");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "infofaq"){
            if(!empty($_POST)){
                $id = $_POST['id'];
                    $ins = $this->db->query("SELECT * FROM `preguntas` WHERE id = '$id'");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "informacionusuario"){
            if(!empty($_POST)){
                $id = $_POST['id'];
                $ins = $this->db->query("SELECT * FROM `usuarios` WHERE id = '$id'");
                $result = mysqli_num_rows($ins);
                if($result > 0){
                    $data = mysqli_fetch_assoc($ins);
                    echo json_encode($data,JSON_UNESCAPED_UNICODE);    
                    exit;
                }
                
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "infouserc"){
            if(!empty($_POST)){
                    $id = $_POST['id'];
                    $ins = $this->db->query("SELECT COUNT(id) AS idn FROM usuarios;");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
        else if($_POST['action'] == "user"){
            if(!empty($_POST)){
                    $id = $_POST['id'];
                    $ins = $this->db->query("SELECT * FROM `usuarios` WHERE id = '$id'");
                    $result = mysqli_num_rows($ins);
                    if($result > 0){
                        $data = mysqli_fetch_assoc($ins);
                        echo json_encode($data,JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                    echo "error";
                    exit;
            }
            else{
                exit;
            }
        }
?>