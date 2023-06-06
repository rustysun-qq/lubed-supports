<?php
namespace Lubed\Supports\PSR;

interface Container
{
    public function get(string $id);
    public function has(string $id);
}
