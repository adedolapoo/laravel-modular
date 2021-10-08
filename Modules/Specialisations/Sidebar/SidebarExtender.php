<?php

namespace Modules\Specialisations\Sidebar;


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
            $group->item(trans('specialisations::global.name'),function(Item $item){
                $item->weight(config('specialisations.sidebar.weight'));
                $item->icon(config('specialisations.sidebar.icon'));
                $item->route('admin.specialisations.index');
                $item->authorize($this->auth->hasAccess('specialisations.index'));
            });
        });

        return $menu;
    }
}
