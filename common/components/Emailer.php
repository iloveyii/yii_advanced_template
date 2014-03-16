<?php

class Emailer
{
    private $senderEmail;
    private $senderName;
    private $recipients;
    private $subject;
    private $body;
    private $bodyHtml;
    private $htmlFormt;
    private $mailer;
    private $headers;

    /**
     * Sets senderEmail and Password
     * @param string $senderEmail
     * @param string $senderName
     */
    function __construct($senderEmail,$senderName){
        $this->senderEmail = $senderEmail;
        $this->senderName=$senderName;
        $this->recipients = array();
        
        $headers = "From: " . strip_tags($this->senderEmail) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($this->senderEmail) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $this->headers=$headers;
    }
    
    /**
     * If you want to send via smtp, it sets account
     * 
     * @param string $accountEmail email address of the account
     * @param string $accountPassword password of the account
     * @param string $host smtp host eg smtp.gmail.com
     */
    public function setAccount($accountEmail, $accountPassword, $host) {
        
        Yii::import('application.extensions.phpmailer.JPhpMailer');
		$mail = new JPhpMailer;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = $host;
        $mail->Mailer = "smtp";
        $mail->Port= 587;
		$mail->Username = $accountEmail;
		$mail->Password = $accountPassword;
		$mail->SetFrom($this->senderEmail, $this->senderName);
		$mail->Subject = $this->subject;
		$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
        $this->mailer=$mail;
    }
    
    /**
     * Add recepients
     * 
     * @param string $recipient email address
     */
    public function addRecipients($recipient){
        array_push($this->recipients, $recipient);
    }
    
    /**
     * Set subject of the email
     * 
     * @param string $subject
     */
    public function setSubject($subject){
        $this->subject = $subject;
    }
    
    /**
     * Set body of the email
     * 
     * @param string $body
     */
    public function setBody($body){
        $this->body = $body;
        $message = '<html><body>';
		$message .= $body;
		$message .= "</body></html>";
        $this->bodyHtml=$message;
        
    }
    
    /**
     * Send email to all recepients
     * 
     * @param boolean $smtp if true then smtp account will be used else mail func
     * @param boolean $htmlFormat in html format or simple text
     */
    public function sendEmail($smtp=TRUE, $htmlFormat=TRUE){
        
        $this->htmlFormt=$htmlFormat;
        
        foreach ($this->recipients as $recipient) {
            if($smtp) {
                $result = $this->sendSmtp($recipient);
            } else {
                $result = $this->sendMail($recipient);
            }
            if ($result) echo "Mail successfully sent to{$recipient}<br/>";
        }
   }
   
   /**
    * Sends email to recepient via smtp
    * 
    * @param string $recipient email
    * @return boolean
    */
   private function sendSmtp($recipient) {
       
       if($this->htmlFormt) {
           $this->mailer->MsgHTML($this->bodyHtml);
       } else {
            $this->mailer->MsgHTML($this->body);
       }
       return $this->mailer->Send();
   }
   
   /**
    * Sends email via mail function
    * 
    * @param string $recipient
    * @return boolean
    */
   private function sendMail($recipient) {
       
       if($this->htmlFormt)
            return mail($recipient, $this->subject, $this->bodyHtml, $this->headers);
       else
            return mail($recipient, $this->subject, $this->body);
       }
}