<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Toaster;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $query = Inventory::paginate(15);
        $query = Inventory::latest()->paginate(5);

        $title = "Delete Inventory!!";
        $text = "Are you sure want to delete??";
        confirmDelete($title, $text);
        return view('inventory.index', [
            'title_web' => 'Inventory',
            'query' => $query,
            compact('query')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        #Generate Kode barang
        $code = Inventory::count();
        if ($code == 0) {
            $no_urut = 1;
        } else {
            $ambilKode = Inventory::all()->last();
            $no_urut = (int)substr($ambilKode->kode_barang, 5) + 1;
        }
        $buat_id   = str_pad($no_urut, 6, "0", STR_PAD_LEFT);
        $kode_barang = "ITR-$buat_id";
        return view(
            'inventory.create',
            compact('kode_barang'),
            [
                'title_web' => 'Tambah Inventory',
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_barang' => ['required', 'unique:inventories', 'string', 'max:20'],
            'nama_barang' => ['required', 'string', 'max:255'],
            'penempatan' => ['required', 'string', 'max:255'],
            'qr_code' => ['required', 'string', 'max:255'],
        ]);

        Inventory::create($validateData);
        return redirect()->route('inventory.index')->withtoast_success('Success Add Inventory', 'autoClose(5000)');
        
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
    public function edit($kode_barang)
    {
        return view('inventory.edit', [
            'title_web' => 'Edit Inventory',
            'row' => Inventory::find($kode_barang)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_barang)
    {
        $validateData = $request->validate([
            'nama_barang' => ['string', 'required', 'max:255'],
            'penempatan' => ['string', 'required', 'max:255'],
            'qr_code' => ['string', 'required', 'max:255'],
        ]);
        Inventory::find($kode_barang)->update($validateData);
        return redirect()->route('inventory.index')->withtoast_success('Success Update Inventory', 'autoClose(5000)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_barang)
    {
        Inventory::find($kode_barang)->destroy($kode_barang);
        return redirect()->route('inventory.index')->withtoast_success('success');
    }
}
