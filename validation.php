<?php
	session_start();


	if(isset($_POST['action']) && $_POST['action'] == "send")
	{
		send_action();
	}

	function send_action()
	{
		// name validations header form //

		if(empty($_POST['name']))
		{
			$_SESSION['name_error'][]= "Name field should not be empty <br />";
		} else {
			$name = $_POST["name"];
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$_SESSION['name_error'][] = "Only letters are allowed for Name Format";
			}
		}

		// email validations header form //
		if(empty($_POST['email']))
		{
			$_SESSION['email_error'][]= "Email field should not be empty <br />";
		} else {
			$email = $_POST["email"];
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
				$_SESSION['email_error'][] = "Invalid Email Format";
			}
		}

		// phone validations header form //
		if(empty($_POST['phone']))
		{
			$_SESSION['phone_error'][]= "Phone field should not be empty <br />";
		} else {
			$phone = $_POST["phone"];
			if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)){
				$_SESSION['phone_error'][] = "Invalid Phone Format";
			}
		    if(strlen($phone) !== 10) {
		      	$_SESSION['phone_error'][] = "Minimum of 10 Number Characters Required";   
		   }
		}

		// redirect to index if errors //
		header("Location: index.php");

		// if user submit and there are no validation errors, send mail to admin users //

		if (isset($_POST['submit'])){
	        if (empty($_SESSION['name_error']) && empty($_SESSION['email_error']) && empty($_SESSION['phone_error']))
	        {
	        	require 'phpmailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;
		        $from = $_POST['email'];
		        $name = $_POST['name'];
		        $phone = $_POST['phone'];
		        $company = $_POST['company'];
				//$mail->SMTPDebug = 3;                              

				$mail->isSMTP();                                     
				$mail->Host = 'smtp.gmail.com';  
				$mail->SMTPAuth = true;                             
				$mail->Username = 'unitytempsite@gmail.com';              
				$mail->Password = '4oakland2';                         
				$mail->SMTPSecure = 'tls';                           
				$mail->Port = 587;                                   

				$mail->setFrom($from, 'Client Request Unity Tax');
				$mail->addAddress('rmota@exceldebt.com'); 
				$mail->addAddress('mechevarria@exceldebt.com');
				$mail->isHTML(true);                               

				$mail->Subject = $name . " is Requesting for more information about Unity Tax";
				$mail->Body    = "<u><b>MORE INFO REQUEST </b></u><br><br>Client name is " . $name . ".<br> Number is: " . $phone . ".<br> From this company: " . $company . ".<br> His/Her Email is: " . $from . ".<br><br> Please respond immediately to " . $name . " regarding the request for more information about Unity Tax Plus services.";
	        	$subject = "Client requesting more information regarding Unity Tax";
				

                if(!$mail->send()) {
                    $_SESSION['mail_msg'][] = "Mail not sent";
                } else {
                    $_SESSION['mail_msg'][] = "Message Was Sent Successfully. <br> Our Staff Will Be In Touch With You Shortly.";
                }
 
	        }
		
		}

	}

?>



