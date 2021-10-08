<?php

namespace Modules\Lovs\Sidebar;


use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\SidebarExtender as PackageSideBarExtender;
use Modules\Core\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender implements PackageSideBarExtender
{
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::global.menus.base_records'), function (Group $group)
        {
            $group->weight(100);
            $group->item(trans('lovs::global.name'),function(Item $item){
                $item->weight(config('lovs.sidebar.weight'));
                $item->icon(config('lovs.sidebar.icon'));
                $item->route('admin.lovs.index');
                $item->authorize($this->auth->hasAccess('lovs.index'));
            });
        });

        return $menu;
    }
}
