<?php

namespace App\Http\Controllers;

use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MangonController extends Controller
{
    public function index()
    {
        $kode = Str::random(10);
        return view('landing', compact('kode'));
    }

    public function hitung($kode)
    {
        $value = Value::where('kode', $kode)->get();
        return view('hitung', compact('kode', 'value'));
    }

    public function hitungStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data' => 'required',
            'kode' => 'required',
            'nama_toko' => 'required',
        ]);
        $sum = $request->v1 + $request->v2 + $request->v3 + $request->v4 + $request->v5 + $request->v6 + $request->v7 + $request->v8;
        $value = new Value();
        $value->data = $request->data;
        $value->kode = $request->kode;
        $value->nama_toko = $request->nama_toko;
        $value->value1 = $request->v1;
        $value->value2 = $request->v2;
        $value->value3 = $request->v3;
        $value->value4 = $request->v4;
        $value->value5 = $request->v5;
        $value->value6 = $request->v6;
        $value->value7 = $request->v7;
        $value->value8 = $request->v8;
        $value->sum = $sum;
        $value->save();

        return redirect()->route('hitung', ['kode' => $request->kode])->with('success', 'Data berhasil disimpan');
    }
    public function result($kode){
        $values = Value::where('kode', $kode)->get();
        if($values->count() < 2){
            return redirect()->route('hitung', ['kode' => $kode])->with('error', 'Data tidak cukup, Minimal 2 Data Yang dibandingkan');
        }

        // Menemukan nilai sum terbesar
        $maxSumValue = $values->max('sum');
        // Mengambil data yang memiliki sum terbesar
        $maxSumRecord = $values->where('sum', $maxSumValue)->first();
        
        
        // Anda bisa mengembalikan atau memproses $maxSumRecord sesuai kebutuhan
        return view('result', compact('maxSumRecord', 'kode'));
    }
}