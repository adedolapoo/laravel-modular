@if(has_access('posts.show'))
    {!! edit_btn(route('admin.posts.show',$id)) !!}
@endif
@if(has_access('posts.edit'))
    {!! edit_btn(route('admin.posts.edit',$id)) !!}
@endif
@if(has_access('posts.destroy'))
    {!! delete_btn(route('admin.posts.destroy',$id)) !!}
@endif