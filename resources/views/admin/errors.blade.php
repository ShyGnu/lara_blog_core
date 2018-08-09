@if ($errors->any())
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Внимание</h3> 
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif