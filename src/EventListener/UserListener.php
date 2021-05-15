<?php
namespace App\EventListener;

use App\Entity\User;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class UserListener
{
    // the entity listener methods receive two arguments:
    // the entity instance and the lifecycle event
    public function prePersist(User $user, LifecycleEventArgs $event): void
    {
        $keyWords = $user->getKeyWord();
        $keyWordsArray = explode(';', $keyWords);
        $user->setKeyWord($keyWordsArray);
    }

    public function preUpdate(User $user, LifecycleEventArgs $event): void
    {
        $keyWords = $user->getKeyWord();
        $keyWordsArray = explode(';', $keyWords);
        $user->setKeyWord($keyWordsArray);
    }
    
}