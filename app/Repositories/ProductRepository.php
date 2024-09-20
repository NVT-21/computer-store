<?php 
namespace App\Repositories;
use App\Models\Product;
class ProductRepository extends BaseRepository {
    function getModel(){
        return Product::class ;
    }
}