<?php

$classAnonymous = new class{
    public function log($message)
    {
        return $message;
    }
};

class BackAccount
{
    public function withDraw($value, $classAnonymous)
    {
        return $classAnonymous->log("Loggin... WithDraw....");
    }
}

$bank = new BackAccount();
print $bank->withDraw(20, $classAnonymous);
// Loggin... WithDraw....