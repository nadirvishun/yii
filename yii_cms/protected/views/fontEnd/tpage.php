<!----- 最顶部圆角显示 ---------------->
    <div class="top_corner"></div>
    
    <!----------- 包含整个主体页面 --------------->
    <div id="main_container">  
     
        <!-------- 包含logo和nav --------------->
        <div id="header">
        
            <!----- logo begin ------>
            <div id="logo"><a href="<?php echo Yii::app()->homeUrl?>"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
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
        <div class="second_middle_banner">               
        	<img class="second_middle_img" alt="" src="./images/secondbanner.jpg"/>
       
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
    				<li <?php echo $tid==$PruductsTypeImgItem['id']?'class="spage_select"':'';?>><?php echo CHtml::link($PruductsTypeImgItem['pruducts_type_name'], array('spage','id'=>$PruductsTypeImgItem['id']))?></li>
   				 <?php endforeach;?>
   				 </ul>
        	</div>
        	
        	<!----- 右侧边栏 ----->
        	<div id="spage_content_right">
        		<!---- 面包圈 ---->
        		<div id="index_breadcrumbs">
				<!-- <p id="index_breadcrumb"><?php echo CHtml::link('Home',Yii::app()->homeUrl)?> >> <?php echo isset($dataPruductsType[$dataPruductsName->type_id])?CHtml::link($dataPruductsType[$dataPruductsName->type_id],array('spage','id'=>$dataPruductsName->type_id)):''?>>><?php echo CHtml::encode($dataPruductsName['pruducts_name'])?></p> -->
					<p id="index_breadcrumb"><?php echo CHtml::link('Home',Yii::app()->homeUrl)?> >> <?php echo isset($dataPruductsType[$tid])?CHtml::link($dataPruductsType[$tid],array('spage','id'=>$tid)):''?> >> <?php echo CHtml::encode($dataPruductsName['pruducts_name'])?></p>
					<ul id="nav_second"></ul>
				</div>
				<!--- 面包圈结束 --->
				<!------ 产品图片开始 ------>
				<div class="summary">
					<!-- 图片 -->
					<div class="gallary">
						<img class="picture" src="<?php echo Yii::app()->baseUrl ?>/upload/pruducts_img/<?php echo $dataPruductsImg?>"/>
					</div>
					<!-- 名称 -->
					<div class="property">
						<p>产品名称：<?php echo $dataPruductsName->pruducts_name?></p>
					</div>
					<div class="clear"></div>
				</div>
				<!------ 产品图片结束 ------>
				
				<!------ 产品详情开始 ------>
				<p class="detail_0">产品描述</p>
				<div class="detail">
					<?php echo $dataPruductsName->pruducts_content?>
				</div>
				<!------ 产品详情结束  ------>
				
				
        	</div>
        	<div class="clear"></div>
        </div>
        <!-----------------中间部分结束 ----------------->