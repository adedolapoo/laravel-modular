@if(has_access('lcds.show'))
    {!! edit_btn(route('admin.lcds.show',$id)) !!}
@endif
@if(has_access('lcds.edit'))
    {!! edit_btn(route('admin.lcds.edit',$id)) !!}
@endif
@if(has_access('lcds.destroy'))
    {!! delete_btn(route('admin.lcds.destroy',$id)) !!}
@endif