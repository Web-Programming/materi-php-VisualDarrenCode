<?php
require_once "app/produk/item.php";
include "app/services/item.php";

use app\produk\item as produkItem;
use app\services\item as serviceItem;

$produkItem = new produkItem("laptop");
$serviceItem = new serviceItem("service laptop");

echo "Produk->info();"\n";
echo $service->info();