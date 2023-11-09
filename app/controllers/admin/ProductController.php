<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Product;
class ProductController extends BaseController{
    public function list(){
        $products = Product::all();

        $this->render('admin.product.index', compact('products'));
    }

    public function demo(){
        return $this->render('admin-layout.main');
    }
}

?>