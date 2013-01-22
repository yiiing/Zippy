<?php

namespace Alchemy\Zippy\Adapter\GNUTar;

use Alchemy\Zippy\Adapter\AbstractTarAdapter;

class TarGNUTarAdapter extends AbstractTarAdapter
{
    protected function getLocalOptions()
    {
        return array();
    }

    /**
     * @inheritdoc
     */
    public static function getName()
    {
        return 'gnu-tar';
    }

    /**
     * @inheritdoc
     */
    public static function getDefaultDeflatorBinaryName()
    {
        return 'tar';
    }

    /**
     * @inheritdoc
     */
    public static function getDefaultInflatorBinaryName()
    {
        return 'tar';
    }

    /**
     * @inheritdoc
     */
    protected function isProperImplementation($versionOutput)
    {
        $lines = explode("\n", $versionOutput, 2);

        return false !== stripos($lines[0], '(gnu tar)');
    }
}
