<?php
class accountBalance{
    private $balance;
    public function getBalance(){
        if ($this->balance == null || $this->balance == 0){
            $this->balance = 0;
        }
        return $this->balance;
    }
    public function withdraw($account){
        $this->balance-= $account;
        echo "withdraw successful \n";
    }
    public function deposit($account){
        $this->balance += $account;
        echo "deposit successful \n ";
    }
}
$account = new accountBalance;
echo $account->getBalance();
$account->deposit(1000);
echo $account->getBalance()."\n";
$account->withdraw(500);
echo $account->getBalance()."\n";