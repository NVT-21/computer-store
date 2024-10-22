<?php 
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
function isAdmin(array $roles = []): bool {
    if (in_array(Role::ROLE_ADMIN, $roles)) {
        return true;
    }
    return false;
}

    function calculateTopSellingProduct($categoryName)
    {
        try {
            $bestSellingProducts = DB::table('sales')
                ->select(
                    'products.id as id',
                    'products.name as product_name',
                    'categories.name as category_name',
                    'products.price as product_price',
                    DB::raw('SUM(sales.quantity_sold) as total_sold')
                )
                ->join('products', 'sales.product_id', '=', 'products.id')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->where('categories.name', '=', $categoryName)
                ->groupBy('products.id', 'products.name', 'categories.id', 'categories.name')
                ->orderBy('total_sold', 'desc')
                ->limit(5)
                ->get();
    
            return $bestSellingProducts;
        } catch (QueryException $e) {
            // Ghi lỗi vào log
            Log::error('Error fetching top selling products: ' . $e->getMessage());
            
            // Trả về một thông báo hoặc giá trị mặc định
            return response()->json(['error' => 'Unable to fetch top selling products'], 500);
        }

}
