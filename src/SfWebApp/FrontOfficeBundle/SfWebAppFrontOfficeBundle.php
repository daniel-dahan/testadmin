
<?php

namespace SfWebApp\FrontOfficeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SfWebAppFrontOfficeBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}