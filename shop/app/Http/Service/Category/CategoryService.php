<?php

namespace App\Http\Service\Category;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService
{
    public function getAll()
    {
        return Category::orderByDesc('id')->paginate(10);
    }
    public function create($request)
    {
        try {
//            dd($request->input());
            Category::create([
                'name' => (string) $request->input('name'),
                'content' => (string) $request->input('content'),
                'active' => (integer) $request->input('category_active'),
                'slug' => Str::slug($request->input('name'),'-')
            ]);
            $request->session()->flash('success', 'Category added.');
        }catch (\Exception $err){
            $request->session()->flash('error', 'Category added.');
            return false;
        }
        return true;
    }
    public function destroy($request)
    {
        $id = (int) $request->input('id');
        $category = Category::where('id',$id) ->first();
        if($category){
            return Category::where('id', $id) -> delete();
        }
        return false;
    }
}
