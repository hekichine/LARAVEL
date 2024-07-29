<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateFormRequest;
use App\Http\Service\Category\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this ->categoryService = $categoryService;
    }

    public function index()
    {
        $listCategories = $this->categoryService->getAll();
        return view('system.category.list',[
            'title' => 'Categories list',
            'listCategories' => $listCategories
        ]);
    }
    public function create()
    {
        return view('system.category.add',[
            'title' => 'Add Category'
        ]);
    }
    public function store(CreateFormRequest $request)
    {
        $result = $this -> categoryService -> create($request);
        return redirect()->back();
    }
    public function destroy($request)
    {
        $result = $this->categoryService->destroy($request);

        if($result){
            return response()->json([
               'error' => false,
               'message' => 'Delete category success.'
            ]);
        }
        return response()->json([
           'error' => true
        ]);

    }
}
