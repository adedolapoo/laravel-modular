<?php

namespace Modules\Posts\Sidebar;


use Maatwebsite\Sidebar\Badge;
use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\SidebarExtender as PackageSideBarExtender;
use Modules\Core\Sidebar\BaseSidebarExtender;
use Modules\Posts\Repositories\PostInterface;

class SidebarExtender extends BaseSidebarExtender implements PackageSideBarExtender
{
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::global.menus.content'), function (Group $group) {
            //$group->hideHeading();
            $group->weight(50);
            $group->item('Posts', function (Item $item) {
                $item->weight(2);
                $item->icon('fa fa-eye');
                $item->route('admin.posts.index');

                $item->authorize(
                    $this->auth->hasAccess('posts.index') || $this->auth->hasAccess('post.categories.index')
                );

                $item->item('Posts', function (Item $item) {
                    $item->weight(1);
                    $item->icon('fa fa-circle');
                    $item->route('admin.posts.index');
                    $item->authorize($this->auth->hasAccess('posts.index'));
                });
                $item->item('Categories', function (Item $item) {
                    $item->weight(2);
                    $item->icon('fa fa-circle');
                    $item->route('admin.post.categories.index');
                    $item->authorize($this->auth->hasAccess('post.categories.index'));
                });
                /*$item->item('Tags', function (Item $item) {
                    $item->weight(3);
                    $item->icon('fa fa-circle');
                    $item->route('admin.tags.index');
                    $item->authorize($this->auth->hasAccess('tags.index'));
                });*/

            });
        });

        return $menu;
    }
}
