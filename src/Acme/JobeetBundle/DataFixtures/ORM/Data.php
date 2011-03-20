<?php

namespace Acme\JobeetBundle\DataFixtures\ORM;

use Acme\JobeetBundle\Entity\Affiliate;
use Acme\JobeetBundle\Entity\Category;
use Acme\JobeetBundle\Entity\Job;
use Doctrine\Common\DataFixtures\FixtureInterface;

class Data implements FixtureInterface
{
    public function load($manager)
    {
        // Category fixtures:
        $category1 = new Category();
        $category1->setName('Design');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Programming');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Manager');
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setName('Administrator');
        $manager->persist($category4);

        // Affiliate fixtures:
        $affiliate1 = new Affiliate();
        $affiliate1->setUrl('http://www.sensio-labs.com/');
        $affiliate1->setEmail('fabien.potencier@example.com');
        $affiliate1->setIsActive(true);
        $affiliate1->setToken('sensio_labs');
        $affiliate1->addCategory($category2);
        $manager->persist($affiliate1);

        $affiliate2 = new Affiliate();
        $affiliate2->setUrl('http://www.symfony-project.org/');
        $affiliate2->setEmail('fabien.potencier@example.org');
        $affiliate2->setIsActive(false);
        $affiliate2->setToken('symfony');
        $affiliate2->addCategory($category1);
        $affiliate2->addCategory($category2);
        $manager->persist($affiliate2);

        // Job fixtures:
        $job1 = new Job();
        $job1->setCategory($category2);
        $job1->setType('full-time');
        $job1->setCompany('Sensio Labs');
        $job1->setLogo('sensio-labs.gif');
        $job1->setUrl('http://www.sensiolabs.com/');
        $job1->setPosition('Web Developer');
        $job1->setLocation('Paris, France');
        $job1->setDescription("You've already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.");
        $job1->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job1->setIsPublic(true);
        $job1->setIsActivated(true);
        $job1->setToken('job_sensio_labs');
        $job1->setEmail('job@example.com');
        $job1->setExpiresAt(new \DateTime('tomorrow'));
        $manager->persist($job1);

        $job2 = new Job();
        $job2->setCategory($category1);
        $job2->setType('part-time');
        $job2->setCompany('Extreme Sensio');
        $job2->setLogo('extreme-sensio.gif');
        $job2->setUrl('http://www.extreme-sensio.com/');
        $job2->setPosition('Web Designer');
        $job2->setLocation('Paris, France');
        $job2->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.");
        $job2->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job2->setIsPublic(true);
        $job2->setIsActivated(true);
        $job2->setToken('job_extreme_sensio');
        $job2->setEmail('job@example.com');
        $job2->setExpiresAt(new \DateTime('tomorrow'));
        $manager->persist($job2);

        $manager->flush();
    }
}
