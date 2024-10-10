<?php 
namespace App\Services;

use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Hash;

class CategoryService extends BaseService
{
    protected $CategoryRepository;

    public function __construct(CategoryRepository $CategoryRepository)
    {
        $this->CategoryRepository = $CategoryRepository;
        parent::__construct();
    }

    // Implement phương thức abstract từ BaseService
    public function getRepository()
    {
        return $this->CategoryRepository;
    }
   public function  getCategoriesWithProduct() {
    return $this->CategoryRepository->getCategoriesWithProducts();
   }
}
