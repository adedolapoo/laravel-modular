@if(has_access('gigs.show'))
    {!! edit_btn(route('admin.gigs.show',$id)) !!}
@endif
@if(has_access('gigs.edit'))
    {!! edit_btn(route('admin.gigs.edit',$id)) !!}
@endif
@if(has_access('gigs.destroy'))
    {!! delete_btn(route('admin.gigs.destroy',$id)) !!}
@endif