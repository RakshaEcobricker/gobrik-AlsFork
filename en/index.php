<!DOCTYPE html>
<html>
<head>
<?php $dist='42';?>
<?php $lang='en';?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >

<?php echo $lang; ?>/<?php echo $name; ?>

<!-- Meta tags for page display and search engine listing
AND UNIQUE to HTML Pages-->

<title>GoBrik</title>
<meta name="keywords" content="gobrik, ecobrick app, eco, brick, eco brick, ecobrick, eco-brick, eco, bricks, eco brick, ecobricks, eco-bricks, brik, briks, plastic, plastic management, carbon sequestration,  plastic solved, drop off, exchange, marketplace, plastic sequestration, aes plastic, plastic offsetting, ecological accounting, plastic accounting">
<meta name="description" content="Manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions.">
<meta name="author" content="Global Ecobrick Alliance">

<!-- Facebook Open Graph Tags for social sharing-->

<meta property="og:url"           content="https://www.gobrik.com/<?php echo $lang; ?>">
<meta property="og:type"          content="app">
<meta property="og:title"         content="GoBrik">
<meta property="og:description"   content="Manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions." >
<meta property="og:image"         content="https://www.gobrik.com/images/social-banner-1200px.png" >
<meta property="fb:app_id"  content="1781710898523821" >
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="1000" />
<meta property="og:image:alt"     content="A metaphorical road winding into the distance with various ecobrick and earth constructions along side it and the GoBrik logo floating above"/>
<meta property="og:locale" content="en_GB, id_ID, es_ES" />

<link rel="preload" as="image" href="https://gobrik.com/svgs/Happy-turtle-dolphin-opti2.svg">


<!-- sets page meta tags:  be sure to add page name-->
<?php require_once ("header.php");?>


  
<body id="full-page">
	<div id="loading-box">
				

		<div id="header" class="top-menu">
			<a href="/go.php#home"><img src="../svgs/gobrik-logo-3.svg?v1.1" width="185" height=""></a>

		</div> 
		
		<div id="lang-button">
			<div class="topnav-lang" id="myTopnav-lang">
				<div class="dropdown-lang">
				<button class="dropbtn-lang"><img src="../svgs/language-button2.svg" height="30px"></button>
				<div class="dropdown-content-language">
				   <a href='javascript:Localize.setLanguage("en")'>🇬🇧&nbsp;ENG</a>
					<a href='javascript:Localize.setLanguage("id")'>🇮🇩&nbsp;IND</a>
					<a href='javascript:Localize.setLanguage("es")'>🇪🇸&nbsp;ESP</a>
			
					<a href="javascript:void(0);" style="font-size:15px;" class="icon-lang" onclick="languageMenu()"></a>	
				</div>
			</div> 
		</div>
		</div>

<!--
		<div class="offline-image"><img src="svgs/earth-service4.svg" width="100%" height="96%"></div>
		<div class="offline-header">Happy New Year!</div> 
		<div class="offline-text">GoBrik is Offline for a Bit!</div>
		<div class="offline-subtext">We're paying our bill and... we're getting ready for some major revamps to the app in 2023!  We should be back online in 12hrs.</div>	
	</div>
</div>-->


		
	





<div id="landing-content">
    
    <!--<br><div class="top-graphic"><img src="https://gobrik.com/svgs/Happy-turtle-dolphin-opti2.svg" width="450px"></div>-->

    <br><br><div class="top-graphic"><img src="../svgs/dolphin-top-optimized.svg" width="500px"></div>

        <div class="big-header">Together we can keep our plastic out of the biosphere.</div>

        <div class="welcome-text">
        Ecobricking is a great way to take personal responsibility for our plastic and transition from it to build our greenest visions.
        </div>
        <!--<h3<b>Selfie Frame</b> <a href="https://twb.nz/ecobrick4oceans" target="_blank">My Ecobrick For the Oceans</a></h3><br><br>-->
        
        <a href="go.php#home-login/" class="kn-link kn-link-1 kn-link-page kn-button" style="
        background-color: rgba(252, 250, 250, 0.8);
        width: 200px;
        border-width: 4px;
        padding: 19px;
        border-radius: 10px;    
        font: Mulish, sans-serif;"><span>Sign in</span></a><br>
         <h4>No account? Join GoBrik free and fast!</h4><br>
        <a href="go.php#signup" class="kn-button is-primary" style="width: 200px; box-shadow: 0px 0px 8px white;"><span>Sign up</span></a>
</div>
<!--
        <div class="social-buttons-box">
               
            <a href="#signup" class="social-button" id="new-account" onclick="topFunction()" > <span>Sign up to GoBrik</span></a>
            <a href="#home-login/" class="social-button" id="gobrik-connect"  onclick="topFunction()"> <span> GoBrik Users Login</span></a>
        
               <a href="#home/auth/facebook" class="social-button" id="facebook-connect"  onclick="topFunction()"> <span>Login with Facebook</span></a>-->

            <!--<a href="https://www.gobrik.com/#home/auth/google" class="social-button" id="google-connect"  onclick="topFunction()"> <span>Login with Google</span></a>

              <img src="https://ecobricks.org/webp/world-ocean-day-2022-600px.webp" style="width: 400px;"></div>
            <br><br>
        </div>-->
      
        <br><br><br><br><div class="tree-coins"><img src="../images/mangotreebluesky400px.png" style="width: 400px;"></div>

        <div class="tree-text">
            <p>Together we're securing plastic out of the biosphere to make building blocks, brikcoins and green spaces.</p>
            <h6>GoBrik provides ecobrickers and their communities with the tools to manage their ecobricking and to quantify its ecological value.</h6><br>
            <h4><img src="../svgs/aes-brk.svg" style="width: 200px;"></h4>
           <!-- <h6>Learn some more about<br><a href="#ecobricks">Ecobricks</a>, <a href="#gea">the GEA</a>, <a href="#brikcoins">Brikcoins</a> and <a href="#aes">AES Plastic Offsets</a></h6>-->
        </div>
    </div>



</div>

</div>


<!-- sets footer of page:  be sure to add page name-->
<?php require_once ("footer.php");?>

<script>
(function() {
      var linksOnPage = document.querySelectorAll("a");
      var link = "";
      for (var i = 0; i < linksOnPage.length; i++) {
        link = linksOnPage[i];
        link.setAttribute("onclick", "window.scrollTo(0, 0)");
  
      }
    })();
    </script>

    
</body>
</html>