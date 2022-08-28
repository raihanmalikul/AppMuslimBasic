<?php

namespace App\Controllers;

use App\Models\LoginAdminModel;
use CodeIgniter\I18n\Time;
use CodeIgniter\Files\File;

class ProsesAdmin extends BaseController
{
    protected $LoginAdmin;
    public function __construct()
    {
        $this->LoginAdmin = new LoginAdminModel();
        $this->session = \Config\Services::session();
        $username = $this->session->get("logged_in");
        if (empty($username)) {
            $this->session->setFlashdata('msg_err', 'Anda Harus Login Terlebih Dahulu');
            return redirect()->to('/LoginAdmin');
        }
    }

    public function displayProduct()
    {
        $request     = $_REQUEST;
        $col         = array(
                            1 => 'category_id'
                            , 2 => 'category_name'
                            , 3 => 'product_id'
                            , 4 => 'product_name'
                            , 5 => 'price'
                            , 6 => 'weight'
                            , 7 => 'stock'
                            , 8 => 'created_at'
                        );
        $cari        = $request['search']['value'];
        $cari        = ($cari ? strtolower($cari) : $cari);
        $cariStart   = $request['start'];
        $cariLength  = $request['length'];
        $orderColumn = $col[$request['order'][0]['column']];
        $orderDir    = $request['order'][0]['dir'];

        $sqlCari = "";

        if (!empty($cari)) {
            $sqlFilter    = "a.category_id LIKE '%{$cari}%'
                            OR a.category_name LIKE '%{$cari}%'
                            OR a.product_id LIKE '%{$cari}%'
                            OR a.product_name LIKE '%{$cari}%'
                            OR a.price LIKE '%{$cari}%'
                            OR a.weight LIKE '%{$cari}%'
                            OR a.stock LIKE '%{$cari}%'
                            OR a.created_at LIKE '%{$cari}%'
                        ";
            $sqlCari .= sprintf(" AND (%s) ", $sqlFilter);
        }
        $sqlOrder   = "ORDER BY a." . $orderColumn . " " . $orderDir;
        $sqlLimit   = "LIMIT " . $cariStart . ", " . $cariLength;

        $queryM = "SELECT 
                    a.category_id
                    , a.name as category_name
                    , b.product_id
                    , b.name as product_name
                    , b.created_at
                    , b.is_valid
                FROM 
                    m_category a 
                    LEFT JOIN m_product b ON a.category_id = b.category_id
                WHERE
                    b.is_valid = 1";

        $query      = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari $sqlOrder $sqlLimit";
        $listData   = $this->db->query($query)->getResultArray();

        $queryTotal = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari";
        $dataTotal  = $this->db->query($queryTotal)->getResultArray();

        $id   = 0;
        $data = array();
        foreach ($listData as $row) {
            array_push($data, $row);
            $id++;
        }

        $response = array(
            "draw"              => intval($request['draw']),
            "recordsTotal"      => intval(sizeof($dataTotal)),
            "recordsFiltered"   => intval(sizeof($dataTotal)),
            "data"              => $data
        );

        return $this->response->setJSON($response);
    }
    
    public function displayTopSelling()
    {
        $request     = $_REQUEST;
        $col         = array(
                            1 => 'name_customer'
                            , 2 => 'name_category'
                            , 3 => 'name_product'
                            , 4 => 'orders'
                        );
        $cari        = $request['search']['value'];
        $cari        = ($cari ? strtolower($cari) : $cari);
        $cariStart   = $request['start'];
        $cariLength  = $request['length'];
        $orderColumn = $col[$request['order'][0]['column']];
        $orderDir    = $request['order'][0]['dir'];

        $sqlCari = "";

        if (!empty($cari)) {
            $sqlFilter    = "a.name_customer LIKE '%{$cari}%'
                            OR a.name_category LIKE '%{$cari}%'
                            OR a.name_product LIKE '%{$cari}%'
                            OR a.product_name LIKE '%{$cari}%'
                            OR a.orders LIKE '%{$cari}%'
                        ";
            $sqlCari .= sprintf(" AND (%s) ", $sqlFilter);
        }
        $sqlOrder   = "ORDER BY a." . $orderColumn . " " . $orderDir;
        $sqlLimit   = "LIMIT " . $cariStart . ", " . $cariLength;

        $queryM = "SELECT
                        CONCAT(a.first_name, ' ',a.last_name) name_customer
                        , name_category
                        , name_product
                        , COUNT(b.qty) orders
                        , d.`status`
                    FROM 
                        m_profil a
                        LEFT JOIN m_cart_log b ON a.email = b.email
                        LEFT JOIN m_payment d ON a.email = d.email
                        LEFT JOIN (
                            SELECT
                                b.`name` name_category 
                                , a.`name` name_product
                                , c.slug
                            FROM 
                                m_product a
                                LEFT JOIN m_category b ON a.category_id = b.category_id
                                LEFT JOIN d_product c ON a.category_id = c.category_id AND a.product_id = c.product_id
                            WHERE
                                a.is_valid = 1
                        ) c ON c.slug = b.slug
                    WHERE
                        a.`status` = 1
                        AND b.qty != 0
					GROUP BY a.email
                    ORDER BY orders DESC";

        $query      = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari $sqlOrder $sqlLimit";
        $listData   = $this->db->query($query)->getResultArray();

        $queryTotal = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari";
        $dataTotal  = $this->db->query($queryTotal)->getResultArray();

        $id   = 0;
        $data = array();
        foreach ($listData as $row) {
            array_push($data, $row);
            $id++;
        }

        $response = array(
            "draw"              => intval($request['draw']),
            "recordsTotal"      => intval(sizeof($dataTotal)),
            "recordsFiltered"   => intval(sizeof($dataTotal)),
            "data"              => $data
        );

        return $this->response->setJSON($response);
    }

    public function getCategoryCode()
    {
        $query = "SELECT a.id, a.name, a.category_id, a.slug, a.created_at FROM m_category a WHERE a.slug IS NOT NULL";
        $data  = $this->db->query($query)->getResultArray();

        echo json_encode($data);
    }

    public function getSizeCode()
    {
        $query = "SELECT a.id, a.name, a.size_id, a.slug, a.created_at FROM m_size a WHERE a.slug IS NOT NULL";
        $data  = $this->db->query($query)->getResultArray();

        echo json_encode($data);
    }

    public function getColorCode()
    {
        $query = "SELECT a.id, a.name, a.color_id, a.slug, a.created_at FROM m_color a WHERE a.slug IS NOT NULL";
        $data  = $this->db->query($query)->getResultArray();

        echo json_encode($data);
    }

    public function getNewCategoryCode()
    {
        $slug = $this->request->getVar('slug');
        $whereSlug = $slug != '' ? "AND a.slug='$slug'" : "";

        $query  = "SELECT 
                        a.slug as slug_category, a.name as name_category, a.category_id, a.created_at, 
                        b.slug as slug_product, b.product_id, b.name as name_product, b.price, b.weight, b.stock, b.color_id, b.size_id, b.is_valid
                    FROM 
                        m_category a 
                        LEFT JOIN m_product b ON a.category_id = b.category_id
                    WHERE 
                        1=1
                        $whereSlug
                    ORDER BY a.category_id DESC, b.product_id DESC LIMIT 1";
        $result = $this->db->query($query)->getRowArray();

        if (count($result) > 0) {
            $category_id = $result['category_id'];
            $product_id  = $result['product_id'];

            if ($slug == '') {
                $newCategoryId          = $category_id + 1;
                $data['category_id']    = sprintf('%02d', $newCategoryId);
                $data['product_id']     = '01';
                $data['product_name']   = '';
                $data['product_status'] = '';
            } else {
                $newProductId           = $product_id + 1;
                $data['category_slug']  = $result['slug_category'];
                $data['category_id']    = $category_id;
                $data['category_name']  = $result['name_category'];
                $data['product_slug']   = $result['slug_product'];
                $data['product_id']     = sprintf('%02d', $newProductId);
                $data['product_name']   = $result['name_product'];
                $data['product_status'] = $result['is_valid'];
            }
        } else {
            $data[] = array();
        }
        return $this->response->setJSON($data);
    }

    public function AddMasterCategory()
    {
        if ($this->request->isAJAX()) {
            $optCategory    = $this->request->getPost('optCategory');
            $category_id    = $this->request->getPost('category_id');
            $category_name  = $this->request->getPost('category_name');
            $product_id     = $this->request->getPost('product_id');
            $product_name   = $this->request->getPost('product_name');
            $product_slug   = $this->request->getPost('product_slug');
            $product_price  = $this->request->getPost('product_price');
            $product_weight = $this->request->getPost('product_weight');
            $product_stock  = $this->request->getPost('product_stock');
            $product_des    = $this->request->getPost('product_des');
            $product_size   = $this->request->getPost('product_size');
            $product_color  = $this->request->getPost('product_color');
            $product_image  = $this->request->getFile('product_image');

            $slugCategory   = '';
            $return         = array();

            if ($optCategory == '') {
                $slugCategory   = strtolower(implode("-", explode(" ", $category_name))) . '-' . $category_id;
                $category_name  = strtoupper($category_name);
                $insertCategory = "INSERT INTO `m_category` (`slug`, `name`, `category_id`, `created_at`) VALUES ('$slugCategory', '$category_name', '$category_id', '" . TIme::now() . "')";
                $queryCategory  = $this->db->query($insertCategory);

                if ($queryCategory) {
                    for ($i = 0; $i < count($product_id); $i++) {
                        $product_slug[$i]   = strtolower(str_replace(" ", "-", $product_name[$i])) . '-' . $product_id[$i];
                        $product_name[$i]   = strtoupper($product_name[$i]);
                        $insertProduct      = "INSERT INTO `m_product` 
                                                (
                                                    `slug`
                                                    , `name`
                                                    , `product_id`
                                                    , `category_id`
                                                    , `color_id`
                                                    , `size_id`
                                                    , `description`
                                                    , `price`
                                                    , `weight`
                                                    , `stock`
                                                    , `is_valid`
                                                    , `created_at`
                                                ) 
                                                VALUES 
                                                (
                                                    '$product_slug[$i]'
                                                    , '$product_name[$i]'
                                                    , '$product_id[$i]'
                                                    , '$category_id'
                                                    , '$product_color[$i]'
                                                    , '$product_size[$i]'
                                                    , '$product_des[$i]'
                                                    , '$product_price[$i]'
                                                    , '$product_weight[$i]'
                                                    , '$product_stock[$i]'
                                                    , 1
                                                    , '" . TIme::now() . "'
                                                )";
                        $queryProduct       = $this->db->query($insertProduct);

                        if ($queryProduct) {
                            $validationRule = [
                                'product_image' => [
                                    'label' => 'Image File',
                                    'rules' => 'uploaded[product_image]'
                                        . '|is_image[product_image]'
                                        . '|mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                                        . '|max_size[product_image,100]'
                                        . '|max_dims[product_image,1024,768]',
                                ],
                            ];

                            if (!$this->validate($validationRule)) {
                                $return = ['status' => 2, 'messageError' => 'Invalid file format', 'data' => $this->validator->getErrors()];
                            } else {
                                $upload = $this->_imageProduct($product_image);
                                array_push($result, $upload);
                            }
                        }
                    }
                    if ($queryProduct) $return = ['status' => 1, 'messageError' => 'success', 'data' => $result];
                } else {
                    $return = ['status' => 0, 'messageError' => 'gagal', 'data' => 'category not fount'];
                }
            } else {
                $queryCategory = true;
                for ($i = 0; $i < count($product_id); $i++) {
                    $product_slug[$i]   = strtolower(str_replace(" ", "-", $product_name[$i])) . '-' . $product_id[$i];
                    $product_name[$i]   = strtoupper($product_name[$i]);
                    $insertProduct      = "INSERT INTO `m_product` 
                                            (
                                                `slug`, 
                                                `name`, 
                                                `product_id`, 
                                                `category_id`, 
                                                `color_id`, 
                                                `size_id`, 
                                                `description`, 
                                                `price`, 
                                                `weight`, 
                                                `stock`, 
                                                `is_valid`, 
                                                `created_at`
                                            ) 
                                            VALUES 
                                            (
                                                '$product_slug[$i]'
                                                , '$product_name[$i]'
                                                , '$product_id[$i]'
                                                , '$category_id'
                                                , '$product_color[$i]'
                                                , '$product_size[$i]'
                                                , '$product_des[$i]'
                                                , '$product_price[$i]'
                                                , '$product_weight[$i]'
                                                , '$product_stock[$i]'
                                                , 1
                                                , '" . TIme::now() . "'
                                            )";
                    $queryProduct       = $this->db->query($insertProduct);

                    if ($queryProduct) {
                        $validationRule = [
                            'product_image' => [
                                'label' => 'Image File',
                                'rules' => 'uploaded[product_image]'
                                    . '|is_image[product_image]'
                                    . '|mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                                    . '|max_size[product_image,100]'
                                    . '|max_dims[product_image,1024,768]',
                            ],
                        ];

                        if (!$this->validate($validationRule)) {
                            $return = ['status' => 2, 'messageError' => 'Invalid file format', 'data' => $this->validator->getErrors()];
                        }
                        $upload = $this->_imageProduct($product_image);
                        array_push($result, $upload);
                    }
                }
                if ($queryProduct) $return = ['status' => 1, 'messageError' => 'success', 'data' => $result];
            }

            return $this->response->setJSON($return);
        }
    }

    private function _imageProduct($img)
    {
        // $img = $this->request->getFile('product_image');
        if (!$img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/productImage/' . $img->store();
            $data = new File($filepath);
        } else {
            $data = 'The file has already been moved.';
        }

        return $data;
    }

    public function displayCustomer()
    {
        $request     = $_REQUEST;
        $col         = array(1 => 'name', 2 => 'address', 3 => 'phone', 4 => 'email', 5 => 'province', 6 => 'city_name', 7 => 'postal_code', 8 => 'status');
        $cari        = $request['search']['value'];
        $cari        = ($cari ? strtolower($cari) : $cari);
        $cariStart   = $request['start'];
        $cariLength  = $request['length'];
        $orderColumn = $col[$request['order'][0]['column']];
        $orderDir    = $request['order'][0]['dir'];

        $sqlCari = "";

        if (!empty($cari)) {
            $sqlFilter    = "a.name LIKE '%{$cari}%'
                            OR a.address LIKE '%{$cari}%'
                            OR a.phone LIKE '%{$cari}%'
                            OR a.email LIKE '%{$cari}%'
                            OR a.province LIKE '%{$cari}%'
                            OR a.city_name LIKE '%{$cari}%'
                            OR a.postal_code LIKE '%{$cari}%'
                            OR a.status LIKE '%{$cari}%'
                        ";
            $sqlCari .= sprintf(" AND (%s) ", $sqlFilter);
        }
        $sqlOrder   = "ORDER BY a." . $orderColumn . " " . $orderDir;
        $sqlLimit   = "LIMIT " . $cariStart . ", " . $cariLength;

        $queryM = "SELECT 
                    a.id
                    , a.`name`
                    , a.address
                    , a.email
                    , a.phone
                    , a.postal_code
                    , a.province_id
                    , a.city_id
                    , a.`status`
                    , b.province
                    , c.city_name
                    , (
                        SELECT COUNT(email) FROM m_order WHERE email = a.email
                    ) order_all
                    , (
                        SELECT COUNT(email) FROM m_order WHERE email = a.email AND status_order = 0
                    ) order_process
                    , (
                        SELECT COUNT(email) FROM m_order WHERE email = a.email AND status_order = 1
                    ) order_done
                FROM 
                    m_profil a
                    LEFT JOIN m_province b ON a.province_id = b.province_id
                    LEFT JOIN m_city c ON a.city_id = c.city_id";

        $query      = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari $sqlOrder $sqlLimit";
        $listData   = $this->db->query($query)->getResultArray();

        $queryTotal = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari";
        $dataTotal  = $this->db->query($queryTotal)->getResultArray();

        $id   = 0;
        $data = array();
        foreach ($listData as $row) {
            array_push($data, $row);
            $id++;
        }

        $response = array(
            "draw"              => intval($request['draw']),
            "recordsTotal"      => intval(sizeof($dataTotal)),
            "recordsFiltered"   => intval(sizeof($dataTotal)),
            "data"              => $data
        );

        return $this->response->setJSON($response);
    }

    public function displayAllOrder()
    {
        $request     = $_REQUEST;
        $col         = array(1 => 'order_id', 2 => 'email', 3 => 'invoice', 4 => 'subTotal', 5 => 'status_order');
        $cari        = $request['search']['value'];
        $cari        = ($cari ? strtolower($cari) : $cari);
        $cariStart   = $request['start'];
        $cariLength  = $request['length'];
        $orderColumn = $col[$request['order'][0]['column']];
        $orderDir    = $request['order'][0]['dir'];

        $sqlCari = "";

        if (!empty($cari)) {
            $sqlFilter    = "a.order_id LIKE '%{$cari}%'
                            OR a.email LIKE '%{$cari}%'
                            OR a.invoice LIKE '%{$cari}%'
                            OR a.subTotal LIKE '%{$cari}%'
                            OR a.status_order LIKE '%{$cari}%'
                        ";
            $sqlCari .= sprintf(" AND (%s) ", $sqlFilter);
        }
        $sqlOrder   = "ORDER BY a." . $orderColumn . " " . $orderDir;
        $sqlLimit   = "LIMIT " . $cariStart . ", " . $cariLength;

        $queryM = "SELECT
                        a.id
                        , a.order_id
                        , a.email
                        , CONCAT(b.first_name, ' ',b.last_name) name_customer
                        , a.invoice
                        , a.subTotal
                        , a.status_order
                    FROM 
                        m_order a
                        LEFT JOIN m_profil b ON a.email = b.email
                    GROUP BY a.order_id ASC
                    ORDER BY a.created_at ASC
                    ";

        $query      = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari $sqlOrder $sqlLimit";
        $listData   = $this->db->query($query)->getResultArray();

        $queryTotal = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari";
        $dataTotal  = $this->db->query($queryTotal)->getResultArray();

        $id   = 0;
        $data = array();
        foreach ($listData as $row) {
            array_push($data, $row);
            $id++;
        }

        $response = array(
            "draw"              => intval($request['draw']),
            "recordsTotal"      => intval(sizeof($dataTotal)),
            "recordsFiltered"   => intval(sizeof($dataTotal)),
            "data"              => $data
        );

        return $this->response->setJSON($response);
    }

    public function displayOrderConfirm()
    {
        $request     = $_REQUEST;
        $col         = array(1 => 'order_id', 2 => 'email', 3 => 'invoice', 4 => 'subTotal', 5 => 'status_order');
        $cari        = $request['search']['value'];
        $cari        = ($cari ? strtolower($cari) : $cari);
        $cariStart   = $request['start'];
        $cariLength  = $request['length'];
        // $orderColumn = $col[$request['order'][0]['column']];
        // $orderDir    = $request['order'][0]['dir'];

        $sqlCari = "";

        if (!empty($cari)) {
            $sqlFilter    = "a.order_id LIKE '%{$cari}%'
                            OR a.email LIKE '%{$cari}%'
                            OR a.invoice LIKE '%{$cari}%'
                            OR a.subTotal LIKE '%{$cari}%'
                            OR a.status_order LIKE '%{$cari}%'
                        ";
            $sqlCari .= sprintf(" AND (%s) ", $sqlFilter);
        }
        // $sqlOrder   = "ORDER BY a." . $orderColumn . " " . $orderDir;
        $sqlLimit   = "LIMIT " . $cariStart . ", " . $cariLength;

        $queryM = "SELECT
                        a.id
                        , a.order_id
                        , a.email
                        , CONCAT(b.first_name, ' ',b.last_name) name_customer
                        , a.invoice
                        , (
                            SELECT COUNT(qty) FROM m_cart_log WHERE email = a.email
                        ) qty
                        , a.subTotal
                        , a.status_order
                    FROM 
                        m_order a
                        LEFT JOIN m_profil b ON a.email = b.email
                    GROUP BY a.order_id
                    ORDER BY qty DESC, a.created_at DESC";

        $query      = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari $sqlLimit";
        // $query      = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari $sqlOrder $sqlLimit";
        $listData   = $this->db->query($query)->getResultArray();

        $queryTotal = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari";
        $dataTotal  = $this->db->query($queryTotal)->getResultArray();

        $id   = 0;
        $data = array();
        foreach ($listData as $row) {
            $subData = [];
            $subData[] = $row['id'];
            $subData[] = $row['order_id'];
            $subData[] = $row['email'];
            $subData[] = $row['name_customer'];
            $subData[] = $row['invoice'];
            $subData[] = $row['qty'];
            $subData[] = $row['subTotal'];

            if ($row['status_order'] == 0) {
                $subData[] = '<span class="badge bg-warning">Verifikasi Pembayaran</span>';
            } else if ($row['status_order'] == 1) {
                $subData[] = '<span class="badge bg-info">Delivery Proses</span>';
            } else if ($row['status_order'] == 2) {
                $subData[] = '<span class="badge bg-success">Complete</span>';
            } else {
                $subData[] = '<span class="badge bg-danger">Cancelled</span>';
            }

            array_push($data, $subData);
            $id++;
        }

        $response = array(
            "draw"              => intval($request['draw']),
            "recordsTotal"      => intval(sizeof($dataTotal)),
            "recordsFiltered"   => intval(sizeof($dataTotal)),
            "data"              => $data
        );

        return $this->response->setJSON($response);
    }

    public function updConfirm()
    {
        $id = $this->request->getVar('id');
        if ($id) {
            $qry  = $this->db->table('m_order')->whereIn('id', $id)->get()->getResultArray();
            $insTimeline = [];
            foreach ($qry as $each) {
                $order_id = $each['order_id'];
                $res2 = $this->db->table('m_payment')->where('order_id', $order_id)->update(['status' => 1]);

                $getData = $this->db->table('m_timeline')->where('order_id', $order_id)->get()->getResultArray();
                foreach ($getData as $each) {
                    $data = array(
                        'timeline_id' => $each['timeline_id'],
                        'order_id' => $each['order_id'],
                        'slug' => $each['slug'],
                        'email' => $each['email'],
                        'phone' => $each['phone'],
                        'feedback' => "Telah Melakukan Pembayaran",
                        'status' => 1,
                    );
                    array_push($insTimeline, $data);
                }
                // insert data to tbl m_timeline
                $insertTimeline = $this->db->table("m_timeline")->insertBatch($insTimeline);
            }
            $res  = $this->db->table('m_order')->whereIn('id', $id)->update(['status_order' => 1]);
            
            if ($res && $res2 && $insertTimeline) {
                $response = ['status' => 1, 'msg' => "success"];
            } else {
                $response = ['status' => 1, 'msg' => "Failed to update status"];
            }
            return $this->response->setJSON($response);
        } else {
            $response = ['status' => 0, 'msg' => "id not found"];
        }
        return $this->response->setJSON($response);
    }

    public function purchaseReport()
    {
        $start = $this->request->getVar('start');
        $end   = $this->request->getVar('end');

        $startDate  = Time::createFromFormat('d/m/Y', $start)->format('Y-m-d');
        $endDate    = Time::createFromFormat('d/m/Y', $end)->format('Y-m-d');

        $qry = "SELECT
                    mo.kodeBuy
                    , DATE(mo.tglBuy) tglBuy
                    , (
                        SELECT LOWER(mc.`name`) 
                        FROM m_category mc 
                        LEFT JOIN m_product mp ON mc.category_id = mp.category_id 
                        WHERE mp.product_id = a.product_id LIMIT 1
                    ) nameCategory
                    , (SELECT LOWER(mp.`name`) FROM m_product mp WHERE mp.product_id = a.product_id LIMIT 1) nameProduct
                    , a.qty
                    , a.price
                    , (SELECT ms.`name` FROM m_size ms WHERE ms.size_id = a.size_id) nameColor
                    , (SELECT LOWER(mc.`name`) FROM m_color mc WHERE mc.color_id = a.color_id) nameSize
                    , mo.totQty
                    , mo.totPrice
                FROM d_order a
                LEFT JOIN (
                        SELECT 
                            mo.order_id kodeBuy
                            , mo.created_at tglBuy 
                            , (SELECT SUM(d.qty) FROM d_order d WHERE mo.order_id = d.order_id) totQty
                            , (SELECT SUM(d.price) FROM d_order d WHERE mo.order_id = d.order_id) totPrice
                        FROM m_order mo
                ) mo ON mo.kodeBuy = a.order_id
                WHERE DATE(mo.tglBuy) BETWEEN '$startDate' AND '$endDate'
                ORDER BY a.order_id DESC";
        $getData = $this->db->query($qry)->getResultArray();
        
        $lapDt = [];
        foreach ($getData as $each) {
            array_push($lapDt, $each);
        }

        if ($getData) {
            $response = ['status' => 1, 'msg' => "success", 'data' => $lapDt];
        } else {
            $response = ['status' => 0, 'msg' => "fail", 'data' => null];
        }
        return $this->response->setJson($response);
    }
}
