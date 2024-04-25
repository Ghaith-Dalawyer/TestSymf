<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\EnseignantFactory;
use App\Factory\MatiereFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        EnseignantFactory::createMany(3);
        
        MatiereFactory::createMany(10);
    }
}
