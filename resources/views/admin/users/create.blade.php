@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Добавление нового пользователя</h4>
                    <h6 class="card-subtitle">Заполните все поля и нажмите добавить внизу.</h6>
                    @include('admin.errors')
                    {{Form::open(['route' => 'users.store', 'files' => true])}}
                        <div class="form-group">
                            <label>Имя</label>
                            <input type="text" name="name" class="form-control form-control-line" value="{{old('name')}}"> <span class="help-block text-muted"><small>Введите имя нового пользователя.</small></span> </div>
                        <div class="form-group">
                            <label for="example-email">Email <span class="help"> например: "example@gmail.com"</span></label>
                            <input type="text" id="example-email2" name="email" class="form-control" value="{{old('email')}}"> </div>
                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" class="form-control" name="password"> </div>
                    <div class="form-group">
                            <label>Загрузить аватар</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Выбрать файл</span> <span class="fileinput-exists">Change</span>
                                            <input type="hidden">
                                            <input type="file" name="avatar"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                        </div>
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-outline-success">Создать пользователя</button>
                            <a href="{{route('users.index')}}" class="btn btn-outline-secondary">Отмена</a>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection