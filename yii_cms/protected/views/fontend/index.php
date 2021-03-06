	<!------------ 最顶部圆角显示 ---------------->
    <div class="top_corner"></div>
    
    <!----------- 包含整个主体页面 --------------->
    <div id="main_container">  
     
        <!-------- 包含logo和nav --------------->
        <div id="header">
        
            <!----- logo begin ------>
            <div id="logo"><a href="<?php echo Yii::app()->homeUrl?>"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
            <!----- logo end ------->
            
			<!-- <a href="make-a-donation.html" class="make_donation"></a> -->
            
            <!------ nav begin ------>
            <div id="menu">
            	<ul> 
            	<?php if (!empty($dataNav)):?>
            		<?php $i=1;foreach ($dataNav as $navItem):?>
            			<li><a <?php echo $i==1?'class ="current"':''?>php href="<?php echo $navItem['nav_url']?>" title=""><?php echo $navItem['nav_title']?></a></li>
            			<?php $i++;?>
            		<?php endforeach;?>
              	<?php endif;?>
              	</ul> 
<!--                 <ul>                                                                                             -->
<!--                     <li><a class="current" href="index.html" title="">Home</a></li> -->
<!--                     <li><a href="about.html" title="">About Company</a></li> -->
<!--                     <li><a href="#" title="">Projects</a></li> -->
<!--                     <li><a href="#" title="">Clients</a></li> -->
<!--                     <li><a href="#" title="">Testimonials</a></li> -->
<!--                     <li><a href="contact.html" title="">Contact</a></li> -->
<!--                 </ul> -->
            </div>
            <!------ nav end --------->
		</div>

        
        <!--------------- banner begin -------------------->
        <!-------------- 红色框 begin---------------->
        <div class="middle_banner">               
        
        <!------- banner content begin ---------->
		<div class="featured_slider">
		
      	<!-- begin: sliding featured banner -->
		<div id="featured_border" class="jcarousel-container">
            <div id="featured_wrapper" class="jcarousel-clip">
               <ul id="featured_images" class="jcarousel-list">
              	 <?php if (!empty($dataBanner)):?>
               		<?php foreach ($dataBanner as $BannerItem):?>
               		 <li> <img src="<?php echo Yii::app()->baseUrl ?>/upload/banner_img/<?php echo $BannerItem['banner_img']?>" width="965" height="280" alt=""/></li>
               		<!-- <li><img src="<?php echo Yii::app()->basePath.'/../upload/banner_img/'.$BannerItem['banner_img']?>" width="965" height="280" alt=""/></li> -->
               		<?php endforeach;?>
              	<?php endif;?>
               		
<!--                   <li><img src="images/slider_photo.jpg" width="965" height="280" alt="" /></li> -->
<!--                   <li><img src="images/slider_photo2.jpg" width="965" height="280" alt="" /></li> -->
<!--                   <li><img src="images/slider_photo3.jpg" width="965" height="280" alt="" /></li> -->
<!--                   <li><img src="images/slider_photo2.jpg" width="965" height="280" alt="" /></li> -->
               </ul>
            </div>
            <div id="featured_positioner_desc" class="jcarousel-container">
               <div id="featured_wrapper_desc" class="jcarousel-clip">
                  <ul id="featured_desc" class="jcarousel-list">   
                  		<?php if(!empty($dataBanner)):?>
                  			<?php foreach ($dataBanner as $BannerItem):?>
                  			<!--  <li><div><P><?php echo $BannerItem['banner_title']?></P></div></li>-->
                  			<li><div><a href="<?php echo $BannerItem['banner_url']?>" target="_blank"><?php echo $BannerItem['banner_title']?></a></div></li>
                  			<?php endforeach;?>
                  		<?php endif;?>              
<!--                      <li> -->
<!--                         <div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div> -->
<!--                      </li>  -->
<!--                      <li> -->
<!--                         <div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div> -->
<!--                      </li>  -->
<!--                      <li> -->
<!--                         <div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div> -->
<!--                      </li>   -->
<!--                      <li> -->
<!--                         <div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div> -->
<!--                      </li>  -->
                  </ul>
               </div>
           </div>
            <ul id="featured_buttons" class="clear_fix">
            		<?php if(!empty($dataBanner)): ?>
            			<?php foreach ($dataBanner as $BannerItem):?>
            			<li><?php echo $BannerItem['id']?></li>
            			<?php endforeach;?>
            		<?php endif;?>
<!--                <li>1</li> -->
<!--                <li>2</li> -->
<!--                <li>3</li> -->
<!--                <li>4</li> -->
            </ul>
		</div>
		<!-- end: sliding featured banner -->
		</div>
		<!------- banner content end ----------->
        </div>
        <!--------------红色框 end------------------>
        <!--------------- banner end ---------------->
        
        <!--------------产品类型+滚动+联系方式----------------->
        <div class="center_content">  
        <!-- first begin -->
        	<?php if(!empty($dataPruductsTypeImg)):?>
        		<?php $i=1;foreach ($dataPruductsTypeImg as $PruductsTypeImgItem):?>
        			<div class="home_section_left">
        			<img src="images/icon<?php echo $i?>.gif" alt="" title="" class="home_section_icon" border="0">
        			<a href="<?php echo Yii::app()->homeUrl?>?r=fontend/spage&id=<?php echo $PruductsTypeImgItem['id']?>"><h2 class="home_title"><?php echo $PruductsTypeImgItem['pruducts_type_name']?></h2></a>
        			<div class="home_section_thumb">
        				<img src="<?php echo Yii::app()->baseUrl ?>/upload/pruducts_type_img/<?php echo $PruductsTypeImgItem['pruducts_type_img']?>"  width="265" height="77" alt="" title="" border="0">
        			</div>
        			
        			<P><?php echo $PruductsTypeImgItem['pruducts_type_content']?></P>
        			<!-- need change -->
        			<a href="" class="more"><img src="images/more.gif" alt="" title="" border="0"></a>
        			<div class="clear"></div>
        			</div>
        			<?php $i++;?>
        		<?php endforeach;?>
        	<?php endif;?>
<!--         <div class="home_section_left"> -->
<!--             <img src="images/icon1.gif" alt="" title="" class="home_section_icon" border="0"> -->
                            
<!--                 <h2 class="home_title">What we do</h2> -->
<!--                 <div class="home_subtitle">Consectetur adipisicing elit</div> -->
    
<!--                 <div class="home_section_thumb"> -->
<!--                 <img src="images/home_section_thumb1.jpg" alt="" title="" border="0"> -->
<!--                 </div> -->
<!--                 <p><span>Lorem ipsum dolor sit ame</span><br> -->
<!--                 Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.  -->
<!--                 <br> <br> -->
<!--                 <span>Lorem ipsum dolor sit ame</span><br> -->
<!--                 Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.  -->
<!--                 </p> -->
<!--                 <a href="" class="more"><img src="images/more.gif" alt="" title="" border="0"></a> -->
<!--         <div class="clear"></div> -->
<!--         </div> -->
        <!-- first end -->
        
        <!-- second begin -->
<!--         <div class="home_section_left"> -->
<!--             <img src="images/icon2.gif" alt="" title="" class="home_section_icon" border="0"> -->
                            
<!--                 <h2 class="home_title">Who we are</h2> -->
<!--                 <div class="home_subtitle">Tempor incididunt ut labore</div> -->
    
<!--                 <div class="home_section_thumb"> -->
<!--                 <img src="images/home_section_thumb2.jpg" alt="" title="" border="0"> -->
<!--                 </div> -->
<!--                 <p><span>Lorem ipsum dolor sit ame</span><br> -->
<!--                 Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.  -->
<!--                 <br> <br> -->
<!--                 <span>Lorem ipsum dolor sit ame</span><br> -->
<!--                 Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.  -->
<!--                 </p> -->
<!--                 <a href="" class="more"><img src="images/more.gif" alt="" title="" border="0"></a> -->
<!--         <div class="clear"></div> -->
<!--         </div> -->
        <!-- second end -->
        
        <!-- third begin -->
<!--         <div class="home_section_left"> -->
<!--             <img src="images/icon3.gif" alt="" title="" class="home_section_icon" border="0"> -->
                            
<!--                 <h2 class="home_title">Special services</h2> -->
<!--                 <div class="home_subtitle">Sed do eiusmod tempor</div> -->
    
<!--                 <div class="home_section_thumb"> -->
<!--                 <img src="images/home_section_thumb3.jpg" alt="" title="" border="0"> -->
<!--                 </div> -->
<!--                 <p><span>Lorem ipsum dolor sit ame</span><br> -->
<!--                 Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.  -->
<!--                 <br> <br> -->
<!--                 <span>Lorem ipsum dolor sit ame</span><br> -->
<!--                 Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.  -->
<!--                 </p> -->
<!--                 <a href="" class="more"><img src="images/more.gif" alt="" title="" border="0"></a> -->
<!--         <div class="clear"></div> -->
<!--         </div> -->
        <!-- third end -->
        
        <!-- 产品滚动 -->   

   
        <div class="left_block_wide">
            <h2>产品中心</h2>
            <div class="marquee"> 
    		 <ul>
    			<?php if(!empty($dataPruductsImg)):?>
    				<?php foreach ($dataPruductsImg as $PruductsImgItem):?>
    					<li><a href="<?php echo Yii::app()->homeUrl?>?r=fontend/tpage&id=<?php echo $PruductsImgItem['id']?>"><img src="<?php echo Yii::app()->baseUrl ?>/upload/pruducts_img/<?php echo $PruductsImgItem['pruducts_img']?>"/><em><?php echo $PruductsImgItem['pruducts_name']?></em></a></li>
    				<?php endforeach;?>
    			<?php endif;?>
<!--        			 <li><a href="http://www.update8.com/effects/"><img src="demo/01.jpg"/><em>jquery 特效</em></a></li> -->
<!--       			  <li><a href="http://www.update8.com/effects/"><img src="demo/02.jpg"/><em>滚动代码</em></a></li> -->
<!--       			  <li><a href="http://www.update8.com/effects/nav/"><img src="demo/01.jpg"/><em>导航菜单</em></a></li> -->
<!--       			  <li><a href="http://www.update8.com/mb"><img src="demo/02.jpg"/><em>兼职网站大全</em></a></li> -->
			 </ul>
		    </div>
                
<!--             <a href="#"><img src="images/p1.jpg" alt="" title="" border="0" class="projects" /></a> -->
<!--             <a href="#"><img src="images/p2.jpg" alt="" title="" border="0" class="projects" /></a> -->
<!--             <a href="#"><img src="images/p3.jpg" alt="" title="" border="0" class="projects" /></a> -->
        </div>
        <!-- 产品滚动end -->  
        
        <!-- 联系方式 -->  
        <div class="right_block">
        	<h2>Newsletter Sign up</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit consequat.
            </p>
            <form id="newsletter">
 	           <input type="text" name="" class="newsletter_input" />
    	        <input type="submit" name="" class="newsletter_submit" value="Sign up" />
            </form>
        </div>
        <!-- 联系方式end -->
      <div class="clear"></div>
        </div>
        <!-- 中间内容end -->
     
        
       