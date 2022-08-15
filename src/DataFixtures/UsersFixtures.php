<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Users;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersFixtures extends Fixture
{

    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private SluggerInterface $slugger
        )
    {}

    public function load(ObjectManager $manager): void
    {
       $admin = new Users();
       $admin->setEmail('admin@demo.fr');
       $admin->setLastname('LANGUEDOC');
       $admin->setFirstname('William');
       $admin->setAddress('12 rue du port');
       $admin->setZipcode('75001');
       $admin->setCity('Paris');
       $admin->setPassword(
        $this->passwordEncoder->hashPassword($admin, 'admin')
       );
       $admin->setRoles(['Role_ADMIN']);

       $manager->persist($admin);

       $faker = Factory::create('fr_FR');

       for($u=1; $u<=5; $u++)
       {
        $user = new Users();
        $user->setEmail($faker->email());
        $user->setLastname($faker->lastName());
        $user->setFirstname($faker->firstName());
        $user->setAddress($faker->streetAddress());
        $user->setZipcode(str_replace(' ','',$faker->postcode()));
        $user->setCity($faker->city());
        $user->setPassword(
        $this->passwordEncoder->hashPassword($user, 'secret')
        );
       
       $manager->persist($user);

       }

       $manager->flush();
    }
}
