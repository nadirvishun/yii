<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- head begin -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Acalia Development | Free CSS Template | Csstemplatesmarket.com</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/style.css" media="screen" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.core.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.superfish.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.scripts.js"></script>
</head> 
<!--head end  -->
<!-- body begin -->
<body>
<div id="wrap">
	<!------------ 最顶部圆角显示 ---------------->
    <div class="top_corner"></div>
    
    <!----------- 包含整个主体页面 --------------->
    <div id="main_container">  
     
        <!-------- 包含logo和nav --------------->
        <div id="header">
        
            <!----- logo begin ------>
            <div id="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
            <!----- logo end ------->
            
			<!-- <a href="make-a-donation.html" class="make_donation"></a> -->
            
            <!------ nav begin ------>
            <div id="menu">
                <ul>                                                                                            
                    <li><a class="current" href="index.html" title="">Home</a></li>
                    <li><a href="about.html" title="">About Company</a></li>
                    <li><a href="#" title="">Projects</a></li>
                    <li><a href="#" title="">Clients</a></li>
                    <li><a href="#" title="">Testimonials</a></li>
                    <li><a href="contact.html" title="">Contact</a></li>
                </ul>
            </div>
            <!------ nav end --------->
		</div>

	<?php echo $content; ?>

   <div class="clear"></div>
        </div>
        <!-- 中间内容end -->
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
