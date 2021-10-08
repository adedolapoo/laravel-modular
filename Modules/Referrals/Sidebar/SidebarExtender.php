<?php

namespace Modules\Referrals\Sidebar;


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
            $group->item(trans('referrals::global.name'),function(Item $item){
                $item->weight(config('referrals.sidebar.weight'));
                $item->icon(config('referrals.sidebar.icon'));
                $item->route('admin.referrals.index');
                $item->authorize($this->auth->hasAccess('referrals.index'));
            });
        });

        return $menu;
    }
}