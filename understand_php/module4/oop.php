<?php
class BankAccount {
    public $accountNumber;
    public $balance;

    public function deposit( $amount ) {
        if ( $amount > 0 ) {
            return $this->balance += $amount;
        }

    }

}

$account = new BankAccount();
$account->accountNumber = "1";
$account->balance = 10;

echo $account->deposit( 0 );
