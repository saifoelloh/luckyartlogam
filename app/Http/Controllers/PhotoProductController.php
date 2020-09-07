<?php

namespace App\Http\Controllers;

use App\PhotoProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('pages.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.dashboard.product.photos', [
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $photo = $request->file('photo')->store('public');
        try {
            PhotoProduct::create([
              'photo' => $photo,
              'product_id' => $product->id,
            ]);

            return redirect()
              ->route('product.show', $product->id)
              ->with([
                'message' => 'Berhasil menambahkan foto produk',
                'success' => true
              ]);
        } catch (Exception $e) {
            return redirect()
              ->route('product.index')
              ->with([
                'message' => 'Gagal menambahkan foto produk',
                'success' => false
              ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PhotoProduct  $photoProduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.dashboard.product.show', [
            'product' => $product,
            'photos' => $product->photos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PhotoProduct  $photoProduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PhotoProduct  $photoProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PhotoProduct  $photoProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $photo = PhotoProduct::findOrFail($id);
            $productId = $photo->product_id;
            Storage::delete($photo->photo);
            $photo->delete();

            return redirect()
              ->route('product.show', $productId)
              ->with([
                'message' => 'Berhasil menghapus foto produk',
                'success' => true
              ]);
        } catch (Exception $e) {
            return redirect()
              ->route('product.index')
              ->with([
                'message' => 'Gagal menghapus foto produk',
                'success' => false
              ]);
        }
    }
}
