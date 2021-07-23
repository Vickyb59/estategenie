<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	if(isset($_POST['onboardVendor'])){
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$community = $_POST['community'];
		$business = $_POST['business'];
		$address = $_POST['address'];
		$staffnumber = $_POST['staffnumber'];
		$businessphnno = $_POST['businessphnno'];
		$socials = $_POST['socials'];
		$businessstart = $_POST['businessstart'];
		$businesssynopsis = $_POST['businesssynopsis'];
		$standout = $_POST['standout'];
		$servicecharge = $_POST['business'];
		$subscription = $_POST['subscription'];
		$brandclasssub = $_POST['brandclasssub'];

		$_SESSION['fullname'] = $fullname;
		$_SESSION['email'] = $email;

		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();
		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already exists.';
			header('location: vendor-form.php');
		}
		else{
			$now = date('Y-m-d');

			try{
				$stmt = $conn->prepare("INSERT INTO users (fullname, email, phonenumber, community, business, address, staffnumber, businessphnno, socials, businessstart, businesssynopsis, standout, servicecharge, subscription, brandclasssub, created_on) VALUES (:fullname, :email, :phonenumber, :community, :business, :address, :staffnumber, :businessphnno, :socials, :businessstart, :businesssynopsis, :standout, :servicecharge, :subscription, :brandclasssub, :now)");
				$stmt->execute(['fullname'=>$fullname, 'email'=>$email, 'phonenumber'=>$phonenumber, 'community'=>$community, 'business'=>$business, 'address'=>$address, 'staffnumber'=>$staffnumber, 'businessphnno'=>$businessphnno, 'socials'=>$socials, 'businessstart'=>$businessstart, 'businesssynopsis'=>$businesssynopsis, 'standout'=>$standout, 'servicecharge'=>$servicecharge, 'subscription'=>$subscription, 'brandclasssub'=>$brandclasssub, 'now'=>$now]);
				$userid = $conn->lastInsertId();

				$message = "
					<h2>Thank you for Registering to the estate genie platform.</h2>
				";


				//Notify Admin

				$msg = "A New Vendor Just Registered, Login Admin";

				// use wordwrap() if lines are longer than 70 characters
				$msg = wordwrap($msg,70);

				// send email
				mail("info@estategenie.com.ng","New Vendor",$msg);




				//Load phpmailer
	    		require '../vendor/autoload.php';

	    		$mail = new PHPMailer(true);                             
			    try {
			        //Server settings
			        $mail->isSMTP();                                     
			        $mail->Host = 'mail.estategenie.com.ng';                      
			        $mail->SMTPAuth = true;                               
			        $mail->Username = 'noreply@estategenie.com.ng';     
			        $mail->Password = 'Egen@001-';                    
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'ssl';                           
			        $mail->Port = 465;                                   

			        $mail->setFrom('info@estategenie.com.ng');
			        
			        //Recipients
			        $mail->addAddress($email);              
			        $mail->addReplyTo('info@estategenie.com.ng');
			       
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = 'Estate Genie Sign Up';
			        $mail->Body    = $message;

			        $mail->send();

			        unset($_SESSION['firstname']);
			        unset($_SESSION['lastname']);
			        unset($_SESSION['email']);

			        $_SESSION['success'] = 'You have successfully subscribed to the estate genie platform.';
			        header('location: vendor-form.php');

			    } 
			    catch (Exception $e) {
			        $_SESSION['success'] = 'You have successfully subscribed to the estate genie platform.';
			        header('location: vendor-form.php');
			    }


			}
			catch(PDOException $e){
				$_SESSION['success'] = $e->getMessage();
				header('location: vendor-form.php');
			}

			$pdo->close();

		}

	}
	else{
		$_SESSION['error'] = 'Fill up vendor form first';
		header('location: vendor-form.php');
	}

?>