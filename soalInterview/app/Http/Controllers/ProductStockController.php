<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ProductStockController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'bank_account_id' =>['required']
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(),Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $product = Product::create($request->all());
        return response()->json([
            'messsage' => 'Success', 'data' => $product
        ]);
    }
}
