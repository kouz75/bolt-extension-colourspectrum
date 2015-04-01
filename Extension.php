<?php

namespace Bolt\Extensions\TimCooper\ColourSpectrum;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{

    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->app['config']->fields->addField(new ColourSpectrumField());
        if ($this->app['config']->getWhichEnd()=='backend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
    }

    public function initialize() {
        $this->addCss('assets/spectrum/spectrum.css');
        $this->addJavascript('assets/spectrum/spectrum.js', true);
    }

    public function getName()
    {
        return "ColourSpectrum";
    }

}
