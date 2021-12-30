<?php

namespace App\Http\Controllers\Post;

use App\Models\Data_pemohon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DataPemohonController extends Controller
{
    public function post(Request $request){
       
        // $request->validate([
        //     'namepemohon' => ['required'],
        // ]);
       
        // return $req->namaPemohon;

        // dd($request);
        
        Data_pemohon::create([
           "namaPemohon" => $request->namaPemohon,
           "alamat" => $request->alamat,
           "desaKelurahan" => $request->desaKelurahan,
           "kecamatan" => $request->kecamatan,
           "kegiatan" => $request->kegiatan,
           "sertifikatHakAtasTanah" => $request->sertifikatHakAtasTanah,
           "dokumenPengukuran" => $request->dokumenPengukuran,
           "fotoCopyKtpKK" => $request->fotoCopyKtpKK,
           "fotoCopyKtpIdentitasPemilikHak" => $request->fotoCopyKtpIdentitasPemilikHak,
           "suratKuasaPermohonan" => $request->suratKuasaPermohonan,
           "suratPermohonan" => $request->suratPermohonan,
           "fotoCopyPajakBumiBangunan" => $request->fotoCopyPajakBumiBangunan,
           "detailPermohonanPengukuran" => $request->detailPermohonanPengukuran,
        ]);


        return redirect('/dashboard')->with('success','Data berhasil di tambahkan');
    }

    public function hapus($id){

        Data_pemohon::destroy($id);
        return redirect('/data')->with('delete','Data berhasil di hapus');
    }


    public function edit($id){
       $data =  Data_pemohon::find($id);
    //    return compact('data',$data);
        return view('/edit', compact('data',$data));
    }

    public function edits(Request $request , $id){
        Data_pemohon::where('id', $id)
        ->update([
            "namaPemohon" => $request->namaPemohon,
            "alamat" => $request->alamat,
            "desaKelurahan" => $request->desaKelurahan,
            "kecamatan" => $request->kecamatan,
            "kegiatan" => $request->kegiatan,
            "sertifikatHakAtasTanah" => $request->sertifikatHakAtasTanah,
            "dokumenPengukuran" => $request->dokumenPengukuran,
            "fotoCopyKtpKK" => $request->fotoCopyKtpKK,
            "fotoCopyKtpIdentitasPemilikHak" => $request->fotoCopyKtpIdentitasPemilikHak,
            "suratKuasaPermohonan" => $request->suratKuasaPermohonan,
            "suratPermohonan" => $request->suratPermohonan,
            "fotoCopyPajakBumiBangunan" => $request->fotoCopyPajakBumiBangunan,
            "detailPermohonanPengukuran" => $request->detailPermohonanPengukuran,
         ]);
        return redirect('/data')->with('update','Data berhasil di update');
    }
}
