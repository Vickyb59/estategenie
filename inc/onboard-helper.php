<?php
    session_start();
	include 'conn.php';

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
		$servicecharge = $_POST['servicecharge'];
		$subscription = $_POST['subscription'];
		$brandclasssub = $_POST['brandclasssub'];

		$type = 2; // 1-Admin 2-Vendor 3-Resident

		$_SESSION['fullname'] = $fullname;
		$_SESSION['email'] = $email;

		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();
		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already exists.';
			header('location: ../vendor-form.php');
		}
		else{
			$now = date('Y-m-d');

			try{
				$stmt = $conn->prepare("INSERT INTO users (fullname, email, phonenumber, community, business, address, staffnumber, businessphnno, socials, businessstart, businesssynopsis, standout, servicecharge, subscription, brandclasssub, type, created_on) VALUES (:fullname, :email, :phonenumber, :community, :business, :address, :staffnumber, :businessphnno, :socials, :businessstart, :businesssynopsis, :standout, :servicecharge, :subscription, :brandclasssub, :type, :now)");
				$stmt->execute(['fullname'=>$fullname, 'email'=>$email, 'phonenumber'=>$phonenumber, 'community'=>$community, 'business'=>$business, 'address'=>$address, 'staffnumber'=>$staffnumber, 'businessphnno'=>$businessphnno, 'socials'=>$socials, 'businessstart'=>$businessstart, 'businesssynopsis'=>$businesssynopsis, 'standout'=>$standout, 'servicecharge'=>$servicecharge, 'subscription'=>$subscription, 'brandclasssub'=>$brandclasssub, 'type'=>$type, 'now'=>$now]);

				$message = '
					<!DOCTYPE html>
					<html lang="en-US">
					    <head>
					        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					        <title></title>
					    </head>
					    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="padding: 0;">
					        <div id="wrapper" dir="ltr" style="background-color: #f7f7f7; margin: 0; padding: 70px 0; width: 100%; -webkit-text-size-adjust: none;">
					            <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
					                <tr>
					                    <td align="center" valign="top">
					                        <div id="template_header_image"></div>
					                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="background-color: #ffffff; border: 1px solid #dedede; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1); border-radius: 3px;">
					                            <tr>
					                                <td align="center" valign="top">
					                                    <!-- Header -->
					                                    <table
					                                        border="0"
					                                        cellpadding="0"
					                                        cellspacing="0"
					                                        width="600"
					                                        id="template_header"
					                                        style="
					                                            background-color: #96588a;
					                                            color: #ffffff;
					                                            border-bottom: 0;
					                                            font-weight: bold;
					                                            line-height: 100%;
					                                            vertical-align: middle;
					                                            font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
					                                            border-radius: 3px 3px 0 0;
					                                        "
					                                    >
					                                        <tr>
					                                            <td id="header_wrapper" style="padding: 36px 48px; display: block;">
					                                                <h1
					                                                    style="
					                                                        font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
					                                                        font-size: 30px;
					                                                        font-weight: 300;
					                                                        line-height: 150%;
					                                                        margin: 0;
					                                                        text-align: left;
					                                                        text-shadow: 0 1px 0 #ab79a1;
					                                                        color: #ffffff;
					                                                    "
					                                                >
					                                                    Welcome to the Estate Genie Platform
					                                                </h1>
					                                            </td>
					                                        </tr>
					                                    </table>
					                                    <!-- End Header -->
					                                </td>
					                            </tr>
					                            <tr>
					                                <td align="center" valign="top">
					                                    <!-- Body -->
					                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
					                                        <tr>
					                                            <td valign="top" id="body_content" style="background-color: #ffffff;">
					                                                <!-- Content -->
					                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
					                                                    <tr>
					                                                        <td valign="top" style="padding: 48px 48px 0;">
					                                                            <div id="body_content_inner" style="color: #636363; font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif; font-size: 14px; line-height: 150%; text-align: left;">
					                                                                <p style="margin: 0 0 16px;">Hi '.$fullname.',</p>
					                                                                <p style="margin: 0 0 16px;">Thank you for registering. This is an appreciation mail for signing up to the Estate Genie Platform</p>
					                                                                <p style="margin: 0 0 16px;">We will definitely see more of ourselves.</p>
					                                                            </div>
					                                                        </td>
					                                                    </tr>
					                                                </table>
					                                                <!-- End Content -->
					                                            </td>
					                                        </tr>
					                                    </table>
					                                    <!-- End Body -->
					                                </td>
					                            </tr>
					                            <tr>
					                                <td align="center" valign="top">
					                                    <!-- Footer -->
					                                    <table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer">
					                                        <tr>
					                                            <td valign="top" style="padding: 0; border-radius: 6px;">
					                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
					                                                    <tr>
					                                                        <td
					                                                            colspan="2"
					                                                            valign="middle"
					                                                            id="credit"
					                                                            style="
					                                                                border-radius: 6px;
					                                                                border: 0;
					                                                                color: #c09bb9;
					                                                                font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
					                                                                font-size: 12px;
					                                                                line-height: 125%;
					                                                                text-align: center;
					                                                                padding: 0 48px 48px 48px;
					                                                            "
					                                                        >
					                                                            <p style="text-align: center;">&copy; '.$year.' Estate Genie. All rights reserved.<br>
					                                                            111 Ogunlana Drive, <br>
					                                                            Surulere,<br>
					                                                            Lagos, Nigeria</p>
					                                                        </td>
					                                                    </tr>
					                                                </table>
					                                            </td>
					                                        </tr>
					                                    </table>
					                                    <!-- End Footer -->
					                                </td>
					                            </tr>
					                        </table>
					                    </td>
					                </tr>
					            </table>
					        </div>
					    </body>
					</html>
				';


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
			        header('location: ../vendor-form.php');

			    } 
			    catch (Exception $e) {
			        $_SESSION['success'] = 'You have successfully subscribed to the estate genie platform.';
			        header('location: ../vendor-form.php');
			    }


			}
			catch(PDOException $e){
				$_SESSION['success'] = $e->getMessage();
				header('location: ../vendor-form.php');
			}

			$pdo->close();

		}

	}
	elseif(isset($_POST['onboardResident'])){
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$estate = $_POST['estate'];
		$address = $_POST['address'];
		$socials = $_POST['socials'];
		$propertystatus = $_POST['propertystatus'];
		$maritalstatus = $_POST['maritalstatus'];
		$occupation = $_POST['occupation'];
		$occupationalstatus = $_POST['occupationalstatus'];

		$type = 3; // 1-Admin 2-Vendor 3-Resident

		$_SESSION['fullname'] = $fullname;
		$_SESSION['email'] = $email;

		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();
		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already exists.';
			header('location: ../resident-form.php');
		}
		else{
			$now = date('Y-m-d');

			try{
				$stmt = $conn->prepare("INSERT INTO users (fullname, email, phonenumber, estate, address, socials, propertystatus, maritalstatus, occupation, occupationalstatus, type, created_on) VALUES (:fullname, :email, :phonenumber, :estate, :address, :socials, :propertystatus, :maritalstatus, :occupation, :occupationalstatus, :type, :now)");
				$stmt->execute(['fullname'=>$fullname, 'email'=>$email, 'phonenumber'=>$phonenumber, 'estate'=>$estate, 'address'=>$address, 'socials'=>$socials, 'propertystatus'=>$propertystatus, 'maritalstatus'=>$maritalstatus, 'occupation'=>$occupation, 'occupationalstatus'=>$occupationalstatus, 'type'=>$type, 'now'=>$now]);

				$message = '
					<!DOCTYPE html>
					<html lang="en-US">
					    <head>
					        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					        <title></title>
					    </head>
					    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="padding: 0;">
					        <div id="wrapper" dir="ltr" style="background-color: #f7f7f7; margin: 0; padding: 70px 0; width: 100%; -webkit-text-size-adjust: none;">
					            <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
					                <tr>
					                    <td align="center" valign="top">
					                        <div id="template_header_image"></div>
					                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="background-color: #ffffff; border: 1px solid #dedede; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1); border-radius: 3px;">
					                            <tr>
					                                <td align="center" valign="top">
					                                    <!-- Header -->
					                                    <table
					                                        border="0"
					                                        cellpadding="0"
					                                        cellspacing="0"
					                                        width="600"
					                                        id="template_header"
					                                        style="
					                                            background-color: #96588a;
					                                            color: #ffffff;
					                                            border-bottom: 0;
					                                            font-weight: bold;
					                                            line-height: 100%;
					                                            vertical-align: middle;
					                                            font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
					                                            border-radius: 3px 3px 0 0;
					                                        "
					                                    >
					                                        <tr>
					                                            <td id="header_wrapper" style="padding: 36px 48px; display: block;">
					                                                <h1
					                                                    style="
					                                                        font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
					                                                        font-size: 30px;
					                                                        font-weight: 300;
					                                                        line-height: 150%;
					                                                        margin: 0;
					                                                        text-align: left;
					                                                        text-shadow: 0 1px 0 #ab79a1;
					                                                        color: #ffffff;
					                                                    "
					                                                >
					                                                    Welcome to the Estate Genie Platform
					                                                </h1>
					                                            </td>
					                                        </tr>
					                                    </table>
					                                    <!-- End Header -->
					                                </td>
					                            </tr>
					                            <tr>
					                                <td align="center" valign="top">
					                                    <!-- Body -->
					                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
					                                        <tr>
					                                            <td valign="top" id="body_content" style="background-color: #ffffff;">
					                                                <!-- Content -->
					                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
					                                                    <tr>
					                                                        <td valign="top" style="padding: 48px 48px 0;">
					                                                            <div id="body_content_inner" style="color: #636363; font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif; font-size: 14px; line-height: 150%; text-align: left;">
					                                                                <p style="margin: 0 0 16px;">Hi '.$fullname.',</p>
					                                                                <p style="margin: 0 0 16px;">Thank you for registering. This is an appreciation mail for signing up to the Estate Genie Platform</p>
					                                                                <p style="margin: 0 0 16px;">We will definitely see more of ourselves.</p>
					                                                            </div>
					                                                        </td>
					                                                    </tr>
					                                                </table>
					                                                <!-- End Content -->
					                                            </td>
					                                        </tr>
					                                    </table>
					                                    <!-- End Body -->
					                                </td>
					                            </tr>
					                            <tr>
					                                <td align="center" valign="top">
					                                    <!-- Footer -->
					                                    <table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer">
					                                        <tr>
					                                            <td valign="top" style="padding: 0; border-radius: 6px;">
					                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
					                                                    <tr>
					                                                        <td
					                                                            colspan="2"
					                                                            valign="middle"
					                                                            id="credit"
					                                                            style="
					                                                                border-radius: 6px;
					                                                                border: 0;
					                                                                color: #c09bb9;
					                                                                font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
					                                                                font-size: 12px;
					                                                                line-height: 125%;
					                                                                text-align: center;
					                                                                padding: 0 48px 48px 48px;
					                                                            "
					                                                        >
					                                                            <p style="text-align: center;">&copy; '.$year.' Estate Genie. All rights reserved.<br>
					                                                            111 Ogunlana Drive, <br>
					                                                            Surulere,<br>
					                                                            Lagos, Nigeria</p>
					                                                        </td>
					                                                    </tr>
					                                                </table>
					                                            </td>
					                                        </tr>
					                                    </table>
					                                    <!-- End Footer -->
					                                </td>
					                            </tr>
					                        </table>
					                    </td>
					                </tr>
					            </table>
					        </div>
					    </body>
					</html>
				';


				//Notify Admin

				$msg = "A New Resident Just Registered, Login Admin";

				// use wordwrap() if lines are longer than 70 characters
				$msg = wordwrap($msg,70);

				// send email
				mail("info@estategenie.com.ng","New Resident",$msg);




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
			        header('location: ../resident-form.php');

			    } 
			    catch (Exception $e) {
			        $_SESSION['success'] = 'You have successfully subscribed to the estate genie platform.';
			        header('location: ../resident-form.php');
			    }


			}
			catch(PDOException $e){
				$_SESSION['success'] = $e->getMessage();
				header('location: ../resident-form.php');
			}

			$pdo->close();

		}

	}
	else{
		$_SESSION['error'] = 'Fill up onboarding form first';
		header('location: ' . $_SERVER['HTTP_REFERER']);
	}

?>