<?php

class Html
{
    public static $mailTag = "<html>";
    const END_TAG = "</html>";

    public static function openTagHtml()
    {
        return self::$mailTag;
    }

    public static function EndTagHtml()
    {
        return self::END_TAG;
    }
}

print Html::openTagHtml();
print Html::EndTagHtml();
print "\n";
print html::$mailTag;
print html::END_TAG;
