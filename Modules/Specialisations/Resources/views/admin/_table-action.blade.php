@if(has_access('specialisations.show'))
    {!! edit_btn(route('admin.specialisations.show',$id)) !!}
@endif
@if(has_access('specialisations.edit'))
    {!! edit_btn(route('admin.specialisations.edit',$id)) !!}
@endif
@if(has_access('specialisations.destroy'))
    {!! delete_btn(route('admin.specialisations.destroy',$id)) !!}
@endif