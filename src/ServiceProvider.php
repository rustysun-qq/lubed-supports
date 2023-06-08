<?php
namespace Lubed\Supports;

use Lubed\Supports\PSR\ContainerInterface as PSRContainer;

interface ServiceProvider {
    public function register(PSRContainer $container);
}
