<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Products;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProductsFixtures extends Fixture
{
    
    public function __construct(private SluggerInterface $slugger){}

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for($p=1; $p<=10; $p++)
       {
        $product = new Products();
        $product->setName($faker->text(15));
        $product->setDescription($faker->text());
        $product->setSlug($this->slugger->slug($product->getName())->lower());
        $product->setPrix($faker->numberBetween(900, 150000));
        $product->setStock($faker->numberBetween(0,20));
        // On va chercher une refernce de catégorie
        $category = $this->getReference('cat-'.rand(1,8));
        $product->setCategories($category);
               
        $manager->persist($product);
        $this->setReference('prod-'.$p, $product);

        $manager->flush();
       }
    }
}