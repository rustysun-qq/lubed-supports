<?php
namespace Lubed\Supports;

interface Container
{
    public function get(string $id);
    public function has(string $id);
}