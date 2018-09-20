<?php

namespace lvl51\sma;

/**
 * Extensions for the default SecurityAdmin.
 *
 * Prevents the access, even if the full url is known/typed.
 * The menu entry itself is removed by the {@see namespace lvl51\sma\LeftAndMain} extension.
 *
 */
class SecurityAdminExtension extends \Extension {
    public function alternateAccessCheck() {
        return false;
    }
}