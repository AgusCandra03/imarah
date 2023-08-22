<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index()
    {
        $kategoris = Kategori::all();
        $produks = Produk::with('kategoris')->get();
        return view('produk.produk', compact('produks', 'kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('produk.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'  => ['required'],
            'slug'  => ['required'],
            'harga'  => ['required'],
            'id_kategori'  => ['required'],
            'foto_produk'  => ['required'],
            'deskripsi' => ['required']
        ]);

        Produk::create($request->all());

        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $this->validate($request, [
            'judul'  => ['required'],
            'slug'  => ['required'],
            'harga'  => ['required'],
            'id_kategori'  => ['required'],
            'foto_produk'  => ['required'],
            'deskripsi' => ['required']
        ]);

        $produk->create($request->all());

        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
