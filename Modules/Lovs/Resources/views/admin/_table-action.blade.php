@if(has_access('lovs.show'))
    {!! edit_btn(route('admin.lovs.show',$id)) !!}
@endif
@if(has_access('lovs.edit'))
    {!! edit_btn(route('admin.lovs.edit',$id)) !!}
@endif
@if(has_access('lovs.destroy'))
    {!! delete_btn(route('admin.lovs.destroy',$id)) !!}
@endif