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
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Wisata') {
            return view('Mitra/Wisata/Data-Pemesanan-Wisata');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Wisata') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function DataPemesananKamar()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Hotel') {
            return view('Mitra/Hotel/Data-Pemesanan-Kamar');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Hotel') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function DataPemesananRental()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Rental') {
            return view('Mitra/Rental/Data-Pemesanan-Rental');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Rental') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    //Detail Pemesanan
    public function DeteilPemesananWisata($id = false, $idcustomer = false, $idmitra = false, $idBank = false)
    {

        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Wisata') {
            $data = [
                'DataID' => $id,
                'DataIDCustomer' => $idcustomer,
                'DataIDMitra' => $idmitra,
                'DataIDBank' => $idBank
            ];
            return view('Mitra/Wisata/Detail-Pemesanan-wisata', $data);
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {

            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Wisata') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function DeteilPemesananKamar($id = false, $idcustomer = false, $idmitra = false, $idBank = false, $idKamar = false)
    {

        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Hotel') {
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
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Hotel') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function DeteilPemesananMobil($id = false, $idcustomer = false, $idmitra = false, $idBank = false, $idMobil = false)
    {

        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Rental') {
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
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Rental') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function DataKamar()
    {
        // echo $detailkamar;
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Hotel') {
            return view('Mitra/Hotel/Data-Kamar');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Hotel') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function DeteilkamarMitra($detailkamar)
    {
        // echo $detailkamar;
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Hotel') {
            $data = [
                'DataID' => $detailkamar
            ];
            return view('Mitra/Hotel/Detail-Kamar', $data);
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {

            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Hotel') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function DetailMobil($detailmobil)
    {

        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Rental') {
            $data = [
                'IDData' => $detailmobil
            ];
            return view('Mitra/Rental/Detail-Mobil', $data);
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {

            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Rental') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function DataMobilRental()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Rental') {
            return view('Mitra/Rental/Data-Rental-Mobil');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Rental') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
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
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Wisata') {
            return view('Mitra/Wisata/Scan-QrCode-Wisata');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Wisata') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function QrCodeHotel()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Hotel') {
            return view('Mitra/Hotel/Scan-QrCode-Hotel');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Hotel') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function QrCodeRental()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Rental') {
            return view('Mitra/Rental/Scan-QrCode-Rental');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Rental') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    //Review
    public function ReviewWisata()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Wisata') {
            return view('Mitra/Wisata/Review-Wisata');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Wisata') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function ReviewKamarHotel()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Hotel') {
            return view('Mitra/Hotel/Review-Kamar-Hotel');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Hotel') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }

    public function ReviewRentalMobil()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') == 'Mitra-Rental') {
            return view('Mitra/Rental/Review-Rental');
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE) && session()->get('Jenis') != 'Admin' && session()->get('Jenis') != 'Mitra-Rental') {
            return redirect()->to(base_url('/Beranda-Mitra'));
        }
    }
}
