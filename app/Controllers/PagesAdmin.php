<?php

namespace App\Controllers;

use App\Models;

class PagesAdmin extends BaseController
{
    protected $product;
    protected $profil;
    protected $order;

    public function __construct()
    {
        $this->product = new Models\MProductModel();
        $this->profil   = new Models\MProfilModel();
        $this->order   = new Models\MOrderModel();
        $this->session = \Config\Services::session();
        $username = $this->session->get("logged_in");
        if (empty($username)) {
            $this->session->setFlashdata('msg_err', 'Anda Harus Login Terlebih Dahulu');
            return redirect()->to('/LoginAdmin');
        }
    }

    public function dashboard()
    {
        
        $qryProdCount   = $this->product->selectCount('id')->get()->getRowArray();
        $qtyOrderCount  = $this->order->selectCount('id')->get()->getRowArray();
        $qtyProfilCount = $this->profil->selectCount('id')->get()->getRowArray();
        $qtyOrderSum    = $this->order->selectSum('subTotal')->get()->getRowArray();

        // dd($qtyOrderSum);

        $countProd   = ($qryProdCount != null) ? $qryProdCount['id'] : "0";
        $countOrder  = ($qtyOrderCount != null) ? $qtyOrderCount['id'] : "0";
        $countProfil = ($qtyProfilCount != null) ? $qtyProfilCount['id'] : "0";
        $sumOrder    = ($qtyOrderSum['subTotal'] != null) ? $qtyOrderSum['subTotal'] : "0";

        $data['countProd']   = $countProd;
        $data['countOrder']  = $countOrder;
        $data['countProfil'] = $countProfil;
        $data['sumOrder']    = $sumOrder;
        $data['title']       = "Dashboard | Muslim Basic";

        return view('Admin/Pages/Dashboard', $data);
    }

    public function allOrder()
    {
        $data['title'] = "All Order | Muslim Basic";
        return view('Admin/Pages/AllOrder', $data);
    }

    public function konfPay()
    {
        $data['title'] = "Konfirmasi Pembayaran | Muslim Basic";
        return view('Admin/Pages/KonfPay', $data);
    }

    public function masterProducts()
    {
        $data['title'] = "Master Products | Muslim Basic";
        return view('Admin/Pages/MasterProducts', $data);
    }

    public function inventaris()
    {
        $data['title'] = "Inventaris | Muslim Basic";
        return view('Admin/Pages/Inventaris', $data);
    }

    public function kategori()
    {
        $data['title'] = "Kategori | Muslim Basic";
        return view('Admin/Pages/Kategori', $data);
    }

    public function customerMData()
    {
        $data['title'] = "Data Customer | Muslim Basic";
        return view('Admin/Pages/CustomerMData', $data);
    }

    public function historyOrder()
    {
        $data['title'] = "History Order | Muslim Basic";
        return view('Admin/Pages/HistoryOrder', $data);
    }

    public function lprPenjualan()
    {
        $data['title'] = "Report Penjualan | Muslim Basic";
        return view('Admin/Pages/LprPenjualan', $data);
    }

    public function LprPengiriman()
    {
        $data['title'] = "Report Pengiriman | Muslim Basic";
        return view('Admin/Pages/LprPengiriman', $data);
    }
}
