<?php

namespace Modules\Gigs\Sidebar;


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
            $group->item(trans('gigs::global.name'),function(Item $item){
                $item->weight(config('gigs.sidebar.weight'));
                $item->icon(config('gigs.sidebar.icon'));
                $item->route('admin.gigs.index');
                $item->authorize($this->auth->hasAccess('gigs.index'));
            });
        });

        return $menu;
    }
}