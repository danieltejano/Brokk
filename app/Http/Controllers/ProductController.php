<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return 'this is the product index page';
    }

    public function create(){
        return 'this is the product create page';
    }

    public function update(){
        return 'this is the product update page';
    }

    public function delete(Product $product){
        return 'this is the product delete page';
    }

    public function show(Product $product){
        return 'this is the product show page';
    }
}
