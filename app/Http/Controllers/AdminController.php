<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $admins = User::latest()->get();
        if ($request->ajax()) {
            return DataTables::of($admins)
              ->addIndexColumn()
              ->make(true);
        }
        return view('pages.dashboard.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            User::create([
              'name' => $request['name'],
              'email' => $request['email'],
              'password' => Hash::make($request['password']),
            ]);

            return redirect()
              ->route('admin.index')
              ->with([
                'message' => 'Berhasil menambahkan admin baru',
                'success' => true
              ]);
        } catch (Exception $e) {
            return redirect()
              ->route('admin.index')
              ->with([
                'message' => 'Gagal menambahkan admin baru',
                'success' => false
              ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('pages.dashboard.admin.edit', [
            'admin' => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = User::findOrFail($id);
        $password = $request->password ? Hash::make($request['password']) : $admin->password;

        try {
            $admin->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => $password
            ]);

            return redirect()
              ->route('admin.index')
              ->with([
                'message' => 'Berhasil mengubah admin baru',
                'success' => true
              ]);
        } catch (Exception $e) {
            return redirect()
              ->route('admin.index')
              ->with([
                'message' => 'Gagal mengubah admin baru',
                'success' => false
              ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::destroy($id);

            return redirect()
              ->route('admin.index')
              ->with([
                'message' => 'Berhasil menghapus admin baru',
                'success' => true
              ]);
        } catch (Exception $e) {
            return redirect()
              ->route('admin.index')
              ->with([
                'message' => 'Gagal menghapus admin baru',
                'success' => false
              ]);
        }
    }
}
