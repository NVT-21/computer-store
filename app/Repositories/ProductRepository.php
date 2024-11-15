<?php 
namespace App\Repositories;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
    function getProductsByNameCategory($name, $limit=6)
    {
        return DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.id', 'products.name as product_name', 'products.stock', 'products.price', 'products.sale_price', 'products.image_path', 'categories.name as category_name') // Explicitly select the columns
        ->where('categories.name', $name)
        ->limit($limit)
        ->get();
    
    }
    
}