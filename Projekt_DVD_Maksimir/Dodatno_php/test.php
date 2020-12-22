<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>DVD_Maksimir_Kontakt</title>
		<!--meta_elements-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">  
		<meta name="description" content="Stranica ima svrhu prikazivanja rada Dobrovoljnog Vatrogasnog Drustva Maksimir">         
		<meta name="keywords" content="vatrogasci, DVD, Maksimir, vatrogasno, dobrovoljno, društvo, vatrogasna">            
		<meta name="author" content="Damir Eri">                             
		<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"> 
		
		<!--favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="Images/favicon_io/favicon-16x16.png">                                             
		
		<!--Style_css-->
        <link rel="stylesheet" href="Style.css">
        <!--Za potrebe dodatnog zadatka morali smo napraviti interni CSS kako bi imali uređen prikaz u pregledniku otvaranjem "test.php" -->
		<Style>
            body, html {
                background-color: rgb(160, 161, 172);
                font-family: 'Oswald', sans-serif;
                margin: 0;
                font-size: 16px;
            }
            header {
                display: block;
                width: 100%;
            }
            .page-image {
                background-image: url("Images/naslovna_DVD_Maksimir.png");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                height: 380px;
            }
            ul {
                list-style-type: none;
                font-weight: bold;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: rgb(209, 30, 30);
            }
            li {
                float: left;
            }
            li a {
                display: block;
                color: rgb(3, 3, 14);
                text-align: center; 
                padding: 16px 16px;
                text-decoration: none;
            }
            li a:hover {
                background-color: rgb(90, 3, 3);
            }
            h1,h2, {
                margin: 0.5em;
                font-size: 2em;
            }
            h2 {
                font-size: 1.5em;
                color: #27318b;
            }
            h4{
                margin: 1em;
                line-height: 1.4em;
                letter-spacing: 1px;
                color: rgb(160, 20, 20);
            }
            main a {
                color: #27318b;
                text-decoration: none;
            }
            main a:hover {
                color: #8b3727;
                text-decoration: underline;
            }
            p {
                margin: 1em;
                line-height: 1.4em;
                letter-spacing: 1px;
            }
            hr {
                margin: 1em;
                border: 2px solid #27318b;
                clear: both;
            }
            figure {
                padding: 0.5em;
                margin: 0 1em 0.5em 1em;
                float: left;
                width: 15%;
                border: 1px solid black;
            }
            figcaption {
                font-size: 90%;
            }
            img {
                width: 100%;
            }
            @media screen and (max-width: 400px) {
                figure {
                    width: 90%;
                    margin: 1em;}
                
                .page-image {
                    background-image: url("Images/naslovna_DVD_Maksimir.png");
                    height: 100px;}
                
                #footer_p{
                    background-color: rgb(44, 43, 43);
                    padding: 0.1em;
                    clear: both;
                    color: rgb(134, 48, 48);
                    text-align: center;
                    margin: 0.5em;}
                .news img {
                    width: 95%;
                    padding: 0.5em;
                    margin: 0 1em 0.5em 0.5em;
                }
                .news time {
                    margin: 0 0 0 1em;
                }
                #news_gallery figure {
                    padding: 0.5em;
                    margin: 0 1em 0.5em 1em;
                    float: left;
                    width: 90%;
                    border: 1px solid black;
                }
                #news_gallery figcaption {
                    font-size: 90%;
                    text-align: center;
                }
                #gallery figure {
                    padding: 0.5em;
                    margin: 0 1em 0.5em 1em;
                    float: left;
                    width: 40%;
                    border: 1px solid black;
                }
                #gallery figcaption {
                    font-size: 90%;
                    height: 70px;
                    text-align: center;
                }
            }
            .Novosti img {
                float: left;
                width: 20%;
                padding: 0.5em;
                margin: 0 1em 0.5em 0.5em;
            }
            .Novosti time {
                float: left;
                margin: 0 0 0 1em;
            }
            #kontakt {
                margin: 1em
            }
            label {
                display: block;
            }
            input[type=text], input[type=email], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 5px;
                margin-bottom: 16px;
                font-family: 'Oswald', sans-serif;
                font-size: 95%;
            }
            input[type=pošalji] {
                text-align: center;
                display: block;
                background-color: #0e960e;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 25%;
            }
            input[type=pošalji]:hover {
                text-align: center;
                background-color: #08105c;
            }
            iframe{
                border-style: dotted;
                border-color: blue;
            }
            #galerija figure {
                background-color: rgb(83, 124, 235);
                text-decoration-color: white;
                padding: 0.5em;
                margin: 0 1em 0.5em 1em;
                float: left;
                width: 22%;
                border: 1px solid rgb(185, 5, 5);
            }
            #galerija figcaption {
                font-size: 90%;
                height: 50px;
                text-align: center;
            }
            footer {
                background-color: rgb(209, 30, 30);
                padding: 0.1em;
                clear: both;
            }
            footer p {
                color: rgb(15, 15, 15);
                font-weight: bold;
                text-align: center;
                margin: 0.5em;
            }
            #drustvene_mreze{
                height: 100%;
                position: absolute;
            }
            .d_mreze{
                text-align: center;
                font-weight: bold ;
                color: rgb(146, 5, 5);
                padding-bottom:20px;
                padding: 15px 15px 20px 15px;
            }   
        </Style>
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="DVD_Maksimir_Kontakt">
		<meta itemprop="description" content="Stranica ima svrhu prikazivanja rada Dobrovoljnog Vatrogasnog Drustva Maksimir">
		<meta itemprop="image" content="Your URL">

		<!-- Open Graph data -->
		<meta property="og:title" content="DVD_Maksimir_Kontakt">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Stranica ima svrhu prikazivanja rada Dobrovoljnog Vatrogasnog Drustva Maksimir">
		<meta property="article:tag" content="vatrogasci, DVD, Maksimir, vatrogasno, dobrovoljno, društvo, vatrogasna">

		<!-- Twitter Card data -->
		<meta name="twitter:title" content="DVD_Maksimir_Kontakt">
		<meta name="twitter:description" content="Stranica ima svrhu prikazivanja rada Dobrovoljnog Vatrogasnog Drustva Maksimir">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
	</head>
<body>
	<header>
		<div class="page-image"></div>
		<nav>
			<ul>
				<li><a href="Naslovna.html">Naslovna</a></li>
				<li><a href="Novosti.html">Novosti</a></li>
				<li><a href="O_nama.html">O nama</a></li>
				<li><a href="Galerija.html">Galerija</a></li>
				<li><a href="Kontakt.html">Kontakt</a></li>
			</ul>
		</nav>
	</header>
	<main>
        <div id="kontakt">
			<h1>Lokacija:</h1>
			<iframe style="border: 4px solid rgba(59, 240, 98, 0.651);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.732003685369!2d16.000656815569243!3d45.816625379106696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d7ae014b3c11%3A0xa6ee23d6b46b5a56!2sDOBROVOLJNO%20VATROGASNO%20DRU%C5%A0TVO%20MAKSIMIR!5e0!3m2!1shr!2shr!4v1607881309122!5m2!1shr!2shr" style="float: left;" width="40%" height="400" frameborder="0"  allowfullscreen></iframe>
			<h1>Kontaktirajte nas:</h1>
            <!--prvo je potrebno promjeniti atrubut "action" unutar elementa "form" kako bi mogli obraditi podatke -->
            <!--pozivamo "test.php" koji smo prethodno spremili u B:/xampp/htdocs-->
            <?php
                if (isset($_POST ['firstname'])) { 
                    print '<p>Vaše ime je: ' . $_POST ['firstname'] .'</p>';
                    print '<p>Vaše prezime je: ' . $_POST ['lastname'] .'</p>';
                    print '<p>Vaša email adresa je: <a href "">' . $_POST ['email'] .'<a/></p>';
                    print '<p>Vaša država je: ' . $_POST ['country'] .'</p>';
                    $poruka ='Ime i Prezime:'. $_POST ['firstname'] .' '. $_POST ['lastname'];
                    $poruka .='Vaša email adresa je: <a href "mailto: ' . $_POST ['email'] . '">' . $_POST ['email'] . '<a/>';
                    $poruka .='Vaša država je: ' . $_POST ['country'] .'</p>';
                    mail($_POST ['email'],'Email forma',$poruka);
                    print '<p>Vaš email je uspješno poslan!</p>';
                }
            ?>
            
            <form style="border: 4px solid black; width: 40%; float: left;"  action="test.php" id="contact_form"name="contact_form" method="POST">
				<label for="fname">Ime *</label>
				<input type="text" id="fname" name="firstname" placeholder="Upišite ime..." required>

				<label for="lname">Prezime *</label>
				<input type="text" id="lname" name="lastname" placeholder="Upišite prezime..." required>
				
				<label for="lname">Vaš E-mail *</label>
				<input type="email" id="email" name="email" placeholder="Upišite e-mail.." required>

				<label for="zemlja">Zemlja</label>
				<select id="country" name="country">
				  <option value="">Molimo vas odaberite</option>
				  <option value="Bosna i Hercegovina">Bosna i Hercegovina</option>
				  <option value="Hrvatska" selected>Hrvatska</option>
				  <option value="Slovenija">Slovenija</option>
                  <option value="Mađarska">Mađarska</option>
                  <option value="Italija">Italija</option>
                  <option value="Njemačka">Njemačka</option>
                  <option value="Austrija">Austrija</option>
				</select>

				<label for="subject">Vaša poruka</label>
				<textarea id="subject" name="subject" placeholder="Napišite poruku" style="height:200px"></textarea>

				<input type="submit" value="Pošalji"><br><br>
			</form>
			<br><br>
		</div>
		<hr>
		<p class="d_mreze">Društvene Mreže:<br>
			<a href="https://www.youtube.com/" target="_blank"><img src="Images/youtube.PNG" alt="youtube" title="youtube" style="width:24px; margin-top:0.4em"></a>
			<a href="https://www.instagram.com/" target="_blank"><img src="Images/instagram_logo.jpg" alt="instagram" title="instagram" style="width:24px; margin-top:0.4em"></a>
			<a href="https://www.facebook.com/dvdmaksimir.maksimir" target="_blank"><img src="Images/facebook_img.png" alt="facebook" title="facebook" style="width:24px; margin-top:0.4em"></a>
		</p>
	</main>
	<footer>
		<p class="footer_p">Copyright &copy; 2020. Damir Eri. <a href="https://github.com/cico7/Projektni_zadatak_Web-Aplikacije"><img style="width:20px;" src="Images/github.png" alt="Github" title="Github"></a></p>
	</footer>	      
</body>
</html>