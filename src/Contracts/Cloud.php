<?php

declare(strict_types=1);

namespace SwooleTW\Hyperf\Filesystem\Contracts;

interface Cloud extends Filesystem
{
    /**
     * Get the URL for the file at the given path.
     */
    public function url(string $path): string;
}
