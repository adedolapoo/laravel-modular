@if(has_access('referrals.show'))
    {!! edit_btn(route('admin.referrals.show',$id)) !!}
@endif
@if(has_access('referrals.edit'))
    {!! edit_btn(route('admin.referrals.edit',$id)) !!}
@endif
@if(has_access('referrals.destroy'))
    {!! delete_btn(route('admin.referrals.destroy',$id)) !!}
@endif