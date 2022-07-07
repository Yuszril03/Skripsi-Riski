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
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            return view('Administrator/Data-Mitra/Wisata/Mitra-Wisata');
        }
    }
    public function TambahMitraWisata()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            return view('Administrator/Data-Mitra/Wisata/Add-Wisata');
        }
    }
    public function EditMitraWisata($idMitra = false, $idWisata = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            $data = [
                'DataIDMitra' => $idMitra,
                'DataIDWisata' => $idWisata
            ];
            return view('Administrator/Data-Mitra/Wisata/Edit-Wisata', $data);
        }
    }
    public function DetailMitraWisata($idMitra = false, $idWisata = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            $data = [
                'DataIDMitra' => $idMitra,
                'DataIDWisata' => $idWisata
            ];
            return view('Administrator/Data-Mitra/Wisata/Detail-Wisata', $data);
        }
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
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            return view('Administrator/Data-Mitra/Rental/Mitra-Rental');
        }
    }
    public function TambahMitraRental()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            return view('Administrator/Data-Mitra/Rental/Add-Rental');
        }
    }
    public function EditMitraRental($idMitra = false, $idRental = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            $data = [
                'DataIDMitra' => $idMitra,
                'DataIDRental' => $idRental
            ];
            return view('Administrator/Data-Mitra/Rental/Edit-Rental', $data);
        }
    }

    public function DetailMitraRental($idMitra = false, $idRental = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            $data = [
                'DataIDMitra' => $idMitra,
                'DataIDRental' => $idRental
            ];
            return view('Administrator/Data-Mitra/Rental/Detail-Rental', $data);
        }
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
        return view('Administrator/Berita-Event/Berita-Event');
    }
    public function tambahBeritaEvent()
    {
        return view('Administrator/Berita-Event/Tambah-Berita-Event');
    }
    public function detailBeritaEvent()
    {
        return view('Administrator/Berita-Event/Detail-Berita-Event');
    }
    public function editBeritaEvent()
    {
        return view('Administrator/Berita-Event/Edit-Berita-Event');
    }

    //Data Customer
    public function DataCustomer()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            return view('Administrator/Data-Customer/Data-Customer');
        }
    }
    public function tambahDataCustomer()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            return view('Administrator/Data-Customer/Tambah-Data-Customer');
        }
    }
    public function editDataCustomer($id = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            $data = [
                'DataID' => $id
            ];
            return view('Administrator/Data-Customer/Edit-Data-Customer', $data);
        }
    }
    public function detailDataCustomer($id = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else {
            $data = [
                'DataID' => $id
            ];
            return view('Administrator/Data-Customer/Detail-Data-Customer', $data);
        }
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
