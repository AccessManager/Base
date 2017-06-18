<?php

namespace AM3\Base\Extended;

use Illuminate\Foundation\Application as OriginalApp;

class Application extends OriginalApp
{
    /**
     * Get the path to the public / web directory.
     *
     * @return string
     */
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'html';
    }
}