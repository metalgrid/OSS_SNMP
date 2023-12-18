<?php

// IPInfusion provide a network operating system called OcNOS
// that runs on various hardware platforms.
// The sysDescr field is too generic, so we check the sysObjectId as well.

if($sysObjectId == '.1.3.6.1.4.1.36673.100.1.2.1.1.2') {
    if (preg_match('/^Hardware Model:([\w_-]+), Software version: OcNOS,([\d\.]+)$/', $sysDescr, $matches) == 1) {
        $this->setVendor('IPInfusion');
        $this->setModel($matches[1]);
        $this->setOs('OcNOS');
        $this->setOsVersion($matches[2]);
        $this->setOsDate(null);
    }
}