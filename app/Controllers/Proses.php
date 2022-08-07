<?php

namespace App\Controllers;

use App\Models\MProductModel;
use App\Models;
use CodeIgniter\I18n\Time;

class Proses extends BaseController
{
    protected $msProduct;
    protected $dtlProduct;
    protected $mColor;
    protected $mSize;

    public function __construct()
    {
        $this->msProduct    = new Models\MProductModel();
        $this->dtlProduct   = new Models\DtlProductModel();
        $this->mColor       = new Models\MColorModel();
        $this->mSize        = new Models\MSizeModel();

        // $this->session = \Config\Services::session();
        // $username = $this->session->get("logged_in");
        // if (empty($username)) {
        //     $this->session->setFlashdata('msg_err', 'Anda Harus Login Terlebih Dahulu');
        //     return redirect()->to('/');
        // }
    }

    public function saveShop()
    {
        $slug       = $this->request->getVar("slug");
        $email      = $this->request->getVar("email");
        $price      = $this->request->getVar("price");
        $size_id    = $this->request->getVar("size_id");
        $color_id   = $this->request->getVar("color_id");
        $qty        = $this->request->getVar("qty");
    }

    public function productDetail()
    {
        $slug   = $this->request->getVar('slug');

        $arrMstr = $arrDtl = [];
        if ($slug) {
            $masterProduct = $this->_getMsProduct($slug)->getResultArray();
            foreach ($masterProduct as $mVal) {
                $mName = $mVal['name'];
                $mSlug = $mVal['slug'];
                $mDesc = $mVal['description'];
                $mHigh = $mVal['highlights'];
                $mDtl  = $mVal['details'];

                $detailProduct = $this->_getDtlProduct($mSlug)->getResultArray();
                foreach ($detailProduct as $dVal) {
                    $dColorId = $dVal['color_id'];
                    $dSizeId  = $dVal['size_id'];
                    $dImage   = $dVal['image'];
                    $dPrice   = $dVal['price'];
                    $dWeight   = $dVal['weight'];
                    $dStock   = $dVal['stock'];


                    // if ($dColorId == $dColorId) {
                    //     d($dColorId);
                    //     d($dSizeId);
                    // }

                    $color = $this->_getMColor($dColorId)->getRowArray();
                    $size  = $this->_getMSize($dSizeId)->getRowArray();

                    $colorName = $color['name'];
                    $colorId   = $color['color_id'];
                    $colorCode = $color['class_code'];
                    $sizeName  = $size['name'];
                    $sizeId    = $size['size_id'];

                    $dataDtl = [
                        'image'     => $dImage,
                        'price'     => $dPrice,
                        'weight'    => $dWeight,
                        'stock'     => $dStock,
                        'color'     => $colorName,
                        'colorId'   => $colorId,
                        'colorCode' => $colorCode,
                        'size'      => $sizeName,
                        'sizeId'    => $sizeId,
                    ];
                    array_push($arrDtl, $dataDtl);
                }
                // die();

                $dataMstr = [
                    'name' => $mName,
                    'slug' => $mSlug,
                    'description' => $mDesc,
                    'highlights' => $mHigh,
                    'detail' => $mDtl,
                    'list' => $arrDtl
                ];
                array_push($arrMstr, $dataMstr);
            }

            $result = ['success' => 1, 'data' => $arrMstr];
        } else {
            $result = ['success' => 0, 'data' => null];
        }

        echo json_encode($result);
    }

    public function getBestSeller()
    {
        $arrData = array();
        $whereIn = ['cardinal-cj-06', 'cardinal-jeans-05', 'cardinal-kemeja-07', 'salman-seris-02', 'thobe-sachet-03'];
        $getMsProduct = $this->_getMsProductWhereIn($whereIn)->getResultArray();

        foreach ($getMsProduct as $mVal) {
            $valName = $mVal['name'];
            $valSlug = $mVal['slug'];

            $getDtlProduct = $this->_getDtlProduct($valSlug)->getResultArray();

            foreach ($getDtlProduct as $dVal) {
                $valImage = $dVal['image'];
                $valPrice = $dVal['price'];

                $data = array(
                    'name'  => $valName,
                    'slug'  => $valSlug,
                    'image' => $valImage,
                    'price' => $valPrice,
                );
                array_push($arrData, $data);
            }
        }

        if ($data) {
            $result = ['status' => 1, 'data' => $arrData];
        } else {
            $result = ['status' => 0, 'data' => $arrData];
        }

        echo json_encode($result);
    }

    private function _getMsProduct($slug)
    {
        $result = $this->msProduct
            ->where('slug', $slug)
            ->orderby('product_id', 'ASC')
            ->get();
        return $result;
    }

    private function _getMsProductWhereIn($slug)
    {
        $result = $this->msProduct
            ->whereIn('slug', $slug)
            ->groupby('slug')
            ->orderby('product_id', 'ASC')
            ->get();
        return $result;
    }

    private function _getDtlProduct($slug)
    {
        $result = $this->dtlProduct
            ->where('slug', $slug)
            ->get();
        return $result;
    }

    private function _getMColor($colorId)
    {
        $result = $this->mColor
            ->where('color_id', $colorId)
            ->get();
        return $result;
    }

    private function _getMSize($sizeId)
    {
        $result = $this->mSize
            ->select('*')
            ->where('size_id', $sizeId)
            ->get();
        return $result;
    }
}
