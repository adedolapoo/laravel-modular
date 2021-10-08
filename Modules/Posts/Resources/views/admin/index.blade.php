@section('page-breadcrumbs')
    <li>
        <a href="javascript:;">Posts</a>
    </li>
@stop
{!!generate_datatable(config($module.'.th'))!!}