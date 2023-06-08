<?php
namespace Lubed\Supports;

interface Resource {
    public function exists() : bool;

    public function isOpen() : bool;

    public function getStream();

    public function createRelative(string $relativePath);

    public function getFilename() : string;

    public function getURL() : string;
}
