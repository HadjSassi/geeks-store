<?php
require_once 'controller/shop_controller.php';
use Geekstore\shop_controller;

$shopController = new shop_controller();
$shopController->ShopSettingsAction();
