<?php
namespace Norysokny\ECom;

class OrderManager {
    public function __construct() {
        echo "OrderManager";
    }

    public function getOrders() {
        echo "Orders";
    }

    public function getLineItems(int $orderId) {
        echo "LineItems";
    }
}