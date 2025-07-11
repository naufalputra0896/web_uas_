<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController
{
    private $productModel;
    public function __construct($pdo)
    {
        $this->productModel = new Product($pdo);
    }

    public function index()
    {
        return $this->productModel->all();
    }

    public function show($id)
    {
        return $this->productModel->find($id);
    }
}
?>