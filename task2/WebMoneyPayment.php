<?php

namespace task2;

class WebMoneyPayment implements IPaymentSystem {
    public function pay(Order $order) {
        echo "Оплата через Webmoney заказа №{$order->num} от {$order->date} на сумму {$order->total}<br>";
    }

    public function getPayInfo(Order $order) {
        return "Оплата через Webmoney заказа №{$order->num} от {$order->date} на сумму {$order->total} прошла успешно";
    }

}