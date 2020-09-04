<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::latest()->get();
        if ($request->ajax()) {
            return DataTables::of($products)
              ->addIndexColumn()
              ->make(true);
        }

        return view('pages.dashboard.product.index' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo')->store('public');

        try {
            Product::create([
                'name' => $request->name,
                'category' => $request->category,
                'description' => $request->description,
                'photo' => $photo,
            ]);

            return redirect()
              ->route('product.index')
              ->with([
                'message' => 'Berhasil menambahkan produk baru',
                'success' => true
              ]);
        } catch (Exception $e) {
            return redirect()
              ->route('product.index')
              ->with([
                'message' => 'Gagal menambahkan produk baru',
                'success' => false
              ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.dashboard.product.show', [
            'product' => $product,
            'photos' => $product->photos,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if ($product==NULL) {
          return abort(400, 'Product Not Found');
        }

        return view('pages.dashboard.product.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $photo = $product->photo;
        if ($request->file('photo')!=NULL) {
            Storage::delete($photo);
            $photo = $request->file('photo')->store('public');
        }

        try {
            $product->update([
                'name' => $request->name,
                'category' => $request->category,
                'description' => $request->description,
                'photo' => $photo,
            ]);
            return redirect()
              ->route('product.index')
              ->with([
                'message' => 'Berhasil mengubah produk',
                'success' => true
              ]);
        } catch (Exception $e) {
            return redirect()
              ->route('product.index')
              ->with([
                'message' => 'Gagal mengubah produk',
                'success' => false
              ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if (Storage::delete($product->photo)) {
            try {
                $product->delete();
                return redirect()
                  ->route('product.index')
                  ->with([
                    'message' => 'Berhasil menghapus produk',
                    'success' => true
                  ]);
            } catch (Exception $e) {
                return redirect()
                  ->route('product.index')
                  ->with([
                    'message' => 'Gagal menghapus produk',
                    'success' => false
                  ]);
            }
        }
    }
}
