<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPlainPassword('admin');
        $userAdmin->addRole('ROLE_ADMIN');
        $userAdmin->setEmail('admin@admin.fr');
        $userAdmin->setEnabled(true);

        $manager->persist($userAdmin);

        $user = new User();
        $user->setUsername('user');
        $user->setPlainPassword('user');
        $user->addRole('ROLE_USER');
        $user->setEmail('user@user.fr');
        $user->setEnabled(true);

        $manager->persist($user);

        $manager->flush();
    }
}
