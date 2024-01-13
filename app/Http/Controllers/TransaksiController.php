<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
 public function datapaket(){

    $data = Transaksi::all();
    return view('admin.transaksi.datapaket',compact('data'));
 }
 public function tambahpegawai(){
    return view('admin.transaksi.tambahdata');
 }
 public function insertdata(Request $request){
   // dd($request->all());
    Transaksi::create($request->all());
    return redirect()->route('home');

 }
 public function delete($id){
    $data = Transaksi::find($id);
    $data->delete();
    return redirect()->route('admin.transaksi.datapaket');
   }
}
