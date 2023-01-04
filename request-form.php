<?php 
use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST['name'])) {

  $name    = $_POST['name'];
  $contact = $_POST['contact'];
  $service = $_POST['service'];
  $website = "";
  $data  = "";
  $data .= "<table border='1' width='300'>";
  $data .= "<tr>";
  $data .= "<th>Name</th><th>Contact Number</th><th>Service</th><th>Website</th>";
  $data .= "</tr>";
  $data .= "<tr>";
  $data .= "<td>". $name . "</td><td>" . $contact ."</td><td>" . $service ."</td><td>" . $website ."</td>";
  $data .= "</tr>";
  $data .= "</table>";
  
  require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->SMTPDebug = false; 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'ssl'; 
    $mail->Host = "mail.webninjas.in";
    $mail->Port = 465; 
    $mail->IsHTML(true);
    $mail->Username = "contact@webninjas.in";
    $mail->Password = "KansalSamana80$5";
    $mail->setFrom('	contact@webninjas.in', 'Web Ninjas');
    $mail->addReplyTo('	contact@webninjas.in', 'Web Ninjas');
    $mail->addAddress('digiationsolutions@gmail.com', 'Service Request');
    $mail->Subject = 'Service Request';
    $mail->msgHTML($data);
    $mail->AltBody = $data;
    
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else {
            echo "Your Request Has Been Recieved";           
        }
        
}
?>