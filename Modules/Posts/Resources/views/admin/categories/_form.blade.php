@section('page-breadcrumbs')
    <li>
        <a href="{{route('admin.post.categories.index')}}">Post Categories</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <li>
        <a href="javascript:;">@if(!isset($id)) New Post Category @else Edit Post Category @endif</a>
    </li>
@stop
{!! form_start($form,['class'=>'']) !!}
@include('core::admin._buttons-form',['top'=>true])
<div class="form-body">
    {!! form_rest($form) !!}
</div>
@include('core::admin._buttons-form')
{!! form_end($form,false) !!}