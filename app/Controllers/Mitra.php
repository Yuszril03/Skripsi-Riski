<?php

namespace App\Controllers;

class Mitra extends BaseController
{
    public function __construct()
    {

        $this->session = \Config\Services::session();
        // $this->session->stat();
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

    public function DataPemesananWisata()
    {
        return view('Mitra/Wisata/Data-Pemesanan-Wisata');
    }
    public function DataKamar()
    {
        return view('Mitra/Hotel/Data-Kamar');
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
    public function QrCodeWisata(){
        return view('Mitra/Wisata/Scan-QrCode-Wisata');
    }
    public function QrCodeHotel(){
        return view('Mitra/Hotel/Scan-QrCode-Hotel');
    }
    public function QrCodeRental(){
        return view('Mitra/Rental/Scan-QrCode-Rental');
    }
}
