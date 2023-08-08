<?php
namespace Geekstore;
require_once 'model/shop.php';

use Geekstore\Shop;

class shop_controller
{
    private $shopModel;

    public function __construct()
    {
        $this->shopModel = new shop();
    }

    public function ShopSettingsAction()
    {
        $shop_settings = $this->shopModel->getshopSettings();
        require_once 'view/include/shop.php';
    }

}
