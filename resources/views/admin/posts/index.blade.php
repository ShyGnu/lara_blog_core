@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                {{Form::open([
                    'route' => 'posts.store',
                    'files' => true
                ])}}
                <div class="card-body">
                    <h4 class="card-title">Листинг Новостей</h4>
                    @include('admin.errors')
                    <h6 class="card-subtitle">Представлены все новости которые есть на сайте</h6>
                    <a href="{{route('posts.create')}}" class="btn btn-outline-success">Добавить новую новость</a>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Категория</th>
                                <th>Теги</th>
                                <th style="text-align: center">Изображение</th>
                                <th style="text-align: center">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post -> id}}</td>
                                <td>{{$post -> title}}</td>
                                <td>{{$post->getCategoryTitle()}}</td>
                                <td>{{$post->getTagsTitles()}}</td>
                                <td style="text-align: center"><img style="max-width: 100px"; src="{{$post->getImage()}}" alt=""></td>
                                <td style="text-align: center; padding-top: 25px" class="text-nowrap">
                                    <a href="{{route('posts.edit', $post->id)}}" data-toggle="tooltip" data-original-title="Редактировать"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    {{Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Вы уверены что хотите удалить данную новость')" type="submit" class="delete">
                                        <i class="fa fa-close text-danger"></i>
                                    </button>

                                    {{Form::close()}}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>

@endsection()

@section('extension_scripts')
    <script src="/js/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="/js/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });

    </script>

@endsection