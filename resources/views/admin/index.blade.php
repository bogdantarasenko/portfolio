@extends('admin.app')
@section('content')
<!--
	<form class="add-project-form" action="/admin/addprj" method="post" enctype="multipart/form-data" >
	<input type="text" class="textfield url" name="url" placeholder="url">
	<textarea class="textfield description" name="description" placeholder="description"></textarea>
	<input type="text" class="textfield technologies" name="technologies" placeholder="technologies">
	<input type="text" class="textfield technologies" name="github" placeholder="github url">
	<button class="submit-download"><input type="file" name="image"></button>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<input type="submit" class="submit"  value="добавить" >

	</form>
-->
<a href="<?=url('/admin/portfolio');?>">Редактировать портфолио</a>
<a href="<?=url('/admin/about');?>">Редактировать "о нас"</a>
<a href="<?=url('/admin/blog');?>">Редактировать блог</a>
<a href="<?=url('/admin/contact');?>">Редактировать Контакты</a>

@stop