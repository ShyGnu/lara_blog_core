@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Листинг Пользователей</h4>
                    <h6 class="card-subtitle">Представлены все зарегестрированные пользователи</h6>
                    <a href="{{route('users.create')}}" class="btn btn-outline-success">Добавить нового пользователя</a>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Имя</th>
                                <th>E-mail</th>
                                <th style="text-align: center;">Аватар</th>
                                <th style="text-align: center;">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td style="text-align: center;"><img style="max-width: 100px" src="{{$user->getAvatar()}}" alt=""></td>
                                    <td style="text-align: center; padding-top: 50px" class="text-nowrap">
                                        <a href="{{route('users.edit', $user->id)}}" data-toggle="tooltip" data-original-title="Редактировать"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        {{Form::open(['route'=>['users.destroy', $user->id], 'method'=>'delete'])}}
                                        <button onclick="return confirm('Вы уверены что хотите удалить данного пользователя')" type="submit" class="delete">
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
            </div>
        </div>
    </div>

@endsection

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