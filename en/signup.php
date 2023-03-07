<!DOCTYPE html>
<html>
<head>
<?php $lang='en';?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >

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

<?php require_once ("header.php");?>
 
<style>


/* Table of Contents Menu (background) */
.knack-overlay {

height: 100% !important;
width: 100%;
position: fixed;
z-index: 25;
top: 0;
left: 0;
overflow-y: scroll;
transition: 0.5s;
display: flex;
/*
overflow-x: hidden;  Disable horizontal scroll */
}

#kn-app-header {
z-index: 20;
position: relative;
background: var(--top-header) !important;
border-bottom: gray .5px solid;}

</style>

</head>

<body id="full-page" class="accessibility-plugin-ac">


<div id="header" class="top-menu">
    <div><button type="button" class="main-menu-button" onclick="openMenu()" aria-label="Login to Gobrik"></button></div>
    <div><button type="button" class="gobrik-logo" onclick="closeKnack()" aria-label="Return to Home page"></button></div>
    <div><button type="button" class="top-settings-button" onclick="openSettings()" aria-label="Click to open settings page"></button></div>
</div>



    <!--<div id="loading-box">
      <div id="header" class="top-menu">
			    <a href="/#home"><img src="svgs/gobrik-logo-3.svg?v1.1" width="185" height=""></a>
      </div>-->

        <script type="text/javascript">app_id="5b8c28c2a1152679c209ce0c";distribution_key="dist_53"; async</script>
        <script type="text/javascript" src="https://loader.knack.com/5b8c28c2a1152679c209ce0c/dist_53/knack.js" async></script><div id="knack-dist_53"><div class="loader"></div></div>
        

  </div>
</div>

</div> <!--landing page close-->

<?php require_once ("settings-curtain.php");?>

<?php require_once ("menu-curtain.php");?>
         
</body>

</html>