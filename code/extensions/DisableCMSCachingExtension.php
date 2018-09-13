<?php

class DisableCMSCachingExtension extends DataExtension
{
    // Called from LeftAndMain::452
    public function init($dummy)
    {
        HTTPCacheControl::singleton()->disableCache();
    }
}
