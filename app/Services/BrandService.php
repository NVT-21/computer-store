<?php 
namespace App\Services;

use App\Repositories\BrandRepository;
use Illuminate\Support\Facades\Hash;

class BrandService extends BaseService
{
    protected $BrandRepository;

    public function __construct(BrandRepository $BrandRepository)
    {
        $this->BrandRepository = $BrandRepository;
        parent::__construct();
    }

    // Implement phương thức abstract từ BaseService
    public function getRepository()
    {
        return $this->BrandRepository;
    }
    public function getBrandsWithProductCount($limit=6)
    {
        return $this->BrandRepository->getBrandsWithProductCount($limit);
    }
   
   
}
