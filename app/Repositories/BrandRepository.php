<?php 
namespace App\Repositories;
use App\Models\Brand;
class BrandRepository extends BaseRepository {
    function getModel(){
        return Brand::class ;
    }
    function getBrandsWithProductCount($limit=6){
        $brands=$this->getModel()::withCount("products")->paginate($limit);
        return $brands;
    }
}