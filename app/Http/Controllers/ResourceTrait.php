<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkin;

Trait ResourceTrait
{
    protected $modelName;

    public function get(Request $request, $id = null)
    {
        $include = $request->get('include', []);
        $where = $request->get('where', []);
        $orWhere = $request->get('orWhere', []);

        if ($id)
            $data = $this->modelName::with($include)->find($id);
        else {
            $query = $this->modelName::with($include);
            foreach ($where as $filter) {
                $f = json_decode($filter);
                $query->where($f->key, $f->op, $f->value);
            }
            $query->where(function($q) use ($orWhere){
                foreach ($orWhere as $filter) {
                    $f = json_decode($filter);
                    $q->orWhere($f->key, $f->op, $f->value);
                }
            });
            $data = $query->get();
        }

        return ['success' => true, 'data' => $data];
    }

    public function create(Request $request)
    {
        $attributes = $request->except('withRalation');

        $withRelation = $request->get('withRalation', null);

        $model = $this->modelName::create($attributes);

        if ($withRelation)
            $model->{$withRelation['name']}()->createMany($withRelation['value']);

        return ['success' => true, 'model' => $model];
    }

    public function update(Request $request, $id)
    {
        $result = $this->modelName::where('id', $id)->update($request->all());

        return ['success' => true, 'result' => $result];
    }

    public function delete(Request $request, $id)
    {
        $result = $this->modelName::where('id', $id)->delete();

        if ($result == 1)
            return ['success' => true, 'result' => $result];
        else
            return ['success' => false, 'message' => 'เกิดข้อผิดพลาดในการลบ'];
    }
}
