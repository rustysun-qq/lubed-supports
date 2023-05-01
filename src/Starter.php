<?php

namespace Lubed\Supports;

interface Starter
{
    public function __construct(array $params);
    public function start();
}