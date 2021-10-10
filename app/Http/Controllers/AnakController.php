<?php

namespace App\Http\Controllers;

use App\Models\anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = anak::all();
        if (count($data)) {
            $response = [
                'status' => 'success',
                'data' => $data
            ];
            return response($response, 201);
        } else {
            $response = [
                'status' => 'gagal',
                'messages' => 'Belum ada Data',
                'data' => $data
            ];
            return response($response, 404);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'inisialNama' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'beratBadan' => 'required',
            'tinggiBadan' => 'required',
            'jenisKelamin' => 'required'
        ]);
        anak::create($data);
        $search = $data['inisialNama'];
        $response = [
            'status' => 'success',
            'messages' => 'Data Anak Berhasil Masuk',
            'data' => anak::find($search)
        ];
        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(anak $anak)
    {
        $showName = anak::find($anak);
        if ($showName) {
            $response = [
                'status' => 'success',
                'messages' => 'Data Anak Berhasil Didapatkan',
                'data' => $showName
            ];
            return response($response, 201);
        } else {
            $response = [
                'status' => 'gagal',
                'messages' => 'Data Anak tidak ditemukan!',
            ];
            return response($response, 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anak $anak)
    {
        if ($anak) {
            $updateData = $request->validate([
                'inisialNama' => 'required',
                'nama' => 'required',
                'umur' => 'required',
                'beratBadan' => 'required',
                'tinggiBadan' => 'required',
                'jenisKelamin' => 'required'
            ]);
            $anak->update($updateData);
            $response = [
                'status' => 'success',
                'messages' => 'Data Anak Berhasil Di Update',
                'data' => $anak,
            ];
            return response($response, 201);
        } else {
            $response = [
                'status' => 'gagal',
                'messages' => 'Data Anak gagal Di Update',
            ];
            return response($response, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        anak::destroy($id);
        $response = [
            'status' => 'success',
            'messages' => 'Data Anak Berhasil Di Hapus',
            'data' => anak::all()
        ];
        return response($response, 201);
    }
}
