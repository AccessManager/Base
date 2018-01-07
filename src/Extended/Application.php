<?php

namespace AccessManager\Base\Extended;

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

    /**
     * Customise path to language files, and point it
     * to Lang directory contained in Base package.
     *
     * @return string
     */
    public function langPath()
    {
        return __DIR__ . "/../Lang";
    }
}