<?php

namespace Modules\Talents\Sidebar;


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
            $group->item(trans('talents::global.name'),function(Item $item){
                $item->weight(config('talents.sidebar.weight'));
                $item->icon(config('talents.sidebar.icon'));
                $item->route('admin.talents.index');
                $item->authorize($this->auth->hasAccess('talents.index'));
            });
        });

        return $menu;
    }
}