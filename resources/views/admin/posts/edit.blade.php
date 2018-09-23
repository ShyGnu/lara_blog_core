@extends('admin.layout')

@section('extension_styles')

    <link href="/css/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="/css/assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="/css/assets/plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="/css/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="/css/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="/css/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="/css/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="/css/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="/css/assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="/css/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Изминение новости</h4>
                    <h6 class="card-subtitle">Заполните все поля и нажмите изменить внизу.</h6>
                    @include('admin.errors')
                    {{Form::open([
                        'route' => ['posts.update', $post->id],
                        'method' => 'put',
                        'files' => true
                    ])}}
                    <form class="form-material m-t-40">
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control form-control-line" required data-validation-required-message="Это обязательное поле, пожалуйста заполните его" value="{{$post->title}}" name="title"> <span class="help-block text-muted"><small>Введите заголовок Новости.</small></span> </div>
                        <div class="form-group">
                            <img style="width: 250px;" src="{{$post->getImage()}}" alt="">
                            <br>
                            <label>Загрузить лицевое изображение</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Выбрать файл</span> <span class="fileinput-exists">Change</span>
                                            <input type="hidden">
                                            <input type="file" name="image"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                        </div>


                        <div class="form-group">
                            <label>Укажите категорию</label>
                            {{Form::select('category_id',
                            $categories,
                            $post->getCategoryID(),
                            ['class' => 'form-control'])
                            }}
                            <span class="help-block text-muted"><small>Выберите категорию из списка, если категории нету создайте новую на соответствующей странице.</small></span>
                        </div>
                        <div class="form-group">
                            <h5 class="m-t-20">Теги</h5>
                            {{Form::select('tags[]',
                            $tags,
                            $selectedTags,
                            ['class' => 'select2 m-b-10 select2-multiple', 'multiple' => 'multiple', 'data-placeholder' => 'Выберите теги', 'style' => 'width: 100%'])
                            }}
                            <span class="help-block text-muted"><small>Выберите теги из списка, если тега нету создайте новый на соответствующей странице.</small></span>
                        </div>
                        <div class="form-group">
                            <div class="row form-material">
                                <div class="col-md-6">
                                    <label class="m-t-20">Выберите дату</label>
                                    <input type="text" class="form-control" value="{{$post->date}}" name="date" id="mdate">


                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::checkbox('is_featured', '1', $post->is_featured, ['id' => 'basic_checkbox_1'])}}
                            <label for="basic_checkbox_1">Рекомендовать</label>

                        </div>
                        <div class="form-group">

                            {{Form::checkbox('status', '1', $post->status, ['id' => 'basic_checkbox_2'])}}
                            <label for="basic_checkbox_2">Черновик</label>
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <textarea name="description" class="form-control" rows="5" value="lorem">{{$post->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Полный текст</label>
                            <textarea name="content" class="form-control" rows="5" value="lorem">{{$post->content}}</textarea>
                        </div>

                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-outline-success">Изменить новость</button>
                            <button type="reset" class="btn btn-outline-secondary">Сбросить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection()

@section('extension_scripts')
    <script src="/js/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="/js/assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="/js/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="/js/assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <script src="/js/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="/js/assets/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="/js/assets/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="/js/assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="/js/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="/js/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="/js/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/js/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
        // MAterial Date picker
        $('#mdate').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
        $('#timepicker').bootstrapMaterialDatePicker({ format : 'HH:mm', time: true, date: false });
        $('#date-format').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm' });

        $('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });
        // Clock pickers
        $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });
        $('.clockpicker').clockpicker({
            donetext: 'Done',
        }).find('input').change(function() {
            console.log(this.value);
        });
        $('#check-minutes').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }
        // Colorpicker
        $(".colorpicker").asColorPicker();
        $(".complex-colorpicker").asColorPicker({
            mode: 'complex'
        });
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });
        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
        // Daterange picker
        $('.input-daterange-datepicker').daterangepicker({
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse'
        });
        $('.input-daterange-timepicker').daterangepicker({
            timePicker: true,
            format: 'MM/DD/YYYY h:mm A',
            timePickerIncrement: 30,
            timePicker12Hour: true,
            timePickerSeconds: false,
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse'
        });
        $('.input-limit-datepicker').daterangepicker({
            format: 'MM/DD/YYYY',
            minDate: '06/01/2015',
            maxDate: '06/30/2015',
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse',
            dateLimit: {
                days: 6
            }
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function() {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function() {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function() {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function() {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function(data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function(markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                templateResult: formatRepo, // omitted for brevity, see the source of this page
                templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
    </script>

@endsection