

<?php 

use PHPMailer\PHPMailer\PHPMailer;

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);



require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
use PHPMailer\PHPMailer\SMTP; 
require_once "PHPMailer/Exception.php";

require 'vendor/autoload.php';

$mail = new PHPMailer(true);




$mail->isSMTP();
$mail->Host = 'n3plcpnl0239.prod.ams3.secureserver.net';
$mail->SMTPAuth = true;
$mail->Username = "info@pollexphysio.me";
$mail->Password = "t4jw6s7k7if2";
$mail->Port = 587;
$mail->SMTPSecure = "tls";






if($name != null && $email != null && $message != null){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $mail->isHTML(true);
        $mail->setFrom($email);
        $mail->AddAddress("info@pollexphysio.me");
        $mail->Body = $message;
        if($mail->send()){
            $signal = "ok";
            $msg = "Email je poslat";
        }else{
            $signal = "bad";
            $msg = "Email nije poslat";
        }
      } else {
        $signal = "bad";
        $msg = "Morate unijeti vas Email";
      }
}else{
    $signal = "bad";
    $msg = "Morate ispuniti svako polje";
}

    $data = array(
        'signal' => $signal,
        'msg' => $msg
    );

    echo json_encode($data);

?>

