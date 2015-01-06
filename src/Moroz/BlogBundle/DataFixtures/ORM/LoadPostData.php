<?php

namespace Moroz\BlogBundle\DataFixture\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Moroz\BlogBundle\Entity\Post;

class LoadPostData implements FixtureInterface
{
    /*
     * (@inheritDoc)
     */
    public function load(ObjectManager $manager)
    {
        $post = new Post();
        $post->getTitle('Заголовок статті');
        $post->getAuthor('Мороз Тарас');
        $post->setContent('Текст статті');

        $manager->persist($post);
        $manager->flush();
    }
}