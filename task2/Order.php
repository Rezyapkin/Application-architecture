<?php

namespace task2;

class Order {
    public function __construct(float $total, int $phone) {
        $this->date = date("d.m.Y");
        $this->num = random_int(1, 100000);
        $this->total = $total;
        $this->phone = $phone;
    }

    public function pay(IPaymentSystem $paymentSystem) {
        $this->paymentSystem = $paymentSystem;
        $paymentSystem->pay($this);
    }

    public function getPayInfo() {
        return isset($this->paymentSystem) ? $this->paymentSystem->getPayInfo($this) : "Оплата по данному заказу не производилась";
    }
}