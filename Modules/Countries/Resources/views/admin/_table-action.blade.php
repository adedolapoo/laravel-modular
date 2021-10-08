@if(has_access('countries.show'))
    {!! edit_btn(route('admin.countries.show',$id)) !!}
@endif
@if(has_access('countries.edit'))
    {!! edit_btn(route('admin.countries.edit',$id)) !!}
@endif
@if(has_access('countries.destroy'))
    {!! delete_btn(route('admin.countries.destroy',$id)) !!}
@endif