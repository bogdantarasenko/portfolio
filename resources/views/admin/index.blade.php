@extends('admin.app')
@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<a href="<?=url('/admin/portfolio');?>">Добавить в портфолио</a><br>
			<a href="<?=url('/admin/about');?>">Редактировать "о нас"</a><br>
			<a href="<?=url('/admin/blog');?>">Редактировать блог</a><br>
			<a href="<?=url('/admin/contact');?>">Редактировать Контакты</a><br>
		</div>
		<div class="col-md-9">
			@if(count($portfolio_data)>0)
				@foreach($portfolio_data as $data)
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<!--<img src="/public/img/<?=$data->imgpath;?>" width='100' height='100'>-->
						<?=TemplateHelper::getImageForCurrentItem($data->id,$images);?>
						<div class="caption" id="url">
							<h3>{{ $data->id }}</h3>
							<h3>{{ $data->url }}</h3>
							<p>{{  $data->name }}</p>
							<p>{{  $data->description }}</p>
							<p>{{  $data->additional_description }}</p>
							<p>
								<a href="/project/<?=$data->id;?>" role="button" class="btn btn-primary">Подробнее</a>
							</p>
							<p>
								<a href="/admin/deleteitem/<?=$data->id;?>" role="button" class="btn btn-primary">Удалить</a>
							</p>
							<p>
								<a href="/admin/updateitem/<?=$data->id;?>" role="button" class="btn btn-primary">изменить</a>
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