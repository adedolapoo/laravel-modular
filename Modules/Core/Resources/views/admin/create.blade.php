@extends('core::admin.master')

@section('title', trans($module . '::global.new'))

@section('page-group-title')
    @Lang($module . '::global.group_name')
@stop


@section('main')
    <div class="kt-portlet kt-portlet--mobile">
        @include('core::admin._porlet-title', ['module' => $module,'type'=>'back','caption'=>'new'])
        <div class="kt-portlet__body form">
            @include($module . '::admin._form')
        </div>
    </div>
@stop