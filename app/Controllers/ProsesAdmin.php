<?php

namespace App\Controllers;

use App\Models\LoginAdminModel;

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

    public function getCategoryCode()
    {
        $query = "SELECT a.id, a.name, a.category_id, a.slug, a.created_at FROM m_category a WHERE a.slug IS NOT NULL";
        $data  = $this->db->query($query)->getResultArray();

        echo json_encode($data);
    }

    public function getNewCategoryCode($slug = '')
    {
        // $slug = $this->request->getVar('slug');
        $whereSlug = $slug != '' ? "AND a.slug='$slug'" : "";

        $query  = "SELECT 
                        a.slug as slug_category, a.name as name_category, a.category_id, a.created_at, 
                        b.slug as slug_product, b.product_id, b.name as name_product, b.price, b.weight, b.qty
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
            if ($slug) {
                $newCategoryId  = $category_id + 1;

                $data['category_id']    = $newCategoryId;
                $data['product_id']     = '01';
                $data['product_name']   = '';
                $data['product_price']  = '';
                $data['product_weight'] = '';
                $data['product_qty']    = '';
            } else {
                $newProductId = $product_id + 1;
                $data['category_id']    = $category_id;
                $data['category_name']  = $result['name_category'];
                $data['product_id']     = $newProductId;
                $data['product_name']   = $result['name_product'];
                $data['product_price']  = $result['price'];
                $data['product_weight'] = $result['weight'];
                $data['product_qty']    = $result['qty'];
            }
        } else {
            $data[] = array();
        }
        echo json_encode($data);
    }
}
