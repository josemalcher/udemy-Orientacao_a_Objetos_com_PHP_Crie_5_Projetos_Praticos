<?php


class BankAccount
{
    public $balance = 0;

    public function __construct()
    {
        $this->balance = 30;
    }

    public function deposit($money)
    {
        $this->balance += $money;
    }

    public function withDraw($money)
    {
        if ($money > $this->balance) {
            return false;
        }

        $this->balance -= $money;
    }
}

$bankAccaout1 = new BankAccount();
$bankAccaout1->deposit(10);
$bankAccaout1->deposit(20);

print $bankAccaout1->balance; // propriedade deve ser private



