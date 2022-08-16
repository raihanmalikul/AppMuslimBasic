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
            $result = ['status' => 1];
        } else {
            $result = ['status' => 0];
        }
        echo json_encode($result);
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
            $result = ['status' => 1, 'data' => $arrMstr];
        } else {
            $result = ['status' => 0, 'data' => null];
        }
        echo json_encode($result);
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
                    'sub_code'  => $row['sub_code'],
                    'nm_color'  => $row['nm_color'],
                    'color_id'  => $row['color_id'],
                    'size_id'   => $row['size_id'],
                );
                array_push($arr, $data);
            }
            $result = ['status' => 1, 'data' => $arr];
        } else {
            $result = ['status' => 0, 'data' => null];
        }
        echo json_encode($result);
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
            $result = ['status' => 1, 'data' => $arr];
        } else {
            $result = ['status' => 0, 'data' => null];
        }
        echo json_encode($result);
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
            $result = ['status' => 1, 'data' => $arr];
        } else {
            $result = ['status' => 0, 'data' => null];
        }
        echo json_encode($result);
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
            $result = ['status' => 1, 'data' => $arrData];
        } else {
            $result = ['status' => 0, 'data' => $arrData];
        }

        echo json_encode($result);
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
        echo json_encode($query);
    }

    public function getTotChart()
    {
        $email = $this->request->getVar('email');
        $res = $this->db->query("SELECT COUNT(*) total FROM m_cart WHERE email = '$email'")->getResultArray();
        $data = array(
            'total' => $res[0]['total']
        );

        if ($data) {
            $result = ['status' => 1, 'data' => $data];
        } else {
            $result = ['status' => 0, 'data' => $data];
        }

        echo json_encode($result);
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
            $result = ['status' => 1, 'data' => $dtArr];
        } else {
            $result = ['status' => 0, 'data' => null];
        }

        echo json_encode($result);
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
            $result = ['status' => 1, 'data' => $dtArr];
        } else {
            $result = ['status' => 0, 'data' => null];
        }

        echo json_encode($result);
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
            $result = ['status' => 1, 'data' => $dtArr];
        } else {
            $result = ['status' => 0, 'data' => null];
        }

        echo json_encode($result);
    }

    public function delListCart()
    {
        $id = $this->request->getVar('id');
        $res = $this->mCart->delete(['id' => $id]);
        if ($res) {
            $result = ['status' => 1, 'data' => $res];
        } else {
            $result = ['status' => 0, 'data' => null];
        }

        echo json_encode($result);
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
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: 72c4d5880a5cfdb5db5259bbea568d7d"
            ),
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
