<?php 
namespace App\Repositories;
use App\Models\Category;
class CategoryRepository extends BaseRepository {
    function getModel(){
        return Category::class ;
    }
    public function getCategoriesWithProducts($limit = 5) {
        $categories = Category::withCount('products')->paginate($limit);
        return $categories;
    }
    
}