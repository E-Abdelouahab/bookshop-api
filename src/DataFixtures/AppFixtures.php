<?php

namespace App\DataFixtures;

use App\Factory\AuthorFactory;
use App\Factory\BookFactory;
use App\Factory\ReviewFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        BookFactory::createMany(50, function() {
            return [
                'author' => AuthorFactory::random(),
            ];
        });
        // AuthorFactory::createMany(50);
        // ReviewFactory::createMany(50);
    }
}
