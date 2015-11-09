<?php

namespace JGI\DeadmanssnitchBundle\Listener;

use Dizda\CloudBackupBundle\Event\BackupEvent;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;

class NotifyWhenBackupIsCompletedListener
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @param BackupEvent $event
     */
    public function whenBackupIsCompleted(BackupEvent $event)
    {
        $request = MessageFactoryDiscovery::find()->createRequest('GET', $this->url);
        HttpClientDiscovery::find()->sendRequest($request);
    }
}
