<?php

namespace Bolt\Extensions\TimCooper\ColourSpectrum;

use Bolt\Field\FieldInterface;

class ColourSpectrumField implements FieldInterface
{

    public function getName()
    {
        return 'colourspectrum';
    }

    public function getTemplate()
    {
        return '_colourspectrum.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return array('default'=>'');
    }

}
