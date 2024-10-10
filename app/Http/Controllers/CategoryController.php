<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
class CategoryController
{
    protected $CategoryService ;
    public function __construct(CategoryService $CategoryService )
    {
        $this->CategoryService = $CategoryService;
    }
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Admin.Product.create-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=[
            "name"=>$request['name'],
        ];
        $result=$this->CategoryService->create($data);
        if($result['success']){
            return back()->with("success","Successfully created");
        }
        else {
            return back()->with("error","Failed to create");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
