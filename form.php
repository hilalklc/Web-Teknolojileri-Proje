<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Hilal KILIÇ Web Teknolojileri Proje</title>


  </head>
  <body>
   <main>
  <div class="container py-4">
  <header class="d-flex flex-wrap bg-menu justify-content-center p-4 mb-4 border-bottom">
    <a href="index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <span class="fs-3 ">Hilal KILIÇ</span>
    </a>
    <ul class="nav nav-pills ">
      <li class="nav-item"><a href="index.html" class="nav-link">Hakkımda</a></li>
      <li class="nav-item"><a href="ozGecmis.html" class="nav-link">ÖzGeçmiş</a></li>
      <li class="nav-item"><a href="ilgiAlanlarım.html" class="nav-link">İlgi Alanlarım</a></li>
      <li class="nav-item"><a href="sehrim.html" class="nav-link">Şehrim</a></li>
      <li class="nav-item"><a href="mirasimiz.html" class="nav-link">Mirasımız</a></li>
      <li class="nav-item"><a href="iletisim.html" class="nav-link">İletişim</a></li>
	  <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
   
    </ul>
  </header>

  
	
	
	<div class="container">
			
			<?php 

				include("kullanıcılar.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ ");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; url=login.html");
			    }
			
			?>
			
		</div>
	
		
	
	
 <footer class="bg-menu text-center py-3 mb-4 ">

  <!-- Copyright -->
  <div class="text-center bg-menu">
    © 2021 Hilal KILIÇ Proje Ödev
  </div>
  <!-- Copyright -->

</footer>
  </div>
</main>
  </body>
</html>






