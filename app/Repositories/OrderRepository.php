<?php 
namespace App\Repositories;
use App\Models\Order;
class OrderRepository extends BaseRepository {
    function getModel(){
        return Order::class ;
    } 
}