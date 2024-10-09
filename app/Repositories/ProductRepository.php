<?php 
namespace App\Repositories;
use App\Models\Product;
class ProductRepository extends BaseRepository {
    function getModel(){
        return Product::class ;
    }
    function getProductsByCategory($categoryId, $limit = 9) {
        return $this->getModel()::where('category_id', $categoryId)->paginate($limit);
    }
    function getProductsByBrand($brandId, $limit=9)
    {   
        return $this->getModel()::where('brand_id', $brandId)->paginate($limit);
    }
    function getProductsByPrice($minPrice, $maxPrice)
    {
        return $this->getModel()::whereBetween('price', [$minPrice, $maxPrice])->paginate(9);
    }
    
}