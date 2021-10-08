<?php

namespace Modules\Businesses\Sidebar;


use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\SidebarExtender as PackageSideBarExtender;
use Modules\Core\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender implements PackageSideBarExtender
{
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::global.menus.content'), function (Group $group)
        {
            $group->item(trans('businesses::global.name'),function(Item $item){
                $item->weight(config('businesses.sidebar.weight'));
                $item->icon(config('businesses.sidebar.icon'));
                $item->route('admin.businesses.index');
                $item->authorize($this->auth->hasAccess('businesses.index'));
            });
        });

        return $menu;
    }
}