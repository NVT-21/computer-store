<?php 
namespace App\Repositories;
abstract class BaseRepository {
    protected $model;

    public function __construct()
    {
        $this->model = $this->setModel();
    }

    //define custom model
    abstract function getModel();

    public function setModel()
    {
        return app()->make($this->getModel());
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getData($column = '*', $relation = [])
    {
        return $this->model->with($relation)->get($column);
    }

    public function getById($id)
    {
        return $this->model->where('id', $id)->first();
    }

    public function update($id, array $data = [])
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }

    public function deleteById($id)
    {
        $data = $this->model->find($id);
        if ($data) {
            $this->model->find($id)->delete();
            return 1;
        }
        else {
            return 0;
        }
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function firstOrCreate(array $attributes)
    {
        return $this->model->firstOrCreate($attributes);
    }

    public function findByIds(array $ids, $columns = ['*'])
    {
        return $this->model->whereIn('id', $ids)->orderBy('id', 'desc')->get($columns);
    }

    public function findOne(array $conditions)
    {
        return $this->model->where($conditions)->first();
    }

    public function findByField(array $conditions){
        return $this->model->where($conditions)->get();
    }

    public function findOneByFields(array $conditions){
        return $this->model->where($conditions)->first();
    }

    public function insert(array $data)
    {
        return $this->model->insert($data);
    }
    public function paginate($name=null, $limit){

       $query=$this->model->newQuery();
       if(!empty($name)){
        $query->where('name', 'like', '%' . $name . '%');
       }
       $limit = is_numeric($limit) && $limit > 0 ? (int)$limit : 10;

       return $query->paginate($limit);

    }

}