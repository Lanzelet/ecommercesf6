<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Images;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ImagesFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for($i=1; $i<=100; $i++)
       {
            $images = new Images();
            $product = $this->getReference('prod-'.rand(1,10));
            $images->setProducts($product);
            $images->setName($faker->image());
            $manager->persist($images);
       }

        $manager->flush(); 
    }

    public function getDependencies(): array
    {
        return [
            ProductsFixtures::class
        ];
    }
}
