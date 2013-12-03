<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <HEAD>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <TITLE>Ichai Gutierrez Romero CV</TITLE>
		
			<!--<script src="http://code.jquery.com/jquery.js"></script>-->
			<script src="js/bootstrap.min.js" type="text/jscript"></script>
			<link rel="Stylesheet" href="css/bootstrap.css" />
			<link rel="Stylesheet" href="css/bootstrap-responsive.css" />				
			<LINK HREF="css/estilo.css" REL="stylesheet" TYPE="text/css">



			<!--php funfion-->
<?php 
$errors = '';
$myemail = 'ichai.hammett@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: confirmacion.html');
} 
?>
			<!--php funfion-->
        

    </HEAD>
	<!--BODY aqui entra la clase de el css para el body-->
    <BODY class ="body_style"> 
	<!--es el banner con el MENU-->
        <div class ="menu_banner">
			<!--Lista de el menu-->
			<ul class="inline" style = " margin-top: 20px;" id="site_nav" >
				<li><a href="#aboutme"><button type="button" class="btn btn-info">About me</button></li>
				<li><a href="#expertise"><button type="button" class="btn btn-info">My Expertise</button></li>
				<li><a href="#experience"><button type="button" class="btn btn-info">Experience</button></li>
				<li><a href="#education"><button type="button" class="btn btn-info">Education</button></li>
				<li><a href="#skills"><button type="button" class="btn btn-info">Skills</button></li>
				<li><a href="#portfolio"><button type="button" class="btn btn-info">Portfolio</button></li>
				<li><a href="#contact"><button type="button" class="btn btn-info ">Contact</button></li>

							
		    </ul>
		
		</div> 
		
		<!--este div es el contenedor principal-->
		<div class="div_contenedorPrin" style="margin-top: 40px;">
		
		    <!--DIv para el name-->
		    <!--aqui entran las clases de el css divsContenido_divAboutme-->
				<div class="divsContenido_divAboutme" id="aboutme" style="margin-top: 40px;">
					
							<!--DIv para el titulo-->
							<!--clases para cada div de el titulo aboutme-->				
							
							
							<div class="div_aboutme">
								<!--Parrafo para el div de el el titulo -->
								<p class="p_aboutme">

									<p class="p_aboutme" >

									<h2 class="h2_aboutme">
										About me:</h2>
										<h5 class="h5_aboutme">
										professional profile<br> and contact info</h5>
											</p>
								</p>
							
							</div>
						
							<!--Div para el contenido-->
							<div class="div_contenido_aboutme">

								<p class="p_contenido_aboutme">
								<span class="img-circle"><img style="float:left" src="img/mypic.jpg" alt=""></span>

									Jesus Ichai Gutierrez Romero</br>
									Date of Birth:Sep 20th 1992</br>
									Place of Birth:Distriro Federal, Mexico</br>
									Address:Fco. Kino Street # , Tijuana, B.C.</br>
									Zip Code:22222</br>
									Cell Phone Number: (044)664-235-34-69</br>
									Email Address:ichai.hammett@gmail.com</br>
									
									
									
								</p>
							
							</div>
						 
						   
					


				</div >
				
				
			<!--DIv para el My Expertise-->	
				<!--comendado<div class="div_contenido_principal_experiencia" id="expertise">-->

				<!--DIv para el Titulo-->
				<!--comendado
							<div class="div_tituloExperiencia">
								<p class="P_titulo_Experiencia">

									<p class="P_titulo_Experiencia">

									<h2 class="h2_titulo_Experiencia">
										My Expertise:</h2>
										<h5 class="h5_titulo_experiencia">
										Skills that Im<br> Proud of</h5>
											</p>
								</p>
							
							</div>
							-->
						
							<!--Div para el About me-->
							<!--comendado
							<div class="h5_titulo_experiencia">
								<p style="margin-left: 30px">
									Hello, I’m Lorem ipsum dolor sit amet, conseur adipiscing elit puella magna est.
									Etiam sem eros, interdum at rutrum et, hendrerit id nisi. Etiam iaculis lorem eget arcu gravida lacinia. Fringilla justo ullamcorper ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Raesent sem elit, volutpat id vulputate faucibus, fringilla vel massa. 
								</p>
							
							</div>
							-->
						
						  <!--hasta aqui voy en csssss  --><!--hasta aqui voy en csssss  --><!--hasta aqui voy en csssss  --><!--hasta aqui voy en csssss  --><!--hasta aqui voy en csssss  -->
			<!--comendado	</div>-->
				



		    <!--DIv para el Experience-->
				<div class="div_principal_exp" id="experience" style="margin-top: 50px;">
					<!--DIv para el titulo-->
							<div class="div_tituloExperiencia"> <!--aqui se anexa css ya hecho-->
								<p class="P_titulo_Experiencia">

									<p class="P_titulo_Experiencia">

									<h2 class="h2_titulo_Experiencia">
										Experience:</h2>
										<h5 class="h5_titulo_experiencia">
										Where I worked</h5>
											</p>
								</p>
							
							</div>
						
							<!--Div para el contenido-->
							<div class="div_about_titulo_experiencia">
								<p class="P_titulo_Experiencia">
									
									
								</p>
							
							</div>
						 
						   
				</div>
			<!--DIv para el Education-->	
				<div class="div_tituloExperiencia" id="education" style="margin-top: 50px;">
				<!--DIv para el titulo-->
							<div class="div_tituloExperiencia">
								<p class="P_titulo_Experiencia" >

									<p class="P_titulo_Experiencia" >

									<h2 class="h2_titulo_Experiencia">
										Education:</h2>
										<h5 class="h5_titulo_experiencia">
										My college and</br>High school</h5>
											</p>
								</p>
							
							</div>
						
							<!--Div para el contenido-->
							<div class="div_about_titulo_experiencia">
								<p class="P_titulo_Experiencia">
									
									
								</p>
							
							</div>
						 
						   
				</div>
			<!--DIv para el skills-->	
				<div class="div_skillsPrincipal" id="skills" style="margin-top: 50px;">
				<!--DIv para el titulo-->
							<div class="div_tituloSkills" >
								<p style="margin-left: 30px" >

									<p class="P_titulo_Experiencia">

									<h2 class="h2_titulo_Experiencia" 	>
										Skills:</h2>
										<h5 class="h5_titulo_experiencia">
										What Im Good for</h5>
											</p>
								</p>
							
							</div>
						
							<!--Div para el contenido-->
							<div class="div_about_titulo_experiencia">
								<p class="P_titulo_Experiencia">
									Languages: C#, Java, CSS, IOS</br>Frameworks: .NET, Play</br>

								
									Hardware Maintenance (Preventive Care )</br>
									Software maintenance (installation, updating, Removing, Blocking, etc)</br>
									Support Newtwork Administration</br>
									Support Server Administration</br>
									
																		
								</p>
							
							</div>
						 
						   
				</div>
				
			<!--DIv para el Portfolio-->	
				<div class="div_contenido_principal_experiencia" id="portfolio" style="margin-top: 50px;">
				<!--DIv para el Titulo-->
							<div class="div_tituloExperiencia">
									<p style="margin-left: 30px" >

									<p style="margin-left: 30px" >

									<h2 class="h2_titulo_Experiencia" 	>
										Portfolio:</h2>
										<h5 class="h5_titulo_experiencia">
										Some of my</br>best work</h5>
											</p>
								</p>
							
							</div>
						
							<!--Div para el About me-->
							<div class="div_about_titulo_experiencia">
								<p style="margin-left: 30px">
									Hello, I’m Lorem ipsum dolor sit amet, conseur adipiscing elit puella magna est.
									Etiam sem eros, interdum at rutrum et, hendrerit id nisi. Etiam iaculis lorem eget arcu gravida lacinia. Fringilla justo ullamcorper ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Raesent sem elit, volutpat id vulputate faucibus, fringilla vel massa. 
								</p>
							
							</div>
						 
						   
				</div>
				
			<!--DIv para el Education-->	
				<div class="div_principal_exp" id="contact" style="margin-top: 50px;">

				<!--DIv para el Titulo-->
							<div class="div_tituloSkills" style="background-image: #fff url("../img/container-bg.png"); margin-top: 40px;">
								<p style="margin-left: 30px" >

									<p style="margin-left: 30px" >

									<h2 class="h2_titulo_Experiencia">
										Contact Me:</h2>
										<h5 class="h5_titulo_experiencia">
										I reply in less</br>than 24 hours</h5>
											</p>
								</p>
							</div>
						
							<!--Div para el About me-->
							<div class="div_about_titulo_experiencia">
								<p style="margin-left: 30px">
									

									<!--php-->
																	<?php
								$action=$_REQUEST['action'];
								if (!$action=="action")    /* display the contact form */
								    {
								    ?>
								    <form  action="index.php" method="POST" enctype="multipart/form-data">
								    <input type="hidden" name="action" value="submit">
								    Your name:<br>
								    <input name="name" type="text" value="" size="30"/><br>
								    Your email:<br>
								    <input name="email" type="text" value="" size="30"/><br>
								    <div style="margin-left:350px; margin-top: -70px;">
								    	Your message:<br>
								    <textarea name="message" rows="7" cols="15"></textarea>
								    <input type="submit" value="Send email"/>
								    </form>
								    </div>
								    <?php
								    } 
								else                /* send the submitted data */
								    {
								    $name=$_REQUEST['name'];
								    $email=$_REQUEST['email'];
								    $message=$_REQUEST['message'];
								    if (($name=='name')||($email=='email')||($message=='message'))
								        {
								        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
								        }
								    else{        
								        $from="From: $name<$email>\r\nReturn-path: $email";
								        $subject="Message sent using your contact form";
								        mail("ichai.hammett@gmail.com", $subject, $message, $from);
								        echo "Fill the form please and try again!";
								        }
								    }  
								?>

									<!--php-->
								</p>
							
							</div>
						 
						  
				</div>
				
			
				
		</div>
		
		

    </BODY>
</HTML>
