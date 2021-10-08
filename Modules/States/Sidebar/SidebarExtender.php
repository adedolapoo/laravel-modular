<?php

namespace Modules\States\Sidebar;


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
            $group->item(trans('states::global.name'),function(Item $item){
                $item->weight(config('states.sidebar.weight'));
                $item->icon(config('states.sidebar.icon'));
                $item->route('admin.states.index');
                $item->authorize($this->auth->hasAccess('states.index'));
            });
        });

        return $menu;
    }
}
