<?php 
namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

abstract class BaseService 
{
    protected $repository;

    public function __construct()
    {
        // Khởi tạo repository thông qua phương thức abstract getRepository
        $this->repository = $this->getRepository();
    }

    // Phương thức abstract yêu cầu các class con phải triển khai
    abstract public function getRepository();
    public function getAll(){
        return $this->repository->getAll();
    }
    public function create($data)
    {
        DB::beginTransaction();
        try {
            $this->repository->create($data);
            DB::commit();
            return [
                'success' => true,
                'message' => "created successfully",
            ];
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            DB::rollBack();
            return [
                'success' => false,
                'message' => "meet error",
            ];
        }
    }

    public function update($id, array $data)
    {
        DB::beginTransaction();
        try {
            $this->repository->update($id, $data);
            DB::commit();
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            DB::rollBack();
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $this->repository->destroy($id);
            DB::commit();
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            DB::rollBack();
        }
    }

    public function getById($id)
    {
        return $this->repository->getById($id);
    }
    public function paginate($name=null, $limit)
    {
        return $this->repository->paginate($name, $limit);
    }
}
