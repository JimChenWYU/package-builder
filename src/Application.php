<?php

namespace JimChen\PackageBuilder;

use JimChen\PackageBuilder\Commands\BuildCommand;
use Symfony\Component\Console\Application as BasicApplication;

/**
 * Class Application.
 */
class Application extends BasicApplication
{
    /**
     * Application constructor.
     *
     * @param string $name
     * @param string $version
     */
    public function __construct($name, $version)
    {
        parent::__construct($name, $version);

        $this->add(new BuildCommand());
    }
}
