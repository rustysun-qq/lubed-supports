<?php
namespace Lubed\Supports;
interface Application {
    public function __construct(string $name, Config $config);

    public function init();

    public function run();
}