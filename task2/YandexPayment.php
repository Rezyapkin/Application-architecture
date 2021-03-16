<?php

namespace task2;

class YandexPayment implements IPaymentSystem {
    public function pay(Order $order) {
        echo "Оплата через Яндекс.Деньги заказа №{$order->num} от {$order->date} на сумму {$order->total}<br>";
    }

    public function getPayInfo(Order $order) {
        return "Оплата через Яндекс.Деньги заказа №{$order->num} от {$order->date} на сумму {$order->total} прошла успешно";
    }

}