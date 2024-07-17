<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    // get all product lists
    public function productList(){
        $products = Product::get();
        $category = Category::get();
        $data = [
            'products' => $products,
            '$category' => $category
        ];
        return response()->json($data, 200);
    }

    // get category
    public function categoryList(){
        $category = Category::get();
        return response()->json($category, 200);
    }

    // create category
    public function categoryCreate(Request $request){
        $data = $this->getData($request);
        $response = Category::create($data);
        return response()->json($data, 200);
    }

    // delete category
    public function deleteCategory(Request $request){
        $data = Category::where('id',$request->category_id)->first();
        if(isset($data)){
            Category::where('id',$request->category_id)->delete();
            return response()->json(['status'=> true,'message' => 'delete success', 'deleteData' => $data], 200);
        }
        return response()->json(['status'=> false, 'message' => 'There is no category'], 200);
    }

    // category details
    public function categoryDetails(Request $request){
        $data = Category::where('id',$request->category_id)->first();
        if(isset($data)){
            return response()->json(['status'=> true, 'category' => $data], 200);
        }
        return response()->json(['status'=> false, 'category' => 'There is no category'], 500);
    }

    // category update
    public function updateCategory(Request $request){
        $categoryId = $request->category_id;
        $dbSource = Category::where('id', $categoryId)->first();
        if(isset($dbSource)){
            $data = $this->getData($request);
            $response = Category::where('id',$categoryId)->update();
            return response()->json(['status' => true, 'message' => 'Update Success', 'category' => $response], 200);
        }

        return response()->json(['status'=> false, 'message' => 'There is no category for update'], 500);
    }

    private function getData($request){
        return [
            'name' => $request->category_name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
