<?php

namespace lvl51\sma;

/**
 * Class SimplifiedMemberAdmin
 * @package lvl51\sma
 */
class SimplifiedMemberAdmin {
    public static function conf() {
        return \Config::inst()->forClass(self::class);
    }
}