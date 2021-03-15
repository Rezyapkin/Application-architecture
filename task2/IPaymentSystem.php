<?php

namespace task2;

interface IPaymentSystem {
    public function pay(Order $order);
    public function getPayInfo(Order $order);
}