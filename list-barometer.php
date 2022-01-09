<?php
require_once 'vendor/autoload.php';


use Libralyze\Devices\Device\DeviceProfile;

foreach (DeviceProfile::getEnum() as $enum) {
    $device = DeviceProfile::get($enum);
    if ($device->hasBarometer()) {
        echo $device->getName()."\n";
    }

   // $this->assertInstanceOf(DeviceInterface::class, $device);
    //$this->assertEquals($enum, $device->getEnum());
    //if (!strpos($device->getNameOfClass(), 'Unknown')) {
     //   $this->assertNotEmpty($device->getName());
   // }
}
