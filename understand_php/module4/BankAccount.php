<?php
class BankAccount{

    public $balance;

    public function __construct($initialBalance){
        $this->balance = $initialBalance;
    }

    function getBalance(){
        return $this->balance;
    }

    function deposit($amount){
      
        if($amount > 0 ){
            $this->balance += $amount;
        }

        return $this;
    }

    function withdraw($amount){
        if($amount > 0){
            $this->balance -= $amount;
        }
        return $this;
    }


}


class SavingsAccount extends BankAccount{
    private $interestRate;

    public function __construct($balance, $interestRate){
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }

    public function addInterest(){        
        
        if($this->interestRate >0){
            $totalInterest = $this->balance * $this->interestRate;
            //$this->deposit($totalInterest);
        }
        
    }

}


$account = new BankAccount(500);
//echo $account->getBalance();
echo "\n";
$account->deposit(1000);
//echo $account->getBalance();
echo "\n";
$account->withdraw(200);
//echo $account->getBalance();
echo "\n";
$sbaccount = new SavingsAccount(300, 8.00);
$sbaccount->addInterest();
echo $account->getBalance();

