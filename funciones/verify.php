<?php
// Verifica que el Usuario y la Contrasena esten correctos
session_start();
include 'getConnection.php';
$connect = getDBConnection();

// Conexion con la base de datos
$sql = "SELECT * FROM `users` WHERE username = :username AND pass = :password";
$stmt = $connect->prepare($sql);
$data = array(":username" => $_POST['username'], ":password" => sha1($_POST['password']));
$stmt->execute($data);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$current_time = date('Y-m-d H:i:s');

// Funcion para agarrar el IP del usuario que usa la pagina
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

// Crea varaibale y session para guardar la IP del usuario
$_SESSION['ip'] = get_client_ip();
$ip = get_client_ip();

// Verifica el tipo de cuenta del usuario para ingresarlo a su respectivo Dashboard
if($user['id_profile'] == 1 && $user['username'] == $_POST['username']){
    // Crea session para guardar el nombre de usuario y el id del usuario
    $_SESSION['username'] = $user['username'];
    $_SESSION['userId'] = $user['id_user'];
    // Crea variable para guardar el nombre de usuario y el id del usuario
    $id = $user['user_id'];
    $nombre = $_POST['username'];
    // Code in SQL para actualizar el tiempo que el usuario hizo login y cabiar el estatus a activo
    $sql = "UPDATE `users` SET `updated_at`='$current_time', `active`='1' WHERE `users`.`username`='$nombre';";
    $statement = $connect->prepare($sql);
    $statement->execute(); 

    // Envia al usuario a la pagina del administrador
    header('Location: ../admin/dashboard.php');
} 

else if($user['id_profile'] == 2 && $user['username'] == $_POST['username']){
    // Crea session para guardar el nombre de usuario y el id del usuario
    $_SESSION['username'] = $user['username'];
    $_SESSION['userId'] = $user['id'];
    // Crea variable para guardar el nombre de usuario y el id del usuario
    $id = $user['id'];
    $nombre = $_POST['username'];
    // Code in SQL para actualizar el tiempo que el usuario hizo login y cabiar el estatus a activo
    $sql = "UPDATE `users` SET `updated_at`='$current_time', `active`='1' WHERE `users`.`username`='$nombre';";
    $statement = $connect->prepare($sql);
    $statement->execute(); 
    
    // Envia al usuario a la pagina de boss_department
    header('Location: ../admin/dashboard.php');
}

else if($user['id_profile'] == 3 && $user['username'] == $_POST['username']){
    // Crea session para guardar el nombre de usuario y el id del usuario
    $_SESSION['username'] = $user['username'];
    $_SESSION['userId'] = $user['id'];
    // Crea variable para guardar el nombre de usuario y el id del usuario
    $id = $user['id'];
    $nombre = $_POST['username'];
    // Code in SQL para actualizar el tiempo que el usuario hizo login y cabiar el estatus a activo
    $sql = "UPDATE `users` SET `updated_at`='$current_time', `active`='1' WHERE `users`.`username`='$nombre';";
    $statement = $connect->prepare($sql);
    $statement->execute(); 
    
    // Envia al usuario a la pagina de analista
    header('Location: ../admin/tables.php');
}

else if($user['id_profile'] == 4 && $user['username'] == $_POST['username']){
    // Crea session para guardar el nombre de usuario y el id del usuario
    $_SESSION['username'] = $user['username'];
    $_SESSION['userId'] = $user['id'];
    // Crea variable para guardar el nombre de usuario y el id del usuario
    $id = $user['id'];
    $nombre = $_POST['username'];
    // Code in SQL para actualizar el tiempo que el usuario hizo login y cabiar el estatus a activo
    $sql = "UPDATE `users` SET `updated_at`='$current_time', `active`='1' WHERE `users`.`username`='$nombre';";
    $statement = $connect->prepare($sql);
    $statement->execute(); 

    // Envia al usuario a la pagina de solicitante
    header('Location: ../admin/tables.php');
}

else if($user['id_profile'] == 5 && $user['username'] == $_POST['username']){
    // Crea session para guardar el nombre de usuario y el id del usuario
    $_SESSION['username'] = $user['username'];
    $_SESSION['userId'] = $user['id'];
    // Crea variable para guardar el nombre de usuario y el id del usuario
    $id = $user['id'];
    $nombre = $_POST['username'];
    // Code in SQL para actualizar el tiempo que el usuario hizo login y cabiar el estatus a activo
    $sql = "UPDATE `users` SET `updated_at`='$current_time', `active`='1' WHERE `users`.`username`='$nombre';";
    $statement = $connect->prepare($sql);
    $statement->execute(); 

    // Envia al usuario a la pagina de programador
    header('Location: ../admin/proyectos.php');
}

else if($user['id_profile'] == 6 && $user['username'] == $_POST['username']){
    // Crea session para guardar el nombre de usuario y el id del usuario
    $_SESSION['username'] = $user['username'];
    $_SESSION['userId'] = $user['id'];
    // Crea variable para guardar el nombre de usuario y el id del usuario
    $id = $user['id'];
    $nombre = $_POST['username'];
    // Code in SQL para actualizar el tiempo que el usuario hizo login y cabiar el estatus a activo
    $sql = "UPDATE `users` SET `updated_at`='$current_time', `active`='1' WHERE `users`.`username`='$nombre';";
    $statement = $connect->prepare($sql);
    $statement->execute(); 

    // Envia al usuario a la pagina de vice presidente
    header('Location: ../admin/dashboard.php');
}

else if($user['id_profile'] == 7 && $user['username'] == $_POST['username']){
    // Crea session para guardar el nombre de usuario y el id del usuario
    $_SESSION['username'] = $user['username'];
    $_SESSION['userId'] = $user['id'];
    // Crea variable para guardar el nombre de usuario y el id del usuario
    $id = $user['id'];
    $nombre = $_POST['username'];
    // Code in SQL para actualizar el tiempo que el usuario hizo login y cabiar el estatus a activo
    $sql = "UPDATE `users` SET `updated_at`='$current_time', `active`='1' WHERE `users`.`username`='$nombre';";
    $statement = $connect->prepare($sql);
    $statement->execute(); 

    // Envia al usuario a la pagina de lider de projecto
    header('Location: ../admin/dashboard.php');
}

else if($user['id_profile'] == 8 && $user['username'] == $_POST['username']){
    // Crea session para guardar el nombre de usuario y el id del usuario
    $_SESSION['username'] = $user['username'];
    $_SESSION['userId'] = $user['id'];
    // Crea variable para guardar el nombre de usuario y el id del usuario
    $id = $user['id'];
    $nombre = $_POST['username'];
    // Code in SQL para actualizar el tiempo que el usuario hizo login y cabiar el estatus a activo
    $sql = "UPDATE `users` SET `updated_at`='$current_time', `active`='1' WHERE `users`.`username`='$nombre';";
    $statement = $connect->prepare($sql);
    $statement->execute(); 

    // Envia al usuario a la pagina de lider de analisis
    header('Location: ../admin/casos.php');
}

else {
    echo "<h4>Los datos ingresados son incorrectos porfavor intentar de nuevo <a href='../index.php'>AQUI</a><h4>";
}
?>