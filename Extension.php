<?php

namespace Bolt\Extension\TimCooper\ColourSpectrum;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{


    public function initialize() {
        $this->addCss('assets/spectrum/spectrum.css');
        $this->addJavascript('assets/spectrum/spectrum.js', true);
    }

    public function getName()
    {
        return "ColourSpectrum";
    }

}
