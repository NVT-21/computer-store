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
   
}
