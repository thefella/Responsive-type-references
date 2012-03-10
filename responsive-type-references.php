<?php
// Get user fonts or default to Georgia
$fonts = ($_GET['font']) ? htmlspecialchars($_GET['font']) : 'Georgia';
$fonts = explode(",", $fonts);
$count = count($fonts);

// Define font sizes
$normal = array('12','14','16');
$heading = array('16','18','21','24','36','48');
$small = array('10','11','12');

// Work out the width
$width = round(100 / $count, 4);
?>
<!doctype html>

<!-- 
320 and Up boilerplate extension
Author: Andy Clarke (http://about.me/malarkey)
Author: Keith Clark (http://twitter.com/keithclarkcouk)
URL: http://stuffandnonsense.co.uk/projects/320andup/
License: http://creativecommons.org/licenses/MIT/
PHP'd: Conor MacNeill (http://twitter.com/thefella)
-->

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title>Type readability reference | Fashionably Flexible Responsive Web Design</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
html,body{margin:0;padding:0;}
h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,cite,code,del,dfn,em,img,q,s,samp,small,strike,strong,sub,sup,tt,var,dd,dl,dt,li,ol,ul,fieldset,form,label,legend,button,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;font-weight:normal;font-style:normal;font-size:100%;line-height:1;font-family:inherit;}
article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block;}
audio[controls],canvas,video{display:inline-block;*display:inline;*zoom:1;}
html{overflow-y:scroll;background:#fff;font-size:62.5%;}
body { padding : 22px; font-size:16px;font-size:1.6rem;font-family:Georgia,"Times New Roman",Times,serif;color:#282828;background-color:transparent; }
h2 { margin-bottom : .75em; font-weight : bold; font-size : 36px; }
div { margin-bottom : 1.5em; padding-bottom : 1.5em; border-bottom : 1px solid #ccc;
}
p { margin-bottom : 22px; line-height : 1.5; }
h3 { margin-bottom : 22px; font-weight : bold; }
p.caption { display : inline-block; padding : 6px; font-size : 12px; text-transform : uppercase; background-color : #ccc; }
<?php if ($count > 1) : ?>article div, article h2 { margin-left : 10%; margin-right : 10%; } <?php endif; ?>
article { float : left; width : <?=$width?>%; overflow : hidden; }
span.font-name { display : block; font-size : 14px; color : #ccc; padding-bottom : 0.25em; }
</style>
</head>

<body>
<?php foreach ($fonts as $font) : ?>
<article id="<?=strtolower($font)?>" style="font-family:'<?=$font?>';">

<h2><span class="font-name"><?=$font?></span> Type readability reference</h2>
<?php foreach ($normal as $size) : ?>
<div><p style="font-size:<?=$size?>px">When a new medium borrows from an existing one, some of what it borrows makes sense, but much of the borrowing is thoughtless, &#8220;ritual&#8221;, and often constrains the new medium. Over time, the new medium develops its own conventions, throwing off existing conventions that don&#8217;t make sense.</p><p class="caption"><?=$size?>px</p></div>
<?php endforeach; ?>

<h2><span class="font-name"><?=$font?></span> Heading word wrap reference</h2>
<?php foreach ($heading as $size) : ?>
<div><h3 style="font-size:<?=$size?>px">When a new medium borrows from an existing one</h3><p class="caption"><?=$size?>px</p></div>
<?php endforeach; ?>

<h2><span class="font-name"><?=$font?></span> Small type size reference</h2>
<?php foreach ($normal as $size) : ?>
<div><p style="font-size:<?=$size?>px">Small type size reference</p><p class="caption"><?=$size?>px</p></div>
<?php endforeach; ?>

</article>
<?php endforeach; ?>
</body>
</html>