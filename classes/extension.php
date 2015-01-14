<?php
/**
 * This file is part of twig-extension package.
 */
namespace TwigExtension;

use Twig_Extension;
use Twig_Function_Function;
use Twig_Function_Method;

class Extension extends Twig_Extension
{
    public function getName()
    {
        return 'twig-extension';
    }

    public function getFunctions()
    {
        return array(
            'form_csrf' => new Twig_Function_Function('Form::csrf'),
        );
    }
}
