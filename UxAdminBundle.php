<?php

namespace Ux\Bundle\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Ux\Bundle\AdminBundle\DependencyInjection\UxAdminExtension;

class UxAdminBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        // return the right extension instead of "auto-registering" it. Now the
        // alias can be uxadmin instead of ux_admin..
        if (null === $this->extension) {
            return new UxAdminExtension();
        }

        return $this->extension;
    }

}
