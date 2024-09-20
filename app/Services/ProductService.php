<?php 
namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Hash;

class ProductService extends BaseService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
        parent::__construct();
    }

    // Implement phương thức abstract từ BaseService
    public function getRepository()
    {
        return $this->productRepository;
    }
   
}
