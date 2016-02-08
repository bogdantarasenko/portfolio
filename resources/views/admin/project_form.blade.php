<form class="form-horizontal" role="form" method="POST" action="/admin/portfolio" enctype="multipart/form-data" >
						
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<input type="hidden" name="updateid" value="<?=$updateid = (isset($id))?$id:null;?>">

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
							<label class="col-md-4 control-label">загрузить изображение</label>
							<div class="col-md-6">
								<button class="submit-download"><input type="file" name="image[]" multiple='true'></button>
							</div>
						</div>
						
							

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									{{  $view_data['title']  }}
								</button>
							</div>
						</div>
</form>