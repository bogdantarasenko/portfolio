<?php

namespace App;

class TemplateHelper{
	public static function getImageForCurrentItem($id,$images_arr){
		
		foreach ($images_arr as $key => $value) {
			
			if($key == $id){
				
				foreach ($value as $image) {
					echo "<img src='/public/img/".$image."' width='100' height='100'>";
				}
				
			}
			
		}
	}
}