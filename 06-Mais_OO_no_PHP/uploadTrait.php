<?php

trait uploadTrait
{
    public function doUpload($file)
    {
        return true;
    }
}

class Productss
{
    use uploadTrait;
}

class Profile
{
    use uploadTrait;
}

$prod1 = new Productss();
print $prod1->doUpload("arquivo...."); //  1

print "<br>";

$prod2 = new Profile();
print $prod2->doUpload("arquivo 2....");//  1
