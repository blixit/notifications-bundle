<?php

namespace RA\NotificationsBundle\Model\Configuration;

/**
 * Class Configuration
 * @package RA\NotificationsBundle\Model\Configuration
 */
class Configuration {

    /**
     * @var string $androidServerKey
     */
    private $androidServerKey;

    /**
     * @var string $androidFcmServer
     */
    private $androidFcmServer;

    /**
     * @var string $iosPushPassPhrase
     */
    private $iosPushPassPhrase;

    /**
     * @var string $iosPushCertificate
     */
    private $iosPushCertificate;

    /**
     * @var string $iosApnsServer
     */
    private $iosApnsServer;

    /**
     * @var string $deviceClassName
     */
    private $deviceClassName;

    /**
     * @var array $contexts
     */
    private $contexts;

    public function __construct(array $parameters)
    {
        $this->setAndroidServerKey($parameters['android_server_key']);
        $this->setAndroidFcmServer($parameters['android_fcm_server']);

        $this->setIosPushPassPhrase($parameters['ios_push_passphrase']);
        $this->setIosPushCertificate($parameters['ios_push_certificate']);
        $this->setIosApnsServer($parameters['ios_apns_server']);

        $this->setDeviceClassName($parameters['device_class_name']);
        $this->setContexts($parameters['contexts']);
    }

    /**
     * @return string
     */
    public function getAndroidServerKey(): string
    {
        return $this->androidServerKey;
    }

    /**
     * @param string $androidServerKey
     */
    public function setAndroidServerKey(string $androidServerKey) : Configuration
    {
        $this->androidServerKey = $androidServerKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getAndroidFcmServer(): string
    {
        return $this->androidFcmServer;
    }

    /**
     * @param string $androidFcmServer
     */
    public function setAndroidFcmServer(string $androidFcmServer) : Configuration
    {
        $this->androidFcmServer = $androidFcmServer;
        return $this;
    }

    /**
     * @return string
     */
    public function getIosPushPassPhrase(): string
    {
        return $this->iosPushPassPhrase;
    }

    /**
     * @param string $iosPushPassPhrase
     */
    public function setIosPushPassPhrase(string $iosPushPassPhrase) : Configuration
    {
        $this->iosPushPassPhrase = $iosPushPassPhrase;
        return $this;
    }

    /**
     * @return string
     */
    public function getIosPushCertificate(): string
    {
        return $this->iosPushCertificate;
    }

    /**
     * @param string $iosPushCertificate
     */
    public function setIosPushCertificate(string $iosPushCertificate) : Configuration
    {
        $this->iosPushCertificate = $iosPushCertificate;
        return $this;
    }

    /**
     * @return string
     */
    public function getIosApnsServer(): string
    {
        return $this->iosApnsServer;
    }

    /**
     * @param string $iosApnsServer
     */
    public function setIosApnsServer(string $iosApnsServer) : Configuration
    {
        $this->iosApnsServer = $iosApnsServer;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceClassName(): string
    {
        return $this->deviceClassName;
    }

    /**
     * @param string $deviceClassName
     */
    public function setDeviceClassName(string $deviceClassName) : Configuration
    {
        $this->deviceClassName = $deviceClassName;
        return $this;
    }

    /**
     * @return array
     */
    public function getContexts(): array
    {
        return $this->contexts;
    }

    /**
     * @param array $contexts
     */
    public function setContexts(array $contexts = []) : Configuration
    {
        $this->contexts = $contexts;
        return $this;
    }
}