<?php

namespace App\Controllers;

class Administrator extends BaseController
{
    public function __construct()
    {

        $this->session = \Config\Services::session();
        // $this->session->stat();
    }
    public function index()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Home');
        }
    }


    //Mitra Wisata
    public function MitraWisata()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Mitra/Wisata/Mitra-Wisata');
        }
    }
    public function TambahMitraWisata()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Mitra/Wisata/Add-Wisata');
        }
    }
    public function EditMitraWisata($idMitra = false, $idWisata = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
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
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
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
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Mitra/Hotel/Mitra-Hotel');
        }
    }
    public function TambahMitraHotel()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Mitra/Hotel/Add-Hotel');
        }
    }
    public function EditMitraHotel($idMitra = false, $idHotel = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataIDMitra' => $idMitra,
                'DataIDHotel' => $idHotel
            ];
            return view('Administrator/Data-Mitra/Hotel/Edit-Hotel', $data);
        }
    }
    public function DetailMitraHotel($idMitra = false, $idHotel = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataIDMitra' => $idMitra,
                'DataIDHotel' => $idHotel
            ];
            return view('Administrator/Data-Mitra/Hotel/Detail-Hotel', $data);
        }
    }


    //Mitra Rental
    public function MitraRental()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Mitra/Rental/Mitra-Rental');
        }
    }
    public function TambahMitraRental()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Mitra/Rental/Add-Rental');
        }
    }
    public function EditMitraRental($idMitra = false, $idRental = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
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
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataIDMitra' => $idMitra,
                'DataIDRental' => $idRental
            ];
            return view('Administrator/Data-Mitra/Rental/Detail-Rental', $data);
        }
    }

    //Pemesanan
    //wisata
    public function PemesananWisata()
    {
        return view('Administrator/Data-Pemesanan/Data-Pemesanan-Wisata/Pemesanan-Wisata');
    }

    public function detailPemesananWisata($id = false, $idcustomer = false, $idmitra = false, $idBank = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id,
                'DataIDCustomer' => $idcustomer,
                'DataIDMitra' => $idmitra,
                'DataIDBank' => $idBank
            ];
            return view('Administrator/Data-Pemesanan/Data-Pemesanan-Wisata/Detail-Pemesanan-Wisata', $data);
        }
    }

    //rental
    public function PemesananRental()
    {
        return view('Administrator/Data-Pemesanan/Data-Pemesanan-Rental/Pemesanan-Rental');
    }

    public function detailPemesananRental($id = false, $idcustomer = false, $idmitra = false, $idBank = false, $idMobil = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id,
                'DataIDCustomer' => $idcustomer,
                'DataIDMitra' => $idmitra,
                'DataIDBank' => $idBank,
                'DataIDMobil' => $idMobil
            ];
            return view('Administrator/Data-Pemesanan/Data-Pemesanan-Rental/Detail-Pemesanan-Kendaraan', $data);
        }
    }

    //hotel
    public function PemesananHotel()
    {
        return view('Administrator/Data-Pemesanan/Data-Pemesanan-Hotel/Pemesanan-Hotel');
    }

    public function detailPemesananHotel($id = false, $idcustomer = false, $idmitra = false, $idBank = false, $idKamar = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id,
                'DataIDCustomer' => $idcustomer,
                'DataIDMitra' => $idmitra,
                'DataIDBank' => $idBank,
                'DataIDKamar' => $idKamar
            ];
            return view('Administrator/Data-Pemesanan/Data-Pemesanan-Hotel/Detail-Pemesanan-Hotel', $data);
        }
    }

    //Berita Event
    public function BeritaEvent()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Kegiatan/Data-Kegiatan');
        }
    }
    public function tambahBeritaEvent()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Kegiatan/Tambah-Data-Kegiatan');
        }
    }
    public function detailBeritaEvent($id = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id
            ];
            return view('Administrator/Kegiatan/Detail-Data-Kegiatan', $data);
        }
    }
    public function editBeritaEvent($id = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id
            ];
            return view('Administrator/Kegiatan/Edit-Data-Kegiatan', $data);
        }
    }

    //Data Customer
    public function DataCustomer()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Customer/Data-Customer');
        }
    }
    public function tambahDataCustomer()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Customer/Tambah-Data-Customer');
        }
    }
    public function editDataCustomer($id = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id
            ];
            return view('Administrator/Data-Customer/Edit-Data-Customer', $data);
        }
    }
    public function detailDataCustomer($id = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id
            ];
            return view('Administrator/Data-Customer/Detail-Data-Customer', $data);
        }
    }
    //rating Komentar
    public function RetingKomentar()
    {
        return view('Administrator/Reting-Komentar/Reting-Komentar');
    }
    public function detailRetingKomentar()
    {
        return view('Administrator/Reting-Komentar/detailReting-Komentar');
    }

    // Kata Sandi
    public function KataSandi()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Kata-Sandi');
        }
    }
    public function KataSandiDefault($sandi)
    {
        $newSession = [
            'KataSandi' => $sandi
        ];
        $this->session->set($newSession);
        echo json_encode(10);
    }
    public function KataSandiUbah($sandi)
    {
        $newSession = [
            'KataSandi' => $sandi
        ];
        $this->session->set($newSession);
        echo json_encode(10);
    }
    public function Keluar()
    {
        $this->session->destroy();
        return redirect()->to(base_url('/Masuk-Administrator'));
    }

    //Data Version Android
    public function DataVersionAndroid()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Version-Android/Data-Version-Android');
        }
    }

    public function tambahDataVersionAndroid()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Data-Version-Android/Tambah-Data-Version-Android');
        }
    }
    public function editVersionAndroid($id = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id
            ];
            return view('Administrator/Data-Version-Android/Edit-Data-Version-Android', $data);
        }
    }

    //Bank
    public function DaftarBank()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Bank/Daftar-Bank');
        }
    }

    public function tambahBank()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return view('Administrator/Bank/Tambah-Bank');
        }
    }

    public function editBank($id = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id
            ];
            return view('Administrator/Bank/Edit-Bank', $data);
        }
    }

    public function detailBank($id = false)
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') != 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            $data = [
                'DataID' => $id
            ];
            return view('Administrator/Bank/Detail-Bank', $data);
        }
    }
}
