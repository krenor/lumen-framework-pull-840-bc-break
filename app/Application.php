<?php

namespace App;

use Laravel\Lumen\Application as LumenApplication;

class Application extends LumenApplication
{
    /**
     * {@inheritdoc}
     */
    public function version()
    {
        return 'Lumen (5.7.5) (Laravel Components 5.7.5)';
    }
}

