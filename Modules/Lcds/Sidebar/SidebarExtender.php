<?php

namespace Modules\Lcds\Sidebar;


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
            $group->item(trans('lcds::global.name'),function(Item $item){
                $item->weight(config('lcds.sidebar.weight'));
                $item->icon(config('lcds.sidebar.icon'));
                $item->route('admin.lcds.index');
                $item->authorize($this->auth->hasAccess('lcds.index'));
            });
        });

        return $menu;
    }
}
