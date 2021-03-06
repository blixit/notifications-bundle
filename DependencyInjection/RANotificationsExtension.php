<?php

namespace RA\NotificationsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class RANotificationsExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('ra_notifications.android.server_key',    $config['android']['server_key']);
        $container->setParameter('ra_notifications.android.gcm_server',    $config['android']['fcm_server']);
        $container->setParameter('ra_notifications.ios.push_certificate',  $config['ios']['push_certificate']);
        $container->setParameter('ra_notifications.ios.push_passphrase',   $config['ios']['push_passphrase']);
        $container->setParameter('ra_notifications.ios.protocol',          $config['ios']['protocol']);
        $container->setParameter('ra_notifications.ios.apns_server',       $config['ios']['apns_server']);
        $container->setParameter('ra_notifications.ios.apns_topic',        $config['ios']['apns_topic']);
        $container->setParameter('ra_notifications.device.class',          $config['device']['class']);
        $container->setParameter('ra_notifications.device.manager',        $config['device']['manager']);

        if( array_key_exists("contexts", $config))
        {
            $container->setParameter('ra_notifications.contexts', $config["contexts"]);
        }
    }
}
