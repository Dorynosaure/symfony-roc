<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Factory\CategoryFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createMany(50);
        UserFactory::createOne(['lastName'=>'Rhul','firstName'=>'Axel','email'=>'axel.rhul@gmail.com','password'=>'test','roles'=>['ROLE_ADMIN','ROLE_USER']]);
    }
}
