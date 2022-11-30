<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Product::get();
        return view('admin.index', ['collections'=> $collections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'logo' => ['required']
        ]);
        
        $product = Product::create($request->except('logo'));
        
        $logoname = time() . '_' . $request->name . '.' . $request->logo->extension();

        
        if($request->hasFile('logo')) {
            // $request->logo = Storage::put('uploads/product',$request->file('logo'));
            // $product->save();
            $request->logo->move(public_path('images'), $logoname);
            $product->logo = $logoname;
            $product->save();
        }
        
        $product->status = $request->status; 
        $product->save();        

        // return 'success';
        return redirect()->route('admin_index')->with('success','data created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => ['required'],
        ]);
        // dd($product);
        
        $product->update($request->except('logo'));
        
        if($request->hasFile('logo')) {
            $logoname = time() . '_' . $request->name . '.' . $request->logo->extension();
            // $request->logo = Storage::put('uploads/product',$request->file('logo'));
            // $product->save();
            $request->logo->move(public_path('images'), $logoname);
            $product->logo = $logoname;
            $product->save();
        }
        
        $product->status = $request->status; 
        $product->save();        

        // return 'success';
        return redirect()->route('product.index')->with('success','data created successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response('success');
    }
}