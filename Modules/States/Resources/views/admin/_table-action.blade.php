@if(has_access('states.show'))
    {!! edit_btn(route('admin.states.show',$id)) !!}
@endif
@if(has_access('states.edit'))
    {!! edit_btn(route('admin.states.edit',$id)) !!}
@endif
@if(has_access('states.destroy'))
    {!! delete_btn(route('admin.states.destroy',$id)) !!}
@endif