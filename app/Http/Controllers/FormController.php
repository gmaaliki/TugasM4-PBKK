<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation;

class FormController extends Controller
{
    public function validationMessage() {
        $messages = [
            'nama.required' => 'Masukkan nama',
            'nrp.required' => 'Masukkan NRP',
            'tempat-lahir.required' => 'Masukkan tempat lahir',
            'tanggal-lahir.required' => 'Pilih tanggal lahir',
            'foto.required' => 'Masukkan foto',
            'foto.mimes' => 'Tipe file harus berupa :values',
            'foto.max' => 'Ukuran file tidak boleh melebihi :values KB',
            'bilangan-desimal.required' => 'Masukkan bilangan desimal antara 2.5 sampai 99.99',
            'bilangan-desimal.between' => 'Bilangan desimal harus berada di antara :min dan :max',

            'regex' => 'Input hanya boleh mengandung huruf dan spasi',
            'numeric' => 'Input hanya boleh mengandung bilangan',
        ];
        return $messages;
    }

    public function formValidation(Request $request) {
        $request->validate([
            'nama' => 'required|regex:/^[A-Za-z\s]+$/',
            'nrp' => 'required|numeric',
            'tempat-lahir' => 'required|regex:/^[A-Za-z\s]+$/',
            'tanggal-lahir' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:2048',
            'bilangan-desimal' => 'required|numeric|between:2.50,99.99',
        ], $this->validationMessage());

        $fileName = $request->foto->getClientOriginalName();
        $request->foto->storeAs('public/images', $fileName);

        $results = [
            'foto' => $fileName,
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'tempat-lahir' => $request->input('tempat-lahir'),
            'tanggal-lahir' => $request->input('tanggal-lahir'),
            'bilangan-desimal' => $request->input('bilangan-desimal'),
        ];

        return redirect('/result')->with(['results' => $results, 'status' => 'Berhasil']);
    }

    public function result(){
        $results = session()->get('results');

        return view('result', [
           'results'=>$results
        ]);
    }
}
