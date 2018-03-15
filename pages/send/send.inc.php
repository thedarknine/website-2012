<?php
//! @file send.inc.php
//! @author Caro Noyer
//! @date 2010-05-22

class Send
{
    public function  __construct()
    {
    	/* Test si des donnees existent */
	(isset($_POST['contactName']))?$contactName=$_POST['contactName']:$contactName=null;
	(isset($_POST['contactMail']))?$contactMail=$_POST['contactMail']:$contactMail=null;
	(isset($_POST['contactMessage']))?$contactMessage=$_POST['contactMessage']:$contactMessage=null;
	

	/* Test s'il faut envoyer un mail */
	if(isset($_POST['action']) && 
		$_POST['action'] == "sendMail" && 
		$contactName!==null) 
	{
            /* Adresse d'envoi */
            $mail = "contact@carolinenoyer.info";
	
            /* Sujet */
            $subject = "Mail provenant de carolinenoyer.info"; 
		
            /* From */
            $from = "contact@carolinenoyer.info";
		
            /* Message */
            $message  = "Message de : ".$contactName."\n";
            $message .= "Adresse de retour : ".$contactMail."\n";
            $message .= "Message : \n\n";
            $message .= $contactMessage;
	
            /* Envoi du mail */
            mail($mail, $subject, $message, "From:".$from);
		
            // mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )
	}
    }
}

$send = new Send();
?>
