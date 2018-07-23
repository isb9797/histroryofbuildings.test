<?php

$output = '';
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
        $output = '<h2>uLogin Installer</h2><p>Thanks for installing uLogin!</p><br />';
        break;
    case xPDOTransport::ACTION_UPGRADE:
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}
return $output;
