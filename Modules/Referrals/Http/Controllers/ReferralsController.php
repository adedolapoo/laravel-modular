<?php namespace Modules\Referrals\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Referrals\Http\Requests\FormRequest;
use Modules\Referrals\Repositories\ReferralInterface as Repository;
use Modules\Referrals\Entities\Referral;
use Yajra\DataTables\Facades\DataTables;

class ReferralsController extends BaseAdminController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function index()
    {
        $module = $this->repository->getTable();
        $title = trans($module . '::global.group_name');
        return view('core::admin.index')
            ->with(compact('title', 'module'));
    }

    public function create()
    {
        $module = $this->repository->getTable();
        $form = $this->form(config($module.'.form'), [
            'method' => 'POST',
            'url' => route('admin.'.$module.'.store')
        ]);
        return view('core::admin.create')
            ->with(compact('module','form'));
    }

    public function edit(Referral $model)
        {
            $module = $model->getTable();
            $form = $this->form(config($module.'.form'), [
                'method' => 'PUT',
                'url' => route('admin.'.$module.'.update',$model),
                'model'=>$model
            ]);
            return view('core::admin.edit')
                ->with(compact('model','module','form'));
        }

    public function store(FormRequest $request)
    {
        $data = $request->all();

        $model = $this->repository->create($data);

        return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function update(Referral $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function dataTable()
    {
        $id = request()->get('id');
        $model = !empty($id) ? $this->repository->getForDatatable($id) : $this->repository->getForDatatable();

        $model_table = $this->repository->getTable();

        return Datatables::of($model)
            ->addColumn('action', $model_table . '::admin._table-action')
            ->editColumn('referral_user_id', function($row) {
               return $row->user_first_name .' '. $row->user_last_name;
            })
            ->escapeColumns(['action'])
            ->removeColumn('id')
            ->make();
    }

}
