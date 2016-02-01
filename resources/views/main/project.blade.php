@extends('main')
@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="page-header">
					<h1>{!! $model->url !!}<br>
					<img src="/public/img/<?=$model->imgpath;?>" class='post-image' >
					<br><small>{!! $model->tech !!}</small></h1>
				</div>
				<p>{!! $model->description !!}</p>
				<p>{!! $model->github !!}</p>
			</div>
		</div>
</div>
@stop