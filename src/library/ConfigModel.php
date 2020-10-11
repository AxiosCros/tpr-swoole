<?php

declare (strict_types = 1);

namespace tpr\server\swoole\library;

use tpr\Model;

class ConfigModel extends Model
{
    public string $server = '';
}