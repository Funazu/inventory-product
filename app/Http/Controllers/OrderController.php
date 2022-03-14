<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Barang $barang)
    {
        return view('order.all', [
            'title' => 'ALL ORDER',
            'active' => 'home',
            'order' => Order::all()
        ])->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Barang $barang)
    {
        $ongkir = 25000;
        return view('order.index', [
            'title' => 'Order',
            'active' => 'home',
            'ongkir' => $ongkir

        ], compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // info($request);
        $validatedData = $request->validate([
            'jumlah_pembelian' => 'required',
            'barang_id' => 'required',
            'total_harga' => 'required',
            'alamat' => 'required',
            'nama_pembeli' => 'required',
            'ekspedisi' => 'required',
            'nomer_telepon' => 'required'
        ]);

        $order = Order::create($validatedData);

        return view('order.success', [
            'title' => 'Success',
            'active' => 'home'
        ], compact('order'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $ongkir = 25000;
        return view('order.kwitansi', [
            'title' => 'Kwitansi',
            'active' => 'home',
            'ongkir' => $ongkir
        ], compact('order'));
    }

    // public function all()
    // {
    //     return view('order.all', [
    //         'title' => 'ALL',
    //         'active' => 'home'
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
