<?php

namespace JGI\DeadmanssnitchBundle\Listener;

use Dizda\CloudBackupBundle\Event\BackupEvent;

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
        //todo
    }
}
