<?php

namespace Alchemy\Zippy\Adapter\GNUTar;

class TarGzGNUTarAdapter extends TarGNUTarAdapter
{
    protected function getLocalOptions()
    {
        return array('--gzip');
    }
}
