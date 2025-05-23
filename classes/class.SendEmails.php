<?php
class SendEmails{
    public function __construct()
    {
        include_once(dirname(__DIR__).'/common/smtpmail.php');
    }
    public function sendMortgageMail($param){
        $bgcolor = "bgcolor='cyan'";
        $htmlContent =
            '<table border="1" style="width:100%;height:100%;font-size:30px;"><tr ' . $bgcolor . '><td><center>Mortgage Enquiry</center></td></tr></table>';
        $htmlContent .=
            '<table border="1" style="width:100%;height:100%;font-size:15px;"><tr><td ' . $bgcolor . '>Name</td><td>' .
            ((!empty($param['name']))?$param['name']:"Cool") .
            '</td><td ' . $bgcolor . '>Mobile Number</td><td>' .
            ((!empty($param['mobile']))?$param['mobile']:"Cool") .
            '</td></tr>';
        $htmlContent .=
            '<tr><td ' . $bgcolor . '>Email</td><td>' .
            ((!empty($param['email']))?$param['email']:"Cool") .
            '</td><td ' . $bgcolor . '>Age</td><td>' .
            ((!empty($param['age']))?$param['age']:"Cool") .
            '</td></tr>';
        $htmlContent .= '</table>';
        $to = "bhavesh.w1998@gmail.com";
        $subject = "Test Email via Gmail SMTP";
        $cc = '';
        $bcc = '';
        $from = '';
        $attachmentfile = '';
        $response = SEND_SMTP_EMAIL($to, $subject, $htmlContent , $cc, $bcc, $from, $attachmentfile);
        return $response;
    }
}
?>