<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>Título de la WEB</title>    
    <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="CC Digital - Agencia de diseño y marketing digital">
        <meta name="description" content="Somos una agencia especializada en diseño y marketing digital. Nos ocupamos y preocupamos por tu marca e imagen. Vos disfrutá de tu empresa, de la comunicación nos encargamos nosotras!">     

        <link rel="shortcut icon" href="img/favicon-16x16.png"> 

    <!-- Open Graph -->
        <meta property="og:title" content="CC Digital - Agencia de diseño y marketing digital" />
        <meta property="og:type" content="web" />
        <meta property="og:description" content="Somos una agencia especializada en diseño y marketing digital. Nos ocupamos y preocupamos por tu marca e imagen. Vos disfrutá de tu empresa, de la comunicación nos encargamos nosotras!" />
        <meta property="og:site_name" content="CC Digital" />    
        <meta property="og:url" content="http://www.ccdigital.com.ar" />
        <meta property="og:image" content="img/preview-img.jpg" />

    <!-- CSS del tema -->
        <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script>window.jQuery || document.write('<link href="css/bootstrap.min.css"')</script>

    <!-- Font Awesome CSS -->
        <link href="css/fontawesome.min.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet">
     
    <!-- Google Font -->
        
    <style>
    </style>  
     
</head>  
<body>    
    <header>
        <div id="main wrapper">
            <?php include("layouts/header.php") ?> 
            <?PHP
        		if (isset($_GET['id'])) {
        			if (!empty($_GET['id']) && $_GET['id'] != "index") {
        				if (file_exists('layouts/'.$_GET['id'].".php")) {
        					include ('layouts/'.$_GET['id'].".php");
        				} else {
        					echo "No existe esta seccion";
        				}
        			} else {
        				include ("layouts/home.php");
        			}
        		} else {
        			include ("layouts/home.php");
        		}
        	?>	
            <?php include("layouts/footer.php") ?> 
        </div>     
    </header> 
    
    <!-- bootstrapt JS  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Font Awesome JS -->
        <script href="js/fontawesome.min.js"></script>
        <script href="js/all.min.js"></script>  
</body>  
</html>
