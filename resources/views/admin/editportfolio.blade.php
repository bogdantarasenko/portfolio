@extends('admin.app')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">О нас</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/admin/portfolio" enctype="multipart/form-data" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Название</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Описание</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="description" value="{{ old('description') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Ссылка</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="url" value="{{ old('url') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Дополнительное описание</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="additional_description" value="{{ old('additional_description') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Дополнительное описание</label>
							<div class="col-md-6">
								<button class="submit-download"><input type="file" name="image"></button>
							</div>
						</div>							

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Добавить
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@stop