<?php 
namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
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
    public function getProductsByCategory($categoryId,$limit=9){
        return $this->productRepository->getProductsByCategory($categoryId,$limit);
    }
    public function getProductsByBrand($brandId,$limit=9){
        return $this->productRepository->getProductsByBrand($brandId,$limit);
    }
    public function getProductsByPrice($minPrice,$maxPrice)
    {
        return $this->productRepository->getProductsByPrice($minPrice,$maxPrice);
    }
    public function getProductsByNameCategory($category,$limit=6)
    {
        return $this->productRepository->getProductsByNameCategory($category,$limit);
    }
    public function paginateForProduct($filters = null, $perPage = 9)
{
    return Product::with(['category', 'brand'])->paginate($perPage);
}
  
   
}
