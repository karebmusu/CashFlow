<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FatherController extends Controller
{
    public function index()
    {
        return "hello";
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_transaksi' => 'required|max:255',
            'nominal' => 'required|max:255',
            'status' => 'required|max:255',
            'kategori' => 'required|max:255',
            'tanggalinput' => 'required|max:255',

        ]);

        User::create([
            'nama_transaksi' => $request->nama_transaksi,
            'nominal' => $request->nominal,
            'status'=> $request->status,
            'kategori'=> $request->kategori,
            'tanggalinput'=> $request->tanggalinput,
        ]);

        return redirect()->route('dashboard');
    }
}


