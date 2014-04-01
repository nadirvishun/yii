<li id="test_li">

<span>
<?php $image= CHtml::image( Yii::app()->baseUrl.'/upload/pruducts_img/'.$data->pruducts_img,'',$htmlOptions= array('target'=>'_blank','style'=>'color:#f67600;width:200px;height:130px;text-decoration:none;font-weight:bold;')) ;
echo CHtml::link($image,'#')?> 
<br/>
<?php echo $data->pruducts_name;?>
</span>
</li>