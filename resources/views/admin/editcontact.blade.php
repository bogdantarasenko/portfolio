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

					<form class="form-horizontal" role="form" method="POST" action="/admin/contact">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Адресс</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="adress" value="{{ old('adress') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">email</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">телефон</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="telephone" value="{{ old('telephone') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Время работы</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="work_time" value="{{ old('work_time') }}">
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