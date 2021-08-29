<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cartegory;
use App\Models\Product;
use App\Models\Order;


class AController extends Controller
{

    // category
    // public function all_categories(){
    //     $categories = Cartegory::all();
    //     return view('all_categories', compact('categories'));
    // }

    public function all_categories(Request $request){
        $categories = Cartegory::all();   $inpname=$request->name;
        return view('all_categories', compact('categories','inpname'));
    }


    // product
    public function all_products(){
        $products = Product::all();
        return view('all_products' ,compact('products'));
    }
    public function create_product(){
        $categories = Cartegory::all();

        return view('create_product',['categories'=>$categories]);
    }
    public function storePro(Request $request){

        $product = new Product;
        $product->proName = $request->productName;
        $product->proPrice = $request->productPrice;
        $product->proQuantity = $request->productQty;
        $product->cat_id = $request->cat_id ;
        $product->save();
        return redirect("all_products");
    }
    public function destroyPro($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('all_products');
    }
    public function editPro($id){
        $product = Product::find($id);
        $categories = Cartegory::all();
        return view('edit_product' , compact('product','categories'));
    }

    // order
    public function storeOrd(Request $request){
        $order = new Order;
        $order->cat_id = $request->cat_id;
        $order->pro_id = $request->product;
        $order->proQyt =$request->order_qty;
        $order->save();
        return redirect('all_products');
    }




}
