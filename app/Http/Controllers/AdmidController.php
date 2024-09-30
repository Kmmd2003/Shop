<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\restaurant;
use App\Models\products;
use App\Http\Requests\RestaurantRequest;

class AdmidController extends Controller
{
    public function admin()
    {
        return view('admin.panel');
    }

    public function categoryList()
    {
        return view('admin.category-list' , ['categories' => category::all()]);
    }

    public function categoryCreate()
    {
        return view('admin.category-create');
    }

    public function categoryInsert(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        category::insert([
            'name' => $name,
            'description' => $description
        ]);
        return redirect(route('category-list'));
    }

    public function categoryEdit($id)
    {
        $category = category::findOrFail($id);
        return view('admin.category-edit' , ['category' => $category]);
    }

    public function categoryUpdate(Request $request)
    {
        $category = category::findorfail($request->input('id'))->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect(route('category-list'));
    }

    public function categoryDelete($id)
    {
        category::findOrFail($id)->delete();
        return redirect(route('category-list'));
    }

    public function productList()
    {
        $products = products::all();
        return view('admin.product-list' , ['products' => $products]);
    }

    public function productCreate()
    {
        $categories = category::all();
        $restaurants = restaurant::all();
        return view('admin.product-create' , [
            'categories' => $categories,
            'restaurants' => $restaurants
        ]);
    }

    public function productInsert(Request $request)
    {
        products::insert([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category'),
            'restaurant_id' => $request->input('restaurant')
        ]);
        return redirect(route('product-list'));
    }

    public function productEdit($id)
    {
        $product = products::findOrFail($id);
        $restaurants = restaurant::all();
        $categories = category::all();
        return view('admin.product-edit' , [
            'product' => $product,
            'restaurants' => $restaurants,
            'categories' => $categories
        ]);
    }

    public function productUpdate(Request $request)
    {
        $product = products::findOrFail($request->input('id'))->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'restaurant_id' => $request->input('restaurant'),
            'category_id' => $request->input('category')
        ]);

        return redirect(route('product-list'));
    }

    public function productDelete($id)
    {
        products::findOrFail($id)->delete();
        return redirect(route('product-list'));
    }

    public function restaurantList()
    {
        $restaurant = restaurant::all();
        return view('admin.restaurant-list' , ['restaurants' => $restaurant]);
    }

    public function restaurantCreat()
    {
        return view('admin.restaurant-create');
    }

    public function restaurantInsert(RestaurantRequest $request)
    {
        $request->validated();
       $name = $request->input('name');
       $address = $request->input('address');
       $image = time() .'-'. $request->file('image')->getClientOriginalName();
       $request->file('image')->move(public_path('img') , $image);
       //create sol 1
    /* $restaurant = new restaurant();
       $restaurant->title = $name;
       $restaurant->address = $address;
       $restaurant->image = $image;
       $restaurant->save(); */

       //create sol 2
       restaurant::insert([
        'title' => $name,
        'address' => $address,
        'image' => $image
       ]);

       return redirect(route('restaurant-list'));
    }

    public function restaurantEdit($id)
    {
        $restaurant = restaurant::find($id);
        return view('admin.restaurant-edit' , ['restaurant' => $restaurant]);
    }

    public function restaurantUpdate(RestaurantRequest $request)
    {
        $request->validated();
        $restaurant = restaurant::findOrFail($request->input('id'))->update([
            'title' => $request->input('name'),
            'address' => $request->input('address'),
            'image' => $request->input('image')
        ]);

        return redirect(route('restaurant-list'));
    }

    public function restaurantDelete($id)
    {
        $restaurant = restaurant::findOrFail($id)->delete();
        return redirect(route('restaurant-list'));
        
    }
}















