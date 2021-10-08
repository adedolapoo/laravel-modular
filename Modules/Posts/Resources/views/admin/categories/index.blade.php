@extends('core::admin.master')

@section('title', $title)

@section('page-css')
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
@stop

@section('page-js')

    <script type="text/javascript"
            src="{{asset('assets/admin/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/admin/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <script>
        $(function () {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('ajax.post.categories.index')}}',
                initComplete: function () {
                    $(".delete-me").click(function () {
                        if (confirm($(this).attr('data-confirm'))) {
                            $.ajax({
                                url: $(this).attr('href'),
                                type: 'DELETE',
                                success: function (data) {
                                    document.location.href = '{{route('admin.post.categories.index')}}';
                                },
                                data: {_token: '{{csrf_token()}}'}
                            })
                        }
                        return false;
                    });

                }
            });
        });
    </script>
@stop

@section('page-group-title')
    {{trans($module . '::global.group_name')}}
    <small>@Lang($module . '::global.group_description')</small>
@stop

@section('page-breadcrumbs')
    <li>
        <a href="javascript:;">Categories</a>
    </li>
@stop


@section('main')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart theme-font-color hide"></i>
                        <span class="caption-subject theme-font-color bold uppercase">
                            @Lang($module . '::global.categories.index')
                        </span>
                    </div>
                    <div class="actions">
                        @if(isset($type))
                            @include('core::admin._button-'.$type, ['module' => $module,'caption'=>$caption])
                        @else
                            @include('core::admin._button-create', ['module' => 'post.categories'])
                        @endif
                        @include('core::admin._button-fullscreen')
                    </div>
                </div>
                <div class="portlet-body">
                    {!!generate_datatable(['category','category_slug'])!!}
                </div>
            </div>
        </div>
    </div>

@stop