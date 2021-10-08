@if(has_access('talents.show'))
    {!! edit_btn(route('admin.talents.show',$id)) !!}
@endif
@if(has_access('talents.edit'))
    {!! edit_btn(route('admin.talents.edit',$id)) !!}
@endif
@if(has_access('talents.destroy'))
    {!! delete_btn(route('admin.talents.destroy',$id)) !!}
@endif