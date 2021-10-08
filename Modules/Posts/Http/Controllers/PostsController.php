<?php namespace Modules\Posts\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Posts\Http\Requests\FormRequest;
use Modules\Posts\Repositories\PostInterface as Repository;
use Modules\Posts\Entities\Post;
use Yajra\DataTables\DataTables;

class PostsController extends BaseAdminController {

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

    public function edit(Post $model)
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

        $data['user_id'] = current_user()->id;

        $model = $this->repository->create($data);

        return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function update(Post $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

    public function dataTable()
    {
        $id = request()->get('id');
        $model = !empty($id) ? $this->repository->getForDatatable($id) : $this->repository->getForDatatable();

        $model_table = $this->repository->getTable();

        return Datatables::of($model)
            ->addColumn('action', $model_table . '::admin._table-action')
            ->editColumn('status', function($row) {
                $html = '';
                $html .= status_label($row->status);

                return $html;
            })
            ->editColumn('is_featured', function($row) {
                $html = '';
                $html .= is_featured_label($row->is_featured);

                return $html;
            })
            ->escapeColumns(['action'])
            ->removeColumn('id')
            ->make();
    }

}
