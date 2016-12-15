<?php

	// calendar form // 
	if(isset($_POST['action']) && $_POST['action'] == "register")
	{
		register_action();
	}

	function register_action()
	{

		if(empty($_POST['username']))
		{
			$_SESSION['uname_error'][]= "Name should not be empty <br />";
		} else {
			$uname = $_POST['username'];
			if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
			$_SESSION['uname_error'][] = "Only letters are allowed for Name Format";
			}
		}

		if(empty($_POST['useremail']))
		{
			$_SESSION['uemail_error'][]= "Email should not be empty <br />";
		} else {
			$uemail = $_POST["useremail"];
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$uemail)) {
				$_SESSION['uemail_error'][] = "Invalid Email Format";
			}
		}

		if(empty($_POST['userphone']))
		{
			$_SESSION['uphone_error'][]= "Please input valid phone number <br />";
		} else {
			$uphone = $_POST["userphone"];
			if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $uphone)){
				$_SESSION['uphone_error'][] = "Invalid Phone Format";
			}
		    if(strlen($uphone) !== 10) {
		      	$_SESSION['uphone_error'][] = "Minimum of 10 Number Characters Required";   
		   }
		}

		header("Location: index.php");

		if (isset($_POST['register'])){
			if (empty($_SESSION['uemail_error']) && empty($_SESSION['uname_error']) && empty($_SESSION['uphone_error']))
			{

				require 'phpmailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;
			    $from = $_POST['useremail'];
			    $uname = $_POST['username'];
			    $uphone = $_POST['userphone'];
			    $date = $_POST['date'];
			    $time = $_POST['time'];
				//$mail->SMTPDebug = 3;                              

				$mail->isSMTP();                                      
				$mail->Host = 'smtp.gmail.com';  
				$mail->SMTPAuth = true;                               
				$mail->Username = 'unitytempsite@gmail.com';                
				$mail->Password = '4oakland2';                           
				$mail->SMTPSecure = 'tls';                            
				$mail->Port = 587;                                    

				$mail->setFrom($from, 'Client Appointment Unity Tax');
				$mail->addAddress('andcliu@gmail.com'); 
				$mail->addAddress('andrcliu@gmail.com');
				$mail->isHTML(true);                               

				$mail->Subject = 'Appointment Requested By ' . $uname;
				$mail->Body    = "<u><b>APPOINTMENT REQUESTED </b></u><br><br>Client name is " . $uname . ".<br> Number is: " . $uphone . ".<br> Appointment Day: " . $date . ".<br> Appointment Time: " . $time . ".<br> His/Her Email is: " . $from . ".<br><br> Please respond immediately to " . $uname . " for appointment confirmation.";
				$subject = "Client requesting appointment for Tax Filing";
				

				if(!$mail->send()) {
                    $_SESSION['umail_msg'][] = "Mail not sent";
                } else {
                    $_SESSION['umail_msg'][] = "Message Was Sent Successfully. <br> Our Staff Will Be In Touch With You Shortly.";
                }
			}
		}
	}


	
?>