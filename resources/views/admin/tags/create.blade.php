@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Добавление нового тега</h4>
                </div>
                @include ('admin.errors')

                <div class="card-body">
                    {!! Form::open(['route' => 'tags.store']) !!}
                    <div class="form-body">
                        <h3 class="card-title">Добавляем новый тег</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Название</label>
                                    <input type="text" id="firstName" class="form-control" name="title">
                                    <small class="form-control-feedback"> Введите название тега </small> </div>
                            </div>

                        </div>
                        <!--/row-->


                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-outline-success"> <i class="fa fa-check"></i> Добавить</button>
                        <a href="{{route('tags.index')}}" class="btn btn-outline-secondary">Отмена</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection('content')