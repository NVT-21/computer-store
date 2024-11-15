<?php 
namespace App\Services;

use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Hash;

class OrderService extends BaseService
{
    protected $OrderRepository;

    public function __construct(OrderRepository $OrderRepository)
    {
        $this->OrderRepository = $OrderRepository;
        parent::__construct();
    }
    public function getRepository()
    {
        return $this->OrderRepository;
    }
    public function getOrdersByTime($month,$year)
    {
        return $this->OrderRepository->getOrdersByTime($month,$year);
    }
    public function calculateOrdersByTime($month, $year)
{
    // Lấy danh sách các Order theo thời gian
    $orders = $this->getOrdersByTime($month, $year);

    $totalSales = 0;
    $orderCount = 0;
    $totalProductQuantity = 0;
    foreach ($orders as $order) {
        // Tính tổng tiền của đơn hàng
        $totalSales += $order->total_amount;
        $orderCount++;

        // Tính tổng số lượng sản phẩm cho mỗi Order
        foreach ($order->products as $product) {
            $totalProductQuantity += $product->pivot->quantity;
        }
    }
   
    return [$totalSales, $orderCount, $totalProductQuantity];
}
   
}
