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
	public static function getPageUrl($url){
		switch ($url) {
			case '/':
				echo "<a href='".url('/')."'>Главная</a>";
				break;
			case '/portfolio':
				echo "<a href='".url('/portfolio')."'>Портфолио</a>";
				break;
			case '/about':
				echo "<a href='".url('/about')."'>О нас</a>";
				break;
			case '/contact':
				echo "<a href='".url('/contact')."'>Контакты</a>";
				break;
			case '/blog':
				echo "<a href='".url('/blog')."'>Блог</a>";
				break;
			case '/login':
				echo "<a href='".url('/auth/login')."'>Логин</a>";
				break;
			default:
				echo "err";
				break;
		}
	}
}