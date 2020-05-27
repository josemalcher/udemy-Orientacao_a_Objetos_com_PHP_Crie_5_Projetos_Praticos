<?php

trait Mytrait
{
    public function Hello()
    {
        return "Olá mundo Trait 1";
    }
}

trait Mytrait2
{
    public function showName($name)
    {
        return " Olá, " . $name;
    }
    public function Hello()
    {
        return "Olá mundo de Trait 2";
    }
}

class Client
{
    use Mytrait, Mytrait2 {
        Mytrait2::Hello insteadof Mytrait; // usar o hello de mytrait
        Mytrait::Hello as AliasHellow; // ALIAS

        Mytrait::Hello as private helloVisibilitPrivate; // modificando a visibilidade do método
    }

    public function teste()
    {
        return $this->helloVisibilitPrivate();
    }
}

$c = new Client();
print $c->Hello();
print "<br>";
print $c->AliasHellow();
print "<br>";
print $c->showName("José");
