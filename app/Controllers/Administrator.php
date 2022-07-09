<?php

namespace App\Controllers;

class Administrator extends BaseController
{
    public function index()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            return view('Administrator/Home');
        }
    }


    //Mitra Wisata
    public function MitraWisata()
    {
        return view('Administrator/Data-Mitra/Wisata/Mitra-Wisata');
    }
    public function TambahMitraWisata()
    {
        return view('Administrator/Data-Mitra/Wisata/Add-Wisata');
    }
    public function EditMitraWisata($id = false)
    {
        return view('Administrator/Data-Mitra/Wisata/Edit-Wisata');
    }
    public function DetailMitraWisata($id = false)
    {
        return view('Administrator/Data-Mitra/Wisata/Detail-Wisata');
    }

    //Mitra Hotel
    public function MitraHotel()
    {
        return view('Administrator/Data-Mitra/Hotel/Mitra-Hotel');
    }
    public function TambahMitraHotel()
    {
        return view('Administrator/Data-Mitra/Hotel/Add-Hotel');
    }
    public function EditMitraHotel($id = false)
    {
        return view('Administrator/Data-Mitra/Hotel/Edit-Hotel');
    }
    public function DetailMitraHotel($id = false)
    {
        return view('Administrator/Data-Mitra/Hotel/Detail-Hotel');
    }


    //Mitra Rental
    public function MitraRental()
    {
        return view('Administrator/Data-Mitra/Rental/Mitra-Rental');
    }
    public function TambahMitraRental()
    {
        return view('Administrator/Data-Mitra/Rental/Add-Rental');
    }
    public function EditMitraRental($id = false)
    {
        return view('Administrator/Data-Mitra/Rental/Edit-Rental');
    }

    public function DetailMitraRental($id = false)
    {
        return view('Administrator/Data-Mitra/Rental/Detail-Rental');
    }

    //Pemesanan
    public function PemesananWisata()
    {
        return view('Administrator/Data-Pemesanan/Pemesanan-Wisata');
    }
    public function PemesananRental()
    {
        return view('Administrator/Data-Pemesanan/Pemesanan-Rental');
    }
    public function PemesananHotel()
    {
        return view('Administrator/Data-Pemesanan/Pemesanan-Hotel');
    }

    //Berita Event
    public function BeritaEvent()
    {
        return view('Administrator/Kegiatan/Data-Kegiatan');
    }
    public function tambahBeritaEvent()
    {
        return view('Administrator/Kegiatan/Tambah-Data-Kegiatan');
    }
    public function detailBeritaEvent($id = false)
    {
        $data = [
            'DataID' => $id
        ];
        return view('Administrator/Kegiatan/Detail-Data-Kegiatan', $data);
    }
    public function editBeritaEvent($id = false)
    {
        $data = [
            'DataID' => $id
        ];
        return view('Administrator/Kegiatan/Edit-Data-Kegiatan',$data);
    }

    //Data User
    public function DataCustomer()
    {
        return view('Administrator/Data-Customer/Data-Customer');
    }
    public function tambahDataCustomer()
    {
        return view('Administrator/Data-Customer/Tambah-Data-Customer');
    }
    public function editDataCustomer()
    {
        return view('Administrator/Data-Customer/Edit-Data-Customer');
    }
    public function detailDataCustomer()
    {
        return view('Administrator/Data-Customer/Detail-Data-Customer');
    }
    public function RetingKomentar()
    {
        return view('Administrator/Reting-Komentar/Reting-Komentar');
    }
    public function detailRetingKomentar()
    {
        return view('Administrator/Reting-Komentar/detailReting-Komentar');
    }
}
