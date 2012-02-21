<?php
namespace CN\Bundle\CronBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class TaskCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (false === $container->hasDefinition('cn_cron.task_pool')) {
            return;
        }

        $definition = $container->getDefinition('cn_cron.task_pool');

        foreach ($container->findTaggedServiceIds('cn_cron.task') as $id => $attributes) {
            $definition->addMethodCall('addTask', array(new Reference($id)));
        }
    }
}
