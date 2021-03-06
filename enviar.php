<!DOCTYPE html>
<html lang="es">
<head>
<title>Tienda de componentes electronicos </title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/modal.js"></script>
<script src="js/TMForm.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
 $(document).ready(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
});
</script>
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="https://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="https://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body id="top">
<!--==============================
              header
=================================-->
<header>
<!--==============================
            Stuck menu
=================================-->
  <section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <h1>
          <a href="index.html">
            <img src="images/slogan.png" alt="Logo alt">
          </a>
        </h1>
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.html">Inicio</a></li>
               <li><a href="learning.html">E-learning</a></li>
               <li><a href="impresoras.html">Sistemas POS</a></li>
               <li><a href="servicios.html">MiPYMES</a></li>
               <li><a href="estaciones.html">Gestión EDS</a></li>
               <li><a href="contacto.html">Contacto</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>
      <!-- CONTENT -->
   
				
               
                <section class="content"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3 class="ta__center">Envio de formulario</h3>
        
      <div class="grid_6">
        <div class="text1 tx__1"></div>
		<?php    
			session_start();     
			$name = isset($_POST['name'])? $_POST['name'] : NULL;
			$email = isset($_POST['email'])? $_POST['email'] : NULL;
			$phone = isset($_POST['phone'])? $_POST['phone'] : NULL;
			$message = isset($_POST['message'])? $_POST['message'] : NULL;

			$para = 'info@kugelelectronics.com';
			$titulo = 'Nuevo contacto Web';
			$header = 'From: ' . $email;    
			$cuerpo  = "Nombre: $name\n";
			$cuerpo .= "E-Mail: $email\n";
			$cuerpo .= "telefono: $phone\n";      
			$cuerpo .= "Mensaje: $message\n";
			
			if($_POST['codigo'] == $_SESSION['captcha']){
				if (isset($_POST['submit'])) {
					if (mail($para, $titulo, $cuerpo, $header)) {
						echo "<script language='javascript'>
						alert('Mensaje enviado, muchas gracias.');
						window.location.href = 'https://www.kugelelectronics.com.co';
						</script>";
						}
					else {
						echo 'Falló el envio';
					}
				}
			}else{
				echo "<script language='javascript'>
						alert('Código erroneo, intente nuevamente.');
						window.location.href = 'https://www.kugelelectronics.com.co/contacto.html';
						</script>";
			}
				
			   
		?>
				
        
       </div> 
          
      </div>
      <div class="grid_6">
        <div class="text1 tx__1">Información de contacto</div>
        
        Kugel Electronics SAS. <br>
        Bogotá, Colombia <br>
        Celular: +57 300 283 05 07 <br>
        <!--FAX: +1 800 889 9898 <br>-->
        E-mail: <a href="#">info@kugelelectronics.com</a>
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="socials">
          <a href="https://twitter.com/KugelCol" class="fa fa-twitter" target="_blank" rel="nofollow"></a>
          <a href="https://www.facebook.com/kugel.electronics" class="fa fa-facebook"target="_blank" rel="nofollow"></a>
          <a href="https://google.com/+Kugelelectronics" class="fa fa-google-plus" target="_blank" rel="nofollow"></a>
          <a href="https://www.youtube.com/user/KugelElectronics" class="fa fa-youtube-play" target="_blank" rel="nofollow"></a>
        </div>
        <div class="copyright"><span class="brand">Kugel Electronics</span> &copy; <span id="copyright-year">2015</span> | Soluciones electrónicas
          <div>Website designed by <a href="https://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div><div>Modificado para el sitio por Kugel Electronics <br/>
         <a href="https://www.ipage.com/green-certified/kugelelectronics.com.co" rel="nofollow"> <img src="https://www.ipage.com/green-certified/hosting-badge-3.png" alt="wind power host" border="0" /> </a></div>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>