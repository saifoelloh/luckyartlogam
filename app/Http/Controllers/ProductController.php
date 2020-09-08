<?php

namespace App\Http\Controllers;

use App\PhotoProduct;
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
        // $request->validate([
        //   'yt_link' => 'nullable'
        // ]);
        $photo = $request->file('photo')->store('public');
        $yt_link = str_replace('https://youtu.be/', 'https://www.youtube.com/embed/',$request->yt_link );

        try {
            Product::create([
                'name' => $request->name,
                'category' => $request->category,
                'description' => $request->description,
                'photo' => $photo,
                'yt_link' => $yt_link,
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

        return view('pages.dashboard.product.detail', [
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
        // $request->validate([
        //   'yt_link' => 'nullable'
        // ]);

        $product = Product::find($id);
        $photo = $product->photo;
        if ($request->file('photo')!=NULL) {
            Storage::delete($photo);
            $photo = $request->file('photo')->store('public');
        }
        // check youtube link
        if(strstr($request->yt_link,'https://youtu.be/')){
          $yt_link = str_replace('https://youtu.be/', 'https://www.youtube.com/embed/',$request->yt_link );
        }else{
          $yt_link = $request->yt_link;
        }

        try {
            $product->update([
                'name' => $request->name,
                'category' => $request->category,
                'description' => $request->description,
                'photo' => $photo,
                'yt_link' => $yt_link,
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
        $photos = PhotoProduct::where('product_id', $id)->get();
        
        $product = Product::findOrFail($id);
        if($photos){
          foreach($photos as $p){
            Storage::delete($p->photo);
            $p->delete();
          }
        }
        Storage::delete($product->photo);
            try {
              
              // PhotoProduct::where('product_id', $id)->delete();
              // Storage::where('product_id', $id)->delete();
                // Storage::where($photos->photo)->delete();
                // $photos->delete();
                $product->delete();
                // Storage::where('')
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
