<?php
namespace Lubed\Supports;

use Lubed\Supports\PSR\Container;

interface ServiceProvider {
    public function register(Container $container);
}
