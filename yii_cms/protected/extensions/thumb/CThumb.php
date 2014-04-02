<?php
class CThumb extends CApplicationComponent {
	public static function resizeImage($im, $maxwidth, $maxheight, $name,$filetype) {
		$pic_width = imagesx ( $im );
		$pic_height = imagesy ( $im );

		if (($maxwidth && $pic_width > $maxwidth) || ($maxheight && $pic_height > $maxheight)) {
			if ($maxwidth && $pic_width > $maxwidth) {
				$widthratio = $maxwidth / $pic_width;
				$resizewidth_tag = true;
			}
			
			if ($maxheight && $pic_height > $maxheight) {
				$heightratio = $maxheight / $pic_height;
				$resizeheight_tag = true;
			}
			
			if ($resizewidth_tag && $resizeheight_tag) {
				if ($widthratio < $heightratio)
					$ratio = $widthratio;
				else
					$ratio = $heightratio;
			}
			
			if ($resizewidth_tag && ! $resizeheight_tag)
				$ratio = $widthratio;
			if ($resizeheight_tag && ! $resizewidth_tag)
				$ratio = $heightratio;
			
			$newwidth = $pic_width * $ratio;
			$newheight = $pic_height * $ratio;
			
			if (function_exists ( "imagecopyresampled" )) {
				$newim = imagecreatetruecolor ( $newwidth, $newheight );
				
				imagealphablending($newim,false);//这里很重要,意思是不合并颜色,直接用$img图像颜色替换,包括透明色;
				imagesavealpha($newim,true);//这里很重要,意思是不要丢了$thumb图像的透明色;
				
				imagecopyresampled ( $newim, $im, 0, 0, 0, 0, $newwidth, $newheight, $pic_width, $pic_height );
			} else {
				$newim = imagecreate ( $newwidth, $newheight );
				imagealphablending($newim,false);//这里很重要,意思是不合并颜色,直接用$img图像颜色替换,包括透明色;
				imagesavealpha($newim,true);//这里很重要,意思是不要丢了$thumb图像的透明色;
				imagecopyresized ( $newim, $im, 0, 0, 0, 0, $newwidth, $newheight, $pic_width, $pic_height );
			}
			
			if($filetype=='png')
			{
				imagepng ( $newim, $name );
				imagedestroy ( $newim );
		
			}elseif($filetype=='gif') {
				
			
			imagegif ( $newim, $name );
			imagedestroy ( $newim );
			}else{
				imagejpeg ( $newim, $name );
				imagedestroy ( $newim );
			}
		} else {
			$name = $name . $filetype;
			imagejpeg ( $im, $name );
		}
	}
}
?>