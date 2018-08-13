@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Добавление новой Новости</h4>
                    <h6 class="card-subtitle">Заполните все поля и нажмите добавить внизу.</h6>
                    <form class="form-material m-t-40">
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control form-control-line" required data-validation-required-message="Это обязательное поле, пожалуйста заполните его" value="Как изучить Laravel создавая блог?"> <span class="help-block text-muted"><small>Введите заголовок Новости.</small></span> </div>
                        <div class="form-group">
                            <img style="width: 250px;" src="../assets/images/big/img5.jpg" alt="">
                        </div>
                        <div class="form-group">
                            <label>Загрузить лицевое изображение</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Выбрать файл</span> <span class="fileinput-exists">Change</span>
                                            <input type="hidden">
                                            <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                        </div>

                        <div class="form-group">
                            <label>Укажите категорию</label>
                            <select class="form-control">
                                <option>Alabama</option>
                                <option>Programming</option>
                                <option>News</option>
                            </select>
                            <span class="help-block text-muted"><small>Выберите категорию из списка, если категории нету создайте новую на соответствующей странице.</small></span>
                        </div>
                        <div class="form-group">
                            <h5 class="m-t-20">Теги</h5>
                            <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Выберите теги">
                                <option value="AK" selected="selected">PHP</option>
                                <option value="HI">Laravel</option>
                                <option value="CA">programming</option>
                                <option value="NV">news</option>
                                <option value="OR">post</option>
                            </select>
                            <span class="help-block text-muted"><small>Выберите теги из списка, если тега нету создайте новый на соответствующей странице.</small></span>
                        </div>
                        <div class="form-group">
                            <div class="row form-material">
                                <div class="col-md-6">
                                    <label class="m-t-20">Выберите дату</label>
                                    <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">


                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="basic_checkbox_1" />
                            <label for="basic_checkbox_1">Рекомендовать</label>

                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="basic_checkbox_2" checked />
                            <label for="basic_checkbox_2">Черновик</label>
                        </div>
                        <div class="form-group">
                            <label>Полный текст</label>
                            <textarea class="form-control" rows="5" value="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptatibus et fuga inventore, placeat, consequatur asperiores aliquid quos aliquam optio dolore quisquam, dolorum! Non, magnam cum cumque assumenda quaerat blanditiis.</textarea>
                        </div>

                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-outline-success">Создать новость</button>
                            <button type="reset" class="btn btn-outline-secondary">Сбросить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection()