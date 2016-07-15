<?php
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
 <script type='text/javascript' src='swfobject.js'></script>
<link href='http://timcline.org/favicon.ico' rel='icon' type='image/x-icon'/>    
<title>Fireball Meteors</title> 
<style type="text/css" media="screen">

body
{
background-color:#000000;
}




.wrapper 
{
margin:0 auto;
max-width: 800px;
text-align: center;
height: 100%;
border: 1px solid green;
color: #000000;
background-color: #ffffff;
}
 
#footer 
{
clear: both;
background: #ffffff;
font-weight: 900;
color: Black;
padding: 0px 0px 0px 0px;
margin: 0px 0px 0px 0px;
text-align: center;
border: 1px solid green;
width: auto;
height: auto;
}

</style>

</head>                      
             
<body>


<div class="wrapper">

<?php include('link_include.php'); ?>
<br />
<h1> timcline.org</h1>
<h2>My best Fireball Meteor captures....</h2>
<p> This page is a collection of most of the bigger fireball meteors i have captured with my sky cams since the first one was launched in October 2010....</p>

<img src="http://timcline.org/images_timcline_org/meteors/20111207_020403_fireball_tim_cline.jpg" alt="meteor" width="640" height="480" />
<br />
<br />
<img src="http://timcline.org/images_timcline_org/meteors/meteors_ending_11_19_2011016_lenoids_fireball.jpeg" alt="meteor" width="640" height="480" />
<br />
<br />
<img src="http://timcline.org/images_timcline_org/meteors/meteor_tim_cline_20110912_053604.jpg" alt="meteor" width="640" height="480" />
<br />
<br />
<img src="http://timcline.org/images_timcline_org/meteors/fireball_meteor_7_17_2011.jpg" alt="meteor" width="640" height="660" />
<br />
<br />
<img src="http://timcline.org/images_timcline_org/meteors/fireball_4_12_2011_web.jpg" alt="meteor" width="640" height="640" />
<br />
<br />
<img src="http://timcline.org/images_timcline_org/meteors/fireball_meteor_3_28_2011_web.jpg" alt="meteor" width="640" height="640" />
<br />
<br />
<img src="http://timcline.org/images_timcline_org/meteors/fireball_3_11_2011_web_final.jpg" alt="meteor" width="640" height="640" />
<br />
<br />
<img src="http://timcline.org/images_timcline_org/meteors/12-13-2010-fireball-raw-web.jpg" alt="meteor" width="640" height="640" />
<br />
<br />
<img src="http://timcline.org/images_timcline_org/meteors/raw_stack_edited_web_fireball_meteor_10_30_2010_tim_cline.jpg" alt="meteor" width="640" height="640" />
<br />
<br />








<br />

<div id="flashbanner">This will be replaced by the SWF.</div>

<script type="text/javascript">
    var so = new SWFObject('player.swf','flashContent','640','684','9');
    so.addParam('allowfullscreen','false');
    so.addParam('allowscriptaccess','always');
    so.addParam('bgcolor','#FFFFFF');
    so.addParam('flashvars','file=meteors.xml&playlist=bottom&skin=/copper/copper.xml');
    so.write('flashbanner');
</script>



<br />


<div id="footer">
<?php include('copyright.php'); ?>
</div>



</div>                                                                                                    
</body>
</html>
