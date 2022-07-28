<?php

namespace App\Controllers;

use App\Models\LoginAdminModel;
use CodeIgniter\I18n\Time;

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
        $col         = array(1 => 'category_id', 2 => 'category_name', 3 => 'product_id', 4 => 'product_name', 5 => 'price', 6 => 'weight', 7 => 'stock', 8 => 'created_at');
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

        $queryM = "SELECT a.category_id, a.name as category_name, b.product_id, b.name as product_name, b.price, b.weight, b.stock, b.created_at
                FROM 
                    m_category a 
                    LEFT JOIN m_product b ON a.category_id = b.category_id 
                WHERE
                    b.is_valid = 1";

        $query      = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari $sqlOrder $sqlLimit";
        $data       = $this->db->query($query)->getResultArray();
        // dd($data);

        $queryTotal = "SELECT (@cnt := @cnt + 1) orderID , a.* FROM ($queryM) a CROSS JOIN (SELECT @cnt := 0) b2 WHERE 1=1 $sqlCari";
        $dataTotal  = $this->db->query($queryTotal)->getResultArray();


        $json_data = array(
            "draw"              => intval($request['draw']),
            "recordsTotal"      => count($dataTotal),
            "recordsFiltered"   => count($dataTotal),
            "data"              => $data
        );

        echo json_encode($json_data);
    }

    public function getCategoryCode()
    {
        $query = "SELECT a.id, a.name, a.category_id, a.slug, a.created_at FROM m_category a WHERE a.slug IS NOT NULL";
        $data  = $this->db->query($query)->getResultArray();

        echo json_encode($data);
    }

    public function getNewCategoryCode()
    {
        $slug = $this->request->getVar('slug');
        $whereSlug = $slug != '' ? "AND a.slug='$slug'" : "";

        $query  = "SELECT 
                        a.slug as slug_category, a.name as name_category, a.category_id, a.created_at, 
                        b.slug as slug_product, b.product_id, b.name as name_product, b.price, b.weight, b.stock
                    FROM 
                        m_category a 
                        LEFT JOIN m_product b ON a.category_id = b.category_id
                    WHERE 
                        1=1
                        $whereSlug
                    ORDER BY a.category_id DESC LIMIT 1";
        $result = $this->db->query($query)->getRowArray();

        if (count($result) > 0) {
            $category_id = $result['category_id'];
            $product_id  = $result['product_id'];
            if ($slug == '') {
                $newCategoryId          = $category_id + 1;
                $data['category_id']    = sprintf('%02d', $newCategoryId);
                $data['product_id']     = '01';
                $data['product_name']   = '';
                $data['product_price']  = '';
                $data['product_weight'] = '';
                $data['product_stock']  = '';
            } else {
                $newProductId           = $product_id == '' ? $product_id + 1 : '';
                $data['category_id']    = $category_id;
                $data['category_name']  = $result['name_category'];
                $data['product_id']     = sprintf('%02d', $newProductId);
                $data['product_name']   = $result['name_product'];
                $data['product_price']  = $result['price'];
                $data['product_weight'] = $result['weight'];
                $data['product_stock']  = $result['stock'];
            }
        } else {
            $data[] = array();
        }
        echo json_encode($data);
    }

    public function AddMasterCategory()
    {
        $optCategory    = $this->request->getVar('optCategory');
        $category_id    = $this->request->getVar('category_id');
        $category_name  = $this->request->getVar('category_name');
        $product_id     = $this->request->getVar('product_id');
        $product_name   = $this->request->getVar('product_name');
        $product_price  = $this->request->getVar('product_price');
        $product_weight = $this->request->getVar('product_weight');
        $product_stock  = $this->request->getVar('product_stock');
        $slugCategory   = strtolower($category_name) . "-" . $category_id;
        $slugProduct    = strtolower($product_name) . "-" . $product_id;
        $return         = array();

        if ($optCategory == '') {
            $insertCategory = "INSERT INTO `m_category` (`slug`, `name`, `category_id`, `created_at`, `updated_at`) VALUES ('$slugCategory', '$category_name', '$category_id', '" . TIme::now() . "')";
            $queryCategory = $this->db->query($insertCategory);

            if ($queryCategory) {
                for ($i = 0; $i < count($product_id); $i++) {
                    $insertProduct = "INSERT INTO `m_product` (`slug`, `name`, `product_id`, `category_id`, `price`, `weight`, `stock`, `created_at`) VALUES ('$slugProduct', '$product_name', '$product_id', '$category_id', $product_price, $product_weight, $product_stock, '" . TIme::now() . "')";
                    $queryProduct = $this->db->query($insertProduct);
                }
                $return = ['status' => 1];
            } else {
                $return = ['status' => 0];
            }
        } else {
            $queryCategory = true;
            for ($i = 0; $i < count($product_id); $i++) {
                $insertProduct = "INSERT INTO `m_product` (`slug`, `name`, `product_id`, `category_id`, `price`, `weight`, `stock`, `created_at`) VALUES ('$slugProduct', '$product_name', '$product_id', '$category_id', $product_price, $product_weight, $product_stock, '" . TIme::now() . "')";
                $queryProduct = $this->db->query($insertProduct);
            }
            $return = ['status' => 1];
        }

        echo json_encode($return);
    }
}
