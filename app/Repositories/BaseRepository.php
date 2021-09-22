<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository {

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function save(Model $model)
    {
        $model->save();

        return $model;
    }

    public function delete(Model $model)
    {
        $model->delete();

        return $model;
    }

}
