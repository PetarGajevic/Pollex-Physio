

<?php 

use PHPMailer\PHPMailer\PHPMailer;

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

print_r($_POST);

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
use PHPMailer\PHPMailer\SMTP; 
require_once "PHPMailer/Exception.php";

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try{
print_r($mail);
$mail->SMTPDebug = SMTP::DEBUG_SERVER;   
$mail->isSMTP();
$mail->Host = 'n3plcpnl0239.prod.ams3.secureserver.net';
$mail->SMTPAuth = true;
$mail->Username = "info@pollexphysio.me";
$mail->Password = "bnquofzt6gji";
$mail->port = 465;
$mail->SMTPSecure = "ssl";

$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->AddAddress("info@pollexphysio.me");
$mail->Body = $message;

if($mail->send()){
    $signal = "ok";
    $msg = "Email is sent";
}else{
    $signal = "bad";
    $msg = "Email is not sent";
}
} catch (phpmailerException $e){
    echo $e->errorMessage();
}catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
  }


/* if($name != null && $email != null && $message != null){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $signal = "ok";
        $msg = "Email is good";
      } else {
        $signal = "bad";
        $msg = "Email doesnt exist";
      }
}else{
    $signal = "bad";
    $msg = "fill in all fields";
} */

    $data = array(
        'signal' => $signal,
        'msg' => $msg
    );

    echo json_encode($data);

?>