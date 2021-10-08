<?php

namespace Modules\Countries\Sidebar;


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
            $group->item(trans('countries::global.name'),function(Item $item){
                $item->weight(config('countries.sidebar.weight'));
                $item->icon(config('countries.sidebar.icon'));
                $item->route('admin.countries.index');
                $item->authorize($this->auth->hasAccess('countries.index'));
            });
        });

        return $menu;
    }
}
