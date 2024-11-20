<?php 
namespace App\Repositories;
use App\Models\Order;
class OrderRepository extends BaseRepository {
    function getModel(){
        return Order::class ;
    } 
    public function getOrdersByTime($month = null, $year = null,$status="Completed")
    {
        $query = Order::query();
        $order = $query->get();
        $query->where('status', $status);
        if ($month !== null) {
            $query->whereMonth('created_at', $month);
        }
        if ($year !== null) {
            $query->whereYear('created_at', $year);
        }
           
           
        
    
        return $query->get();
    }
    
}