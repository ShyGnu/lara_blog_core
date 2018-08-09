@extends('admin.layout')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card card-outline-info">
			<div class="card-header">
				<h4 class="m-b-0 text-white">Изменение категории</h4>
			</div>
			@include ('admin.errors')
			<div class="card-body">
				{{Form::open(['route'=>['categories.update', $category->id], 'method'=>'put'])}}
					<div class="form-body">
						<h3 class="card-title">Меняем Категорию</h3>
						<hr>
						<div class="row p-t-20">
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label">Название</label>
									<input type="text" id="firstName" name="title" class="form-control" value="{{$category->title}}">
									<small class="form-control-feedback"> Введите название категории </small> 
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-outline-warning"> <i class="fa fa-check"></i> Изменить</button>
						<a href="{{route('categories.index')}}" class="btn btn-outline-secondary">Отмена</a>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection