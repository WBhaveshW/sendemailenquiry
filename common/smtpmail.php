<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// $bgcolor = "bgcolor='cyan'";
	
// $htmlContent =
//     '<table border="1" style="width:100%;height:100%;font-size:30px;"><tr ' . $bgcolor . '><td><center>Mortgage Enquiry</center></td></tr></table>';
// $htmlContent .=
//     '<table border="1" style="width:100%;height:100%;font-size:15px;"><tr><td ' . $bgcolor . '>Name</td><td>' .
//     ((!empty($param['name']))?$param['name']:"Cool") .
//     '</td><td ' . $bgcolor . '>Mobile Number</td><td>' .
//     ((!empty($param['mobile']))?$param['mobile']:"Cool") .
//     '</td></tr>';
// $htmlContent .=
//     '<tr><td ' . $bgcolor . '>Email</td><td>' .
//     ((!empty($param['email']))?$param['email']:"Cool") .
//     '</td><td ' . $bgcolor . '>Age</td><td>' .
//     ((!empty($param['age']))?$param['age']:"Cool") .
//     '</td></tr>';
// $htmlContent .= '</table>';
// $to = "bhavesh.w1998@gmail.com";
// $subject = "Test Email via Gmail SMTP";
// $message = "This is a test email sent using Gmail SMTP in PHP.";
// $cc = '';
// $bcc = '';
// $from = '';
// $attachmentfile = '';

// echo SEND_SMTP_EMAIL($to, $subject, $htmlContent , $cc, $bcc, $from, $attachmentfile);

function SEND_SMTP_EMAIL($to, $subject, $message, $cc = '', $bcc = '', $from = '', $attachmentfile = '')
{
  $result = [];
  require dirname(dirname(__FILE__)) . '/libraries/vendor/autoload.php';
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  try {
    //$option = constant('MAILSERVICE_OPTION') ?? 2;
    $option = defined('MAILSERVICE_OPTION') ? constant('MAILSERVICE_OPTION') : 1;

    $sendmailarr = array();
    switch ($option) {
      case 1:
        $mail->Host = gethostbyname('smtp.gmail.com');
        $from = 'bhavesh.w1998@gmail.com';
        $from_name = 'Bhavesh Warekar';
        $sendmailarr[$from] = array('user' => $from, 'pass' => 'yfeppcskupsncnjb');
        break;
      default:
        $mail->Host = gethostbyname('smtp.gmail.com');
        $from = 'bhavesh.w1998@gmail.com';
        $from_name = 'Bhavesh Warekar';
        $sendmailarr[$from] = array('user' => $from, 'pass' => 'yfeppcskupsncnjb');
        break;
    }
    //Server settings
    $mail->SMTPDebug = 0;                     					//Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth = true;
    $mail->Username = $sendmailarr[$from]['user'];          //SMTP username
    $mail->Password = $sendmailarr[$from]['pass'];          //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
    $mail->Port = 587;
    $mail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );
    //Recipients
    $mail->setFrom($from, $from_name);
    $mail->addReplyTo($from, $from_name);
    //add recipient values
    if (!empty($to)) {
      $todata = array_unique(explode(',', $to));
      foreach ($todata as $toid) {
        $mail->addAddress($toid);
      }
    }
    //add cc values
    if (!empty($cc)) {
      $ccdata = array_unique(explode(',', $cc));
      foreach ($ccdata as $ccid) {
        $mail->addCC($ccid);
      }
    }
    if ($from == "bhavesh.w1998@gmail.com") {
      $mail->addBCC('bhavesh.w1998@gmail.com');
    }
    //Attachments
    if (!empty($attachmentfile)) {
      $mail->addAttachment($attachmentfile);//Add attachments
    }
    //Content
    $mail->isHTML(true);//Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    $result['message'] = "Email sent successfully..!";
    $result['status'] = "success";
  } catch (Exception $e) {
    $result['message'] = "Email could not be sent. Error: {$mail->ErrorInfo}";
    $result['status'] = "success";
  }
  return json_encode($result);
}

?>