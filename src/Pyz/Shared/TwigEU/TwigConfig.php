<?php

namespace Pyz\Shared\TwigEU;

use Spryker\Shared\Twig\TwigConfig as SprykerTwigConfig;

class TwigConfig extends SprykerTwigConfig
{
public function getYvesThemeName(): string
{
    return 'green';
}
}
