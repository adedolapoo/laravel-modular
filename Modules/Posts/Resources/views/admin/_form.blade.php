@section('page-breadcrumbs')
    <li>
        <a href="{{route('admin.posts.index')}}">Posts</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <li>
        <a href="javascript:;">@if(!isset($id)) New post @else Edit post @endif</a>
    </li>
@stop
{!! form_start($form,['class'=>'']) !!}
@include('core::admin._buttons-form',['top'=>true])
<div class="form-body">
    <div class="tabbable-custom">
        <ul class="nav nav-tabs nav-tabs-line-2x nav-tabs-line nav-tabs-line-primary">
            <li class="nav-item">
                <a href="#tab_1" data-toggle="tab" class="nav-link active">
                    Basic </a>
            </li>
            <li class="nav-item">
                <a href="#tab_2" data-toggle="tab" class="nav-link">
                    Content </a>
            </li>
            <li class="nav-item">
                <a href="#tab_3" data-toggle="tab" class="nav-link">
                    Meta </a>
            </li>


        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <div class="row">

                    <div class="col-md-12">
                        {!! form_row($form->title) !!}
                    </div>
                    @if(isset($model))
                        <div class="col-md-12">
                            {!! form_row($form->slug) !!}
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {!! form_row($form->image_url) !!}
                    </div>
                    <div class="col-md-6">
                        {!! form_row($form->image) !!}
                    </div>
                    <div class="col-md-6">
                        {!! form_row($form->category_id) !!}
                    </div>
                    @if(!current_user()->hasRoleName('Contributor'))
                        <div class="col-md-6">
                            {!! form_row($form->status) !!}
                        </div>
                        <div class="col-md-6">
                            {!! form_row($form->is_featured) !!}
                        </div>
                    @endif

                </div>
            </div>
            <div class="tab-pane" id="tab_2">
                <div class="row">
                    <div class="col-md-12">
                        {!! form_widget($form->body) !!}
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab_3">
                <div class="row">
                    <div class="col-md-12">
                        {!! form_row($form->meta_title) !!}
                    </div>
                    <div class="col-md-12">
                        {!! form_row($form->meta_keywords) !!}
                    </div>
                    <div class="col-md-12">
                        {!! form_row($form->meta_description) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('core::admin._buttons-form')
{!! form_end($form,false) !!}
