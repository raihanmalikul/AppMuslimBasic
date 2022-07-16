<?php

namespace App\Controllers;

class PagesAdmin extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $username = $this->session->get("username");
        if(empty($username)) {
            $this->session->setFlashdata('msg_err', 'Anda Harus Login Terlebih Dahulu');
            return redirect()->to('/LoginAdmin');
        }
    }
    
    public function dashboard()
    {
        $data['title'] = "Dashboard | Muslim Basic";
        return view('Admin/Pages/Dashboard.php', $data);
    }

    public function allOrder()
    {
        $data['title'] = "All Order | Muslim Basic";
        return view('Admin/Pages/AllOrder.php', $data);
    }
    
    public function konfPay()
    {
        $data['title'] = "Konfirmasi Pembayaran | Muslim Basic";
        return view('Admin/Pages/KonfPay.php', $data);
    }
    
    public function allProduk()
    {
        $data['title'] = "All Produk | Muslim Basic";
        return view('Admin/Pages/AllProduk.php', $data);
    }
    
    public function inventaris()
    {
        $data['title'] = "Inventaris | Muslim Basic";
        return view('Admin/Pages/Inventaris.php', $data);
    }
    
    public function kategori()
    {
        $data['title'] = "Kategori | Muslim Basic";
        return view('Admin/Pages/Kategori.php', $data);
    }
    
    public function customerMData()
    {
        $data['title'] = "Data Customer | Muslim Basic";
        return view('Admin/Pages/CustomerMData.php', $data);
    }
    
    public function historyOrder()
    {
        $data['title'] = "History Order | Muslim Basic";
        return view('Admin/Pages/HistoryOrder.php', $data);
    }
    
    public function lprPenjualan()
    {
        $data['title'] = "Report Penjualan | Muslim Basic";
        return view('Admin/Pages/LprPenjualan.php', $data);
    }
    
    public function LprPengiriman()
    {
        $data['title'] = "Report Pengiriman | Muslim Basic";
        return view('Admin/Pages/LprPengiriman.php', $data);
    }
}
