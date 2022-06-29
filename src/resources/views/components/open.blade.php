@if(isset($name))
    @if(Auth::user()->can($name.'.create'))
        <a href="{{route($name.'.create')}}" class="btn btn-warning text-white"><i class="bi bi-plus"></i></a>
    @endif
@endif
<table class="table datatable" id="table">