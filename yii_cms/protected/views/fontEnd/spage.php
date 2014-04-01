<!------------ 最顶部圆角显示 ---------------->
    <div class="top_corner"></div>
    
    <!----------- 包含整个主体页面 --------------->
    <div id="main_container">  
     
        <!-------- 包含logo和nav --------------->
        <div id="header">
        
            <!----- logo begin ------>
            <div id="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
            <!----- logo end ------->
            
			
            
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

                  </ul>
               </div>
           </div>
            <ul id="featured_buttons" class="clear_fix">
            		<?php if(!empty($dataBanner)): ?>
            			<?php foreach ($dataBanner as $BannerItem):?>
            			<li><?php echo $BannerItem['id']?></li>
            			<?php endforeach;?>
            		<?php endif;?>

            </ul>
		</div>
		<!-- end: sliding featured banner -->
		</div>
		<!------- banner content end ----------->
        </div>
        <!--------------红色框 end------------------>
        <!--------------- banner end ---------------->
        
        <!---------------- 中间部分开始 ---------------->
        <div class="center_content">
        	<!----- 左侧边栏 -----> 
        	<div id="spage_content_left">
        		<ul id="spage_menu">
    			<?php $i=0; foreach ($dataPruductsTypeImg as $PruductsTypeImgItem):?>
    			<?php if ($i!=0):?>
    				<li class="spage_line"></li>
    			<?php endif;?>
    				<?php  $i=$i+1;?>
    				<li <?php echo $id==$PruductsTypeImgItem['id']?'class="spage_select"':'';?>><?php echo CHtml::link($PruductsTypeImgItem['pruducts_type_name'], array('spage','id'=>$PruductsTypeImgItem['id']))?></li>
   				 <?php endforeach;?>
   				 </ul>
        	</div>
        	
        	<!----- 右侧边栏 ----->
        	<div id="spage_content_right">
        		<!---- 面包圈 ---->
        		<div id="index_breadcrumbs">
					<p id="index_breadcrumb"><?php echo CHtml::link('Home',Yii::app()->homeUrl)?> >> <?php echo isset($dataPruductsType[$id])?$dataPruductsType[$id]:''?></p>
					<ul id="nav_second"></ul>
				</div>
				<!--- 面包圈结束 --->
				
        		<ul>
        			<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataSpage,
						'itemView'=>'_slistview',
		   				'summaryText'=>'第{start}-第{end}条记录，总记录：{count}', //summary text
						'emptyText'=>'未找到相关资料',
//		   				 'template'=>',, {items} and {pager}.', //template
  						'pagerCssClass'=>'page-number',//contain class
						'pager'=>array(
//	    				'cssFile'=>false,//disable all css property
			  		    'header'=>'',//text before it
			  		    'firstPageLabel'=>'第一页',//overwrite firstPage lable
					    'lastPageLabel'=>'最后一页',//overwrite lastPage lable
			 		    'nextPageLabel'=>'下一页',//overwrite nextPage lable
			 		    'prevPageLabel'=>'上一页',//overwrite prePage lable
		   			 )
					)); ?>
        		</ul>
        	</div>
        	<div class="clear"></div>
        </div>
        <!-----------------中间部分结束 ----------------->