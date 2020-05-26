<?php

namespace Export;

use Export\Contract\Export;

class JsonExport implements Export
{
    public function doExport()
    {
        return "Json Export";
    }
}