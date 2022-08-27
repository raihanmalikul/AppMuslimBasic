<?php

namespace App\Controllers;

use App\Models;
use CodeIgniter\I18n\Time;

class Proses extends BaseController
{
    protected $msProduct;
    protected $dtlProduct;
    protected $mColor;
    protected $mSize;
    protected $mCategory;
    protected $mCart;

    public function __construct()
    {
        $this->msProduct    = new Models\MProductModel();
        $this->dtlProduct   = new Models\DtlProductModel();
        $this->mColor       = new Models\MColorModel();
        $this->mSize        = new Models\MSizeModel();
        $this->mCategory    = new Models\MCategoryModel();
        $this->mCart        = new Models\MCartModel();

        // $this->session = \Config\Services::session();
        // $username = $this->session->get("logged_in");
        // if (empty($username)) {
        //     $this->session->setFlashdata('msg_err', 'Anda Harus Login Terlebih Dahulu');
        //     return redirect()->to('/');
        // }
    }

    public function saveShopChart()
    {
        $description    = $this->request->getVar("description");
        $namePro        = $this->request->getVar("namePro");
        $slug           = $this->request->getVar("slug");
        $email          = $this->request->getVar("email");
        $price          = $this->request->getVar("price");
        $size_id        = $this->request->getVar("size_id");
        $color_id       = $this->request->getVar("color_id");
        $qty            = $this->request->getVar("qty");
        $totPrice       = $this->request->getVar("totPrice");

        $data = array(
            'email' => $email,
            'name' => $namePro,
            'slug' => $slug,
            'description' => $description,
            'color_id' => $color_id,
            'size_id' => $size_id,
            'qty' => $qty,
            'price' => $price,
            'tot_price' => $totPrice
        );

        $insert = $this->db->table('m_cart')->insert($data);

        if ($insert) {
            $result = ['status' => 1, 'msg' => "success"];
        } else {
            $result = ['status' => 0, 'msg' => "fail"];
        }
        return $this->response->setJSON($result);
    }

    public function productMaster()
    {
        $slug   = $this->request->getVar('slug');
        $arrMstr = [];

        if ($slug) {
            $masterProduct = $this->_getMsProduct($slug)->getResultArray();
            foreach ($masterProduct as $mVal) {
                $mCtg  = $mVal['category_id'];
                $mName = $mVal['name'];
                $mSlug = $mVal['slug'];
                $mDesc = $mVal['description'];
                // $mHigh = $mVal['highlights'];
                $mDtl  = $mVal['details'];

                $query  = "SELECT `name` nm_ctg, category_id FROM m_category WHERE category_id = '$mCtg'";
                $rowCtg = $this->db->query($query)->getRowArray();
                $nmCtg  = $rowCtg['nm_ctg'];

                $query2 = "SELECT 
                                a.sub_code
                                , a.slug
                                , b.size_id
                                , b.color_id
                                , c.`name` nmColor
                                , b.price
                                , b.weight
                                , b.stock
                            FROM 
                                d_product a
                                LEFT JOIN ds_product b ON a.sub_code = b.sub_code
                                LEFT JOIN m_color c ON b.color_id = c.color_id
                            WHERE
                                a.slug = '$slug'
                            GROUP BY a.sub_code
                            ";
                $rowDtl = $this->db->query($query2)->getRowArray();

                $subCode    = $rowDtl['sub_code'];
                $nmColor    = $rowDtl['nmColor'];
                $sizeId     = $rowDtl['size_id'];
                $colorId    = $rowDtl['color_id'];
                $price      = $rowDtl['price'];
                $weight     = $rowDtl['weight'];
                $stock      = $rowDtl['stock'];

                $data = [
                    'category'      => $nmCtg,
                    'name'          => $mName,
                    'slug'          => $mSlug,
                    'description'   => $mDesc,
                    // 'highlights'    => $mHigh,
                    'detail'        => $mDtl,
                    'price'         => $price,
                    'weight'        => $weight,
                    'stock'         => $stock,
                    'nmColor'       => $nmColor,
                    'sizeId'        => $sizeId,
                    'colorId'       => $colorId,
                    'subCode'       => $subCode,
                ];
                array_push($arrMstr, $data);
            }
            $response = ['status' => 1, 'msg' => "success", 'data' => $arrMstr];
        } else {
            $response = ['status' => 0, 'msg' => "success", 'data' => null];
        }
        return $this->response->setJSON($response);
    }

    public function productColor()
    {
        $subCode   = $this->request->getVar('subCode');
        // $colorId   = $this->request->getVar('colorId');

        $arr = [];
        if ($subCode) {
            $query   = "SELECT 
                            a.sub_code
                            , a.color_id
                            , a.size_id
                            , b.class_code
                            , b.`name` nm_color
                            , c.`name` nm_size
                        FROM 
                            ds_product a
                            LEFT JOIN m_color b ON a.color_id = b.color_id
                            LEFT JOIN m_size c ON a.size_id = c.size_id
                        WHERE
                            a.sub_code = '$subCode' 
                        GROUP BY a.color_id
                        ";

            $res = $this->db->query($query)->getResultArray();

            foreach ($res as $row) {
                $data = array(
                    'sub_code'   => $row['sub_code'],
                    'nm_color'   => $row['nm_color'],
                    'color_id'   => $row['color_id'],
                    'size_id'    => $row['size_id'],
                    'class_code' => $row['class_code'],
                );
                array_push($arr, $data);
            }
            $response = ['status' => 1, 'msg' => "success", 'data' => $arr];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => null];
        }
        return $this->response->setJSON($response);
    }

    public function productSizeImage()
    {
        $subCode   = $this->request->getVar('subCode');
        $colorId   = $this->request->getVar('colorId');

        $arr = [];
        if ($subCode) {
            $query   = "SELECT 
                            a.image
                            , a.color_id
                            , a.size_id
                            , b.`name` nm_color
                            , c.`name` nm_size
                        FROM 
                            ds_product a
                            LEFT JOIN m_color b ON a.color_id = b.color_id
                            LEFT JOIN m_size c ON a.size_id = c.size_id
                        WHERE 
                            a.sub_code = '$subCode'
                            AND a.color_id = '$colorId'
                        ";

            $res = $this->db->query($query)->getResultArray();

            foreach ($res as $row) {
                $data = array(
                    'image'     => $row['image'],
                    'nm_color'  => $row['nm_color'],
                    'nm_size'   => $row['nm_size'],
                    'color_id'   => $row['color_id'],
                    'size_id'   => $row['size_id'],
                );
                array_push($arr, $data);
            }
            $response = ['status' => 1, 'msg' => "success", 'data' => $arr];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => null];
        }
        return $this->response->setJSON($response);
    }

    public function productPriceStock()
    {
        $subCode   = $this->request->getVar('subCode');
        $colorId   = $this->request->getVar('colorId');
        $sizeId    = $this->request->getVar('sizeId');

        $arr = [];
        if ($subCode) {
            $query   = "SELECT 
                            a.price
                            , a.stock
                        FROM 
                            ds_product a
                            LEFT JOIN m_color b ON a.color_id = b.color_id
                            LEFT JOIN m_size c ON a.size_id = c.size_id
                        WHERE 
                            a.sub_code = '$subCode'
                            AND a.color_id = '$colorId'
                            AND a.size_id = '$sizeId'
                        GROUP BY a.size_id
                        ";

            $res = $this->db->query($query)->getResultArray();

            foreach ($res as $row) {
                $data = array(
                    'price' => $row['price'],
                    'stock' => $row['stock'],
                );
                array_push($arr, $data);
            }
            $response = ['status' => 1, 'msg' => "success", 'data' => $arr];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => null];
        }
        return $this->response->setJSON($response);
    }

    public function getBestSeller()
    {
        $arrData = $data = array();
        $getMReting = $this->db->query("SELECT slug, COUNT(slug) tot_slug, sub_code, color_id, size_id FROM m_rating GROUP BY slug")->getResultArray();

        foreach ($getMReting as $rVal) {
            $valSlug    = $rVal['slug'];
            $valColorId = $rVal['color_id'];
            $valSizeId  = $rVal['size_id'];

            $getMsProduct = $this->_getMsProduct($valSlug)->getRowArray();

            $valName = $getMsProduct['name'];
            $valCategoryId = $getMsProduct['category_id'];

            $getCategory = $this->_getMCategory($valCategoryId)->getRowArray();
            $valCategoryName = $getCategory['name'];

            $getDtlProduct = $this->_getDtlProduct($valSlug)->getResultArray();
            foreach ($getDtlProduct as $dVal) {
                $valSubCode = $dVal['sub_code'];

                $getDSProduct = $this->db->query("SELECT 
                                                        a.image
                                                        , a.price 
                                                        , b.`name` nm_color
                                                        , c.`name` nm_size
                                                    FROM 
                                                        ds_product a
                                                        LEFT JOIN m_color b ON a.color_id = b.color_id
                                                        LEFT JOIN m_size c ON a.size_id = c.size_id
                                                    WHERE 
                                                        a.sub_code = '$valSubCode' 
                                                        AND a.color_id = '$valColorId'
                                                        AND a.size_id = '$valSizeId'
                                                    GROUP BY sub_code")->getResultArray();

                foreach ($getDSProduct as  $dsVal) {
                    $valImage   = $dsVal['image'];
                    $valPrice   = $dsVal['price'];
                    $valNmColor = $dsVal['nm_color'];
                    $valNmSize  = $dsVal['nm_size'];

                    $data = array(
                        'categoryName'  => $valCategoryName,
                        'nmColor'       => $valNmColor,
                        'nmSize'        => $valNmSize,
                        'name'          => $valName,
                        'slug'          => $valSlug,
                        'image'         => $valImage,
                        'price'         => $valPrice,
                    );
                    array_push($arrData, $data);
                }
            }
        }

        if ($data) {
            $response = ['status' => 1, 'msg' => "success", 'data' => $arrData];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => $arrData];
        }

        return $this->response->setJSON($response);
    }

    public function getDiscountItem()
    {
        $query = $this->db->query("SELECT 
                                    a.`name` name_product
                                    , a.slug
                                    , a1.`name` name_category
                                    , b.sub_code
                                    , c.color_id
                                    , d.`name` name_color
                                    , c.size_id
                                    , e.`name` name_size
                                    , c.image
                                    , c.price_disc
                                    , c.percent_disc
                                FROM 
                                    m_product a
                                    LEFT JOIN m_category a1 ON a.category_id = a1.category_id
                                    LEFT JOIN d_product b ON a.slug = b.slug AND a.is_valid = b.is_valid
                                    LEFT JOIN ds_product c ON b.sub_code = c.sub_code
                                    LEFT JOIN m_color d ON c.color_id = d.color_id
                                    LEFT JOIN m_size e ON c.size_id = e.size_id
                                WHERE
                                    c.discount = 1
                                GROUP BY
                                    c.sub_code
                                    ")->getResultArray();
        
        $arry = [];
        foreach ($query as $each) {
            $data = [
                'name_product' => $each["name_product"],
                'slug' => $each["slug"],
                'name_category' => $each["name_category"],
                'sub_code' => $each["sub_code"],
                'color_id' => $each["color_id"],
                'name_color' => $each["name_color"],
                'size_id' => $each["size_id"],
                'name_size' => $each["name_size"],
                'image' => $each["image"],
                'price_disc' => $each["price_disc"],
                'percent_disc' => $each["percent_disc"],
            ];
            
            array_push($arry, $data);
        }

        if ($arry) {
            $response = ['status' => 1, 'msg' => "success", 'data' => $arry];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => []];
        }
        return $this->response->setJSON($response);
    }

    public function getTotChart()
    {
        $email = $this->request->getVar('email');
        $res = $this->db->query("SELECT COUNT(*) total FROM m_cart WHERE email = '$email'")->getResultArray();
        $data = array(
            'total' => $res[0]['total']
        );

        if ($data) {
            $response = ['status' => 1, 'msg' => "success", 'data' => $data];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => $data];
        }

        return $this->response->setJSON($response);
    }
    
    public function getTotTimeline()
    {
        $email = $this->request->getVar('email');
        $res = $this->db->query("SELECT 
                                    COUNT(*) total
                                    , a.timeline_id
                                FROM m_timeline a
                                WHERE a.email = '$email'
                                GROUP BY a.timeline_id")->getResultArray();
        if (count($res) > 0) {
            $data = array(
                'total' => $res[0]['total'],
                'timeline_id' => $res[0]['timeline_id'],
            );
        } else {
            $data = [];
        }

        if ($data) {
            $response = ['status' => 1, 'msg' => "success", 'data' => $data];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => $data];
        }

        return $this->response->setJSON($response);
    }

    public function getDataCustomer()
    {
        $email = $this->request->getVar('email');
        $dtArr = array();
        $qry = "SELECT 
                    a.id
                    , a.email
                    , a.first_name
                    , a.last_name
                    , a.address
                    , a.phone
                    , a.postal_code
                    , a.province_id
                    , a.city_id
                    , b.province
                    , b.city_name
                    , b.type 
                FROM 
                    m_profil a
                    LEFT JOIN m_city b ON a.city_id = b.city_id
                WHERE
                    a.email = '$email'
                    AND a.`status` = 1
                ";
        $res  = $this->db->query($qry)->getResultArray();
        foreach ($res as $row) {
            $data = array(
                'id'            => $row['id'],
                'email'         => $row['email'],
                'first_name'    => $row['first_name'],
                'last_name'     => $row['last_name'],
                'address'       => $row['address'],
                'phone'         => $row['phone'],
                'postal_code'   => $row['postal_code'],
                'province_id'   => $row['province_id'],
                'city_id'       => $row['city_id'],
                'province'      => $row['province'],
                'city'          => $row['city_name'],
                'type'          => $row['type'],
            );
            array_push($dtArr, $data);
        }

        if ($dtArr) {
            $response = ['status' => 1, 'msg' => "success", 'data' => $dtArr];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => null];
        }

        return $this->response->setJSON($response);
    }

    public function getDataCart()
    {
        $email = $this->request->getVar('email');

        $dtArr = array();
        $qry = "SELECT 
                    a.id
                    , a.email
                    , a.slug
                    , a.description
                    , a.price
                    , a.tot_price
                    , a.qty
                    , a.color_id
                    , a.size_id
                    , b.`name` nm_product
                    , b.product_id
                    , b.category_id
                    , c.sub_code
                    , d.image
                    , if(d.price_disc <> '', d.price_disc, d.price) ds_price
                    , d.weight
                    , d.stock
                    , e.`name` nm_color
                    , f.`name` nm_size
                    , g.first_name
                    , g.last_name
                    , g.address
                    , g.phone
                    , g.postal_code
                    , g.province_id
                    , g.city_id
                    , h.province
                    , h.city_name
                    , h.type 
                    , i.`name` nm_category
                FROM 
                    `m_cart` a
                    LEFT JOIN m_product b ON a.slug = b.slug
                    LEFT JOIN d_product c ON a.slug = c.slug AND b.is_valid = c.is_valid
                    LEFT JOIN ds_product d ON c.sub_code = d.sub_code AND a.color_id = d.color_id AND a.size_id = d.size_id
                    LEFT JOIN m_color e ON a.color_id = e.color_id
                    LEFT JOIN m_size f ON a.size_id = f.size_id
                    LEFT JOIN m_profil g ON a.email = g.email
                    LEFT JOIN m_city h ON g.city_id = h.city_id
                    LEFT JOIN m_category i ON b.category_id = i.category_id
                WHERE
                    a.email = '$email'
                    AND g.`status` = 1";
        $qty2 = "SELECT SUM(tot_price) sub_total FROM m_cart WHERE email = '$email' GROUP BY email";
        $res  = $this->db->query($qry)->getResultArray();
        $res2 = $this->db->query($qty2)->getRowArray();
        foreach ($res as $row) {
            $data = array(
                'id'            => $row['id'],
                'email'         => $row['email'],
                'slug'          => $row['slug'],
                'description'   => $row['description'],
                'tot_price'     => $row['tot_price'],
                'qty'           => $row['qty'],
                'color_id'      => $row['color_id'],
                'size_id'       => $row['size_id'],
                'nm_product'    => $row['nm_product'],
                'product_id'    => $row['product_id'],
                'category_id'   => $row['category_id'],
                'sub_code'      => $row['sub_code'],
                'image'         => $row['image'],
                'ds_price'      => $row['ds_price'],
                'weight'        => $row['weight'],
                'stock'         => $row['stock'],
                'nm_color'      => $row['nm_color'],
                'nm_size'       => $row['nm_size'],
                'first_name'    => $row['first_name'],
                'last_name'     => $row['last_name'],
                'address'       => $row['address'],
                'phone'         => $row['phone'],
                'postal_code'   => $row['postal_code'],
                'province_id'   => $row['province_id'],
                'city_id'       => $row['city_id'],
                'province'      => $row['province'],
                'city_name'     => $row['city_name'],
                'type'          => $row['type'],
                'nm_category'   => $row['nm_category'],
                'sub_total'     => $res2['sub_total']
            );
            array_push($dtArr, $data);
        }

        if ($dtArr) {
            $response = ['status' => 1, 'msg' => "success", 'data' => $dtArr];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => null];
        }

        return $this->response->setJSON($response);
    }

    public function getDtCost()
    {
        $email = $this->request->getVar('email');
        $courier = $this->request->getVar('courier');

        $qty = "SELECT 
                    SUM(a.tot_price) sub_total 
                    , SUM(c.weight) tot_weight
                    , d.province_id
                    , d.city_id description
                    , '23' origin
                FROM 
                    m_cart a
                    LEFT JOIN d_product b ON a.slug = b.slug
                    LEFT JOIN ds_product c ON b.sub_code = c.sub_code AND a.color_id = c.color_id AND a.size_id = c.size_id
                    LEFT JOIN m_profil d ON a.email = d.email
                    LEFT JOIN m_city e ON d.city_id = e.city_id
                WHERE 
                    a.email = '$email' 
                GROUP BY a.email";
        $res = $this->db->query($qty)->getRowArray();

        $sub_total   = $res['sub_total'];
        $weight      = intval($res['tot_weight']);
        $province_id = $res['province_id'];
        $description = $res['description'];
        $origin      = $res['origin'];

        $res = $this->_getApiCost($courier, $origin, $description, $weight);
        $dtApi = json_decode($res);

        $pushApi = array();
        foreach ($dtApi as $row) {
            $status = $row->status;
            $result = $row->results;
            $apiFix = array('status' => $status, 'result' => $result);
            array_push($pushApi, $apiFix);
        }

        $dtArr = array(
            'sub_total'   => $sub_total,
            'weight'      => $weight,
            'province_id' => $province_id,
            'description' => $description,
            'origin'      => $origin,
            'dataApi'     => $pushApi
        );

        if ($dtArr) {
            $response = ['status' => 1, 'msg' => "success", 'data' => $dtArr];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => null];
        }

        return $this->response->setJSON($response);
    }

    public function uploadFile()
    {
        helper(['form', 'url']);
        $validateImage = $this->validate([
            'filePayment' => [
                'uploaded[filePayment]',
                'mime_in[filePayment,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[filePayment,4096]',
            ],
        ]);
        
        if ($validateImage) {
            $email          = $this->request->getVar("emailVal");
            $deliveryCode   = $this->request->getVar("delCode");
            $total          = $this->request->getVar("totalVal");
            $account        = $this->request->getVar("noReq");
            $imageFile      = $this->request->getFile('filePayment');
            
            $timeNow = TIme::now();
            $timePlusOneHour = new Time('+1 hour');

            $profile_image = $imageFile->getName();

            $payment_id = "PAYID" . $timeNow->toLocalizedString('yyyyMMddHHmmss');
            // Renaming file before upload
            $temp = explode(".",$profile_image);
            $newFilename = $payment_id . '.' . end($temp);
            $pathFile = ROOTPATH ."public/uploads/evidencePay/". $timeNow->toLocalizedString('yyyyMMdd');

            if (!file_exists($pathFile)) {
                mkdir($pathFile, 0777, true);
            }

            if ($imageFile->move($pathFile, $newFilename)) {
                // insert to tbl m_payment
                $dataPayment = array(
                    'email' => $email,
                    'payment_id' => $payment_id,
                    'total_price' => $total,
                    'evidence_payment' => $pathFile ."/". $newFilename,
                    'evidence_date' => $timeNow,
                    'waiting_time' => $timePlusOneHour,
                    'delivery_code' => $deliveryCode,
                    'rekening' => $account,
                    'feedback' => "Menuggu verifikasi pembayaran",
                    'status' => 0
                );
                // insert data payment
                $insPayment = $this->db->table("m_payment")->insert($dataPayment);
                if ($insPayment) {
                    $response = [
                        'status' => 1,
                        'msg' => "Data dan file tersimpan",
                        'data' => []
                    ];
                } else {
                    $response = [
                        'status' => 0,
                        'msg' => "Data dan file gagal tersimpan",
                        'data' => []
                    ];
                }
                return $this->response->setJSON($response);
            } else {
                $response = [
                    'status' => 0,
                    'msg' => "Failed to upload Image",
                    'data' => []
                ];
                return $this->response->setJSON($response);
            }
        } else {
            $response = [
                'status' => 0,
                'msg' => "Periksa size dan format file hanya (jpg,jpeg,png)",
                'data' => []
            ];
            return $this->response->setJSON($response);
        }
    }

    public function insListChart()
    {
        $email          = $this->request->getVar("email");
        $name           = $this->request->getVar("name");
        $customerId     = $this->request->getVar("customerId");
        $phone          = $this->request->getVar("phone");
        $regionId       = $this->request->getVar("regionId");
        $cityId         = $this->request->getVar("cityId");
        $postalCode     = $this->request->getVar("postalCode");
        $total          = $this->request->getVar("total");
        $address        = $this->request->getVar("address");
        $orderPro       = $this->request->getVar("orderPro");

        $timeNow = TIme::now();

        $getOrdi = $this->db->table("m_order")->select('order_id')->orderBy('order_id', 'DESC')->get()->getRowArray();
        if ($getOrdi) {
            $formatOrderId = "ORDI" . ((int)substr($getOrdi['order_id'], 4) + 1);
            // $formatOrderId = $getOrdi['order_id'] + "1";
        } else {
            $formatOrderId = "ORDI1";
        }

        $getCart = $this->db->table("m_cart")->whereIn('id', $orderPro)->get()->getResultArray();

        $insTimeline = $insCartLog = [];
        foreach ($getCart as $each) {
            $data2 = array(
                'email' => $each['email'],
                'name' => $each['name'],
                'slug' => $each['slug'],
                'description' => $each['description'],
                'color_id' => $each['color_id'],
                'size_id' => $each['size_id'],
                'qty' => $each['qty'],
                'price' => $each['price'],
                'tot_price' => $each['tot_price'],
            );

            $data = array(
                'timeline_id' => "TIME". $timeNow->toLocalizedString('yyyyMMddHHmmss'),
                'order_id' => $formatOrderId,
                'slug' => $each['slug'],
                'email' => $each['email'],
                'phone' => $phone,
                'feedback' => "Menuggu verifikasi pembayaran",
                'status' => 0,
            );

            array_push($insTimeline, $data);
            array_push($insCartLog, $data2);
        }

        // insert data to tbl m_timeline
        $insertTime = $this->db->table("m_timeline")->insertBatch($insTimeline);
        // insert data to m_cart_log
        $insCartLog = $this->db->table("m_cart_log")->insertBatch($insCartLog);
        // delete data m_cart
        $delCart    = $this->db->table("m_cart")->whereIn('id', $orderPro)->delete();

        $formatInvoice = "INV". $timeNow->toLocalizedString('yyyyMMddHHmmss') . $formatOrderId;

        // insert to tbl m_order
        $dataOrder = array(
            'email' => $email,
            'order_id' => $formatOrderId,
            'invoice' => $formatInvoice,
            'customer_id' => $customerId,
            'customer_name' => $name,
            'customer_phone' => $phone,
            'customer_address' => $address,
            'province_id' => $regionId,
            'city_id' => $cityId,
            'postal_code' => $postalCode,
            'subTotal' => $total,
            'status_order' => 0
        );
        // insert data order
        $insOrder   = $this->db->table("m_order")->insert($dataOrder);

        if ($insOrder && $insertTime && $insCartLog && $delCart) {
            $response = [
                'status' => 1, 
                'msg' => "success",
                'data' => [
                            "Order" => $insOrder, 
                            "Timeline" => $insertTime, 
                            "chartLog" => $insCartLog,
                            "delCart" => $delCart
                        ]
            ];
        } else {
            $response = ["status" => 0, "msh" => "fail", "data" => []];
        }
        return $this->response->setJSON($response);
    }

    public function delListCart()
    {
        $id = $this->request->getVar('id');
        $res = $this->mCart->delete(['id' => $id]);
        if ($res) {
            $response = ["status" => 1, "msg" => "success", "data" => $res];
        } else {
            $response = ["status" => 0, "msg" => "fail",  "data" => null];
        }

        return $this->response->setJSON($response);
    }

    public function getTimelineList()
    {
        $email      = $this->request->getVar('email');
        $timelineId = $this->request->getVar('timelineId');

        $res = $this->db->query("SELECT 
                                    timeline_id
                                    , order_id
                                    , slug
                                    , email
                                    , phone
                                    , feedback
                                    , `status` stTimeLine
                                    , created_at dateTimeline
                                FROM m_timeline 
                                WHERE timeline_id = '$timelineId' 
                                GROUP BY created_at
                                ORDER BY created_at DESC")->getResultArray();
        $arry = array();
        foreach ($res as $each) {
            $data = array(
                'timeline_id' => $each['timeline_id'],
                'order_id' => $each['order_id'],
                'slug' => $each['slug'],
                'email' => $each['email'],
                'phone' => $each['phone'],
                'feedback' => $each['feedback'],
                'stTimeLine' => $each['stTimeLine'],
                'dateTimeline' => $each['dateTimeline']
            );
            array_push($arry, $data);
        }

        if ($arry) {
            $response = ['status' => 1, 'data' => $arry];
        } else {
            $response = ['status' => 0, 'data' => $arry];
        }

        return $this->response->setJSON($response);
    }

    private function _getApiCost($courier = "", $origin = "", $des = "", $weight = "")
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=" . $origin . "&destination=" . $des . "&weight=" . $weight . "&courier=" . $courier,
            CURLOPT_HTTPHEADER => array("content-type: application/x-www-form-urlencoded", "key: 0b90592ec39848eb4ce21d140b19c8c8" ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }

    private function _getMsProduct($slug = "")
    {
        $result = $this->msProduct
            ->where('slug', $slug)
            ->orderby('product_id', 'ASC')
            ->get();
        return $result;
    }

    private function _getMsProductWhereIn($slug = "")
    {
        $result = $this->msProduct
            ->whereIn('slug', $slug)
            ->groupby('slug')
            ->orderby('product_id', 'ASC')
            ->get();
        return $result;
    }

    private function _getDtlProduct($slug = "")
    {
        $result = $this->dtlProduct
            ->where('slug', $slug)
            ->get();
        return $result;
    }

    private function _getMColor($colorId = "")
    {
        $result = $this->mColor
            ->where('color_id', $colorId)
            ->get();
        return $result;
    }

    private function _getMSize($sizeId = "")
    {
        $result = $this->mSize
            ->select('*')
            ->where('size_id', $sizeId)
            ->get();
        return $result;
    }

    private function _getMCategory($categoryId = "")
    {
        $result = $this->mCategory
            ->select('*')
            ->where('category_id', $categoryId)
            ->get();
        return $result;
    }
}
