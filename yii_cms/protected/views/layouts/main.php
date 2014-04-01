<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- head begin -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yii CMS</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/style.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/sstyle.css">

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.core.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.superfish.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.jcarousel.pack.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.scripts.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.pruducts.js"></script>




<style>
/* a{ font-size:13px; color:#333333; text-decoration:none;} */
/* a:hover{color:red; text-decoration:none;} */
/* img{ border:none;} */

/* .marquee {width:600px;height:170px;overflow:hidden;} */
/* .marquee li{ display:inline; float:left; margin-right:5px;margin-top:5px;} */
/* .marquee li a{ width:200px; height:170px; display:block; float:left; text-align:center; font-size:14px;} */
/* .marquee li a:hove{ text-decoration:none;} */
/* .marquee li img {width:170px; height:140px;} */
/* .marquee li em{font-style: normal; height:24px; line-height:24px; display:block; margin-top:1px;} */
a{ font-size:13px; color:#333333; text-decoration:none;}
a:hover{color:red; text-decoration:underline;}
img{ border:none;}

.marquee {width:610px;height:170px;overflow:hidden; margin-top:0px;}
.marquee li{ display:inline; float:left; margin-right:12px;margin-top:10px;}
.marquee li a{ width:210px; height:170px; display:block; float:left; text-align:center; font-size:14px;}
.marquee li a:hove{ text-decoration:none;}
.marquee li img {width:200px; height:130px;}
.marquee li em{font-style: normal; height:24px; line-height:24px; display:block; margin-top:8px;}
</style>
</head> 
<!--head end  -->
<!-- body begin -->
<body>
  <script type="text/javascript">
 	
	jQuery(document).ready(function(){
	jQuery('.marquee').kxbdMarquee({
			direction:'left',
			eventA:'mouseenter',
			eventB:'mouseleave'
		});
	});
  </script>   
<div id="wrap">


	<?php echo $content; ?>

   
 <!-- footer begin -->
        <div class="footer">
        	<div class="copyright"><a href="http://csstemplatesmarket.com/" target="_blank">Free CSS Templates</a> | <a href="http://csstemplatesmarket.com/" target="_blank">by CssTemplatesMarket</a></div>
        
        	<div class="footer_links">
                <a class="current" href="index.html" title="">Home</a>
                <a href="#" title="">About Company</a>
                <a href="#" title="">Projects</a>
                <a href="#" title="">Clients</a>
                <a href="#" title="">Testimonials</a>
                <a href="contact.html" title="">Contact</a>            
            </div>
        </div>
       <!-- footer end -->
     
    </div>
	<!-- 整个主体页面end -->
</div>
</body>
<!-- body end -->
</html>
