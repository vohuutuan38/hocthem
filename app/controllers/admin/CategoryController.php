<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Category;

class CategoryController extends BaseController{
    public function detail($id){
        $category = Category::find($id);
        
        $this->render('admin.category.detail', compact('category'));
    }
}

?>