<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Product;
use App\Model\Admin\Category;
use Illuminate\Support\Facades\DB;

class ShopProductController extends Controller
{
    //
    public function index(){
        //$items = ShopProductModel::all();
        $items = DB::table('shop_products')->paginate(10);
        $data = array();
        $data['products'] = $items;
        return view('admin.content.shop.product.index', $data);
    }

    public function create(){
        $data = array();
        $cats = Category::all();
        $data['cats'] = $cats;
        return view('admin.content.shop.product.submit', $data);

    }

    public function edit($id){
        $item = Product::find($id);

        $data = array();
        $data['product'] = $item;
        $data['id'] = $id;
        $cats = Category::all();
        $data['cats'] = $cats;
        return view('admin.content.shop.product.edit', $data);

    }

    public function delete($id){
        $item = Product::find($id);
        $data = array();
        $data['id'] = $id;
        $data['product'] = $item;
        return view('admin.content.shop.product.delete', $data);

    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required',
            'supplier' => 'required',
            'images' => 'required',
            'quantity' => 'required',
            'color' => 'required',
            'size' => 'required',
            'cat_id' => 'required',
            'priceCore' => 'required|numeric',
            'priceSale' => 'required|numeric',
            'note' => 'required',
        ]);
        $input = $request->all();

        $item = new Product();

        $item->name     = $input['name'];
        $item->brand    = $input['brand'];
        $item->supplier = $input['supplier'];
        $item->images   = $input['images'];
        $item->quantity = $input['quantity'];
        $item->color    = $input['color'];
        $item->size     = $input['size'];
        $item->priceCore = $input['priceCore'];
        $item->priceSale = $input['priceSale'];
        $item->note     = $input['note'];
        $item->cat_id   = $input['cat_id'];

        $item->save();
        return redirect('/admin/shop/product');
    }

    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required',
            'supplier' => 'required',
            'images' => 'required',
            'quantity' => 'required',
            'color' => 'required',
            'size' => 'required',
            'cat_id' => 'required',
            'priceCore' => 'required|numeric',
            'priceSale' => 'required|numeric',
            'note' => 'required',
        ]);

        $input = $request->all();
        $item = Product::find($id);

        $item->name      = $input['name'];
        $item->brand     = $input['brand'];
        $item->supplier  = $input['supplier'];
        $item->images    = $input['images'];
        $item->quantity  = $input['quantity'];
        $item->color     = $input['color'];
        $item->size      = $input['size'];
        $item->priceCore = $input['priceCore'];
        $item->priceSale = $input['priceSale'];
        $item->note      = $input['note'];
        $item->cat_id    = $input['cat_id'];

        $item->save();
        return redirect('/admin/shop/product');
    }

    public function destroy($id){
        $item = Product::find($id);

        $item->delete();

        return redirect('/admin/shop/product');
    }
}
