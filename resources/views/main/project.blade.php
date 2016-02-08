@extends('main')
@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<!--<img src="/public/img/<?//=$data->imgpath;?>" width='100' height='100'>-->
						<?=TemplateHelper::getImageForCurrentItem($model->id,$images);?>
						<div class="caption" id="url">
							<h3>{{ $model->id }}</h3>
							<h3>{{ $model->url }}</h3>
							<p>{{  $model->name }}</p>
							<p>{{  $model->description }}</p>
							<p>{{  $model->additional_description }}</p>
							<!--<p>
								<a href="/project/<?=$model->id;?>" role="button" class="btn btn-primary">Подробнее</a>
							</p>
							<p>
								<a href="/admin/deleteitem/<?=$model->id;?>" role="button" class="btn btn-primary">Удалить</a>
							</p>
							<p>
								<a href="/admin/updateitem/<?=$model->id;?>" role="button" class="btn btn-primary">изменить</a>
							</p>-->
						</div>
					</div>
				</div>
				
			</div>
		</div>
</div>
@stop