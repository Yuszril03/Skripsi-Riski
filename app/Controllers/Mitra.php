<?php

namespace App\Controllers;

class Mitra extends BaseController
{
    public function __construct()
    {

        $this->session = \Config\Services::session();
        // $this->session->stat();
    }

    public function Keluar()
    {
        $this->session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function index()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') != 'Admin') {
            return view('Mitra/Home');
        }
    }

    // wisata
    public function Profile()
    {
        return view('Mitra/Edit-Profile');
    }
    public function Katasandi()
    {
        return view('Mitra/Kata-Sandi');
    }

    public function KataSandiDefaultMitra($sandi)
    {
        $newSession = [
            'KataSandi' => $sandi
        ];
        $this->session->set($newSession);
        echo json_encode(10);
    }
    public function KataSandiUbahMitra($sandi)
    {
        $newSession = [
            'KataSandi' => $sandi
        ];
        $this->session->set($newSession);
        echo json_encode(10);
    }

    //Data Pemesanan
    public function DataPemesananWisata()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            return view('Mitra/Wisata/Data-Pemesanan-Wisata');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        }
    }

    public function DataPemesananKamar()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            return view('Mitra/Hotel/Data-Pemesanan-Kamar');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        }
    }

    public function DataPemesananRental()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            return view('Mitra/Rental/Data-Pemesanan-Rental');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            
            return redirect()->to(base_url('/'));
        }
    }

    //Detail Pemesanan
    public function DeteilPemesananWisata($id = false, $idcustomer = false, $idmitra = false, $idBank = false)
    {

        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            $data = [
                'DataID' => $id,
                'DataIDCustomer' => $idcustomer,
                'DataIDMitra' => $idmitra,
                'DataIDBank' => $idBank
            ];
            return view('Mitra/Wisata/Detail-Pemesanan-wisata', $data);
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {

            return redirect()->to(base_url('/'));
        }
    }

    public function DeteilPemesananKamar($id = false, $idcustomer = false, $idmitra = false, $idBank = false, $idKamar = false )
    {

        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            $data = [
                'DataID' => $id,
                'DataIDCustomer' => $idcustomer,
                'DataIDMitra' => $idmitra,
                'DataIDBank' => $idBank,
                'DataIDKamar' => $idKamar
            ];
            return view('Mitra/Hotel/Detail-Pemesanan-Kamar', $data);
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {

            return redirect()->to(base_url('/'));
        }
    }

    public function DeteilPemesananMobil($id = false, $idcustomer = false, $idmitra = false, $idBank = false, $idMobil = false)
    {

        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            $data = [
                'DataID' => $id,
                'DataIDCustomer' => $idcustomer,
                'DataIDMitra' => $idmitra,
                'DataIDBank' => $idBank,
                'DataIDMobil' => $idMobil
            ];
            return view('Mitra/Rental/Detail-Pemesanan-Rental', $data);
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {

            return redirect()->to(base_url('/'));
        }
    }

    public function DataKamar()
    {
        // echo $detailkamar;
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            return view('Mitra/Hotel/Data-Kamar');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        }
    }

    public function DeteilkamarMitra($detailkamar)
    {
        // echo $detailkamar;
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            $data = [
                'DataID' => $detailkamar
            ];
            return view('Mitra/Hotel/Detail-Kamar', $data);
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {

            return redirect()->to(base_url('/'));
        }
    }

    public function DetailMobil($detailmobil)
    {

        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            $data = [
                'IDData' => $detailmobil
            ];
            return view('Mitra/Rental/Detail-Mobil', $data);
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {

            return redirect()->to(base_url('/'));
        }
    }

    public function DataMobilRental()
    {
        return view('Mitra/Rental/Data-Rental-Mobil');
    }

    public function UpNameProfileWisata()
    {
        $newSessionWisata = [
            'Email' => $this->request->getVar('EmailMitra'),
            'Nama' => $this->request->getVar('NamaMitra')
        ];
        $this->session->set($newSessionWisata);
        echo json_encode(1);
    }
    public function UpNameProfileHotel()
    {
        $newSessionHotel = [
            'Email' => $this->request->getVar('EmailMitra'),
            'Nama' => $this->request->getVar('NamaMitra')
        ];
        $this->session->set($newSessionHotel);
        echo json_encode(1);
    }
    public function UpNameProfileRental()
    {
        $newSessionRental = [
            'Email' => $this->request->getVar('EmailMitra'),
            'Nama' => $this->request->getVar('NamaMitra')
        ];
        $this->session->set($newSessionRental);
        echo json_encode(1);
    }

    //scan QrCode Wisata
    public function QrCodeWisata()
    {
        return view('Mitra/Wisata/Scan-QrCode-Wisata');
    }
    public function QrCodeHotel()
    {
        return view('Mitra/Hotel/Scan-QrCode-Hotel');
    }
    public function QrCodeRental()
    {
        return view('Mitra/Rental/Scan-QrCode-Rental');
    }
//Review
    public function ReviewWisata()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            return view('Mitra/Wisata/Review-Wisata');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        }
    }

    public function ReviewKamarHotel()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin') {
            return view('Mitra/Hotel/Review-Kamar-Hotel');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        }
    }
}
