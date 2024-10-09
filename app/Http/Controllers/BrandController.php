<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Services\BrandService;
use App\Http\Requests\BrandRequest;
class BrandController
{
    protected $brandService ;
    public function __construct(BrandService $brandService )
    {
       
        $this->brandService = $brandService;
    }
    public function getBransWithProductCount($limit)
    {
        return $this->brandService->getBrandsWithProductCount($limit);
    }
   
   
  
}
