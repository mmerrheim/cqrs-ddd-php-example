<?php

declare(strict_types = 1);

namespace CodelyTv\Test\Mooc\Notification;

use CodelyTv\Mooc\Notifications\Domain\NotificationRepository;
use CodelyTv\Test\Mooc\Shared\Infrastructure\MoocContextFunctionalTestCase;

abstract class NotificationModuleFunctionalTestCase extends MoocContextFunctionalTestCase
{
    protected function repository(): NotificationRepository
    {
        return $this->service('codely.mooc.notifications.repository');
    }
}
