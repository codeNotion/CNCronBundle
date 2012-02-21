<?php

namespace CN\Bundle\CronBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use CN\Bundle\CronBundle\TaskCompilerPass;

class CNCronBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new TaskCompilerPass());
    }
}
