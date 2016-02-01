@extends('main')
@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h2>Привет, меня зовут Богдан<br>
					<small>И я начинающий веб разработчик.Я создал этот сайт для того
					чтобы разместить на нем свои проекты которые я разрабатывал когда 
					изучал какуюто новую технологию или просто ради забавы.
					</small></h2>
				</div>
			</div>
		@if(count($model)>0)
			@foreach($model as $models)
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="/public/img/<?=$models->imgpath;?>">
					<div class="caption" id="url">
						<h3>{{ $models->url }}</h3>
						<p>{{ $models->description }}</p>
						<p>{{ $models->tech }}</p>
						<p>
							<a href="/project/<?=$models->id;?>" role="button" class="btn btn-primary">Подробнее</a>
						</p>
					</div>
				</div>
			</div>
			@endforeach
		@endif

		</div>
	</div>
</div>
@stop