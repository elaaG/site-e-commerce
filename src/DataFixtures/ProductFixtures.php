<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Crée quelques produits d'exemple
        $product1 = new Product();
        $product1->setName('Tapis Berbère');
        $product1->setDescription('Tapis fait main, 100% laine');
        $product1->setPrice(150.00);
        $product1->setImage('tapis_berbere.jpg');
        $product1->setStock(10);
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setName('Vase en Céramique');
        $product2->setDescription('Vase artisanal tunisien');
        $product2->setPrice(45.50);
        $product2->setImage('vase_ceramique.jpg');
        $product2->setStock(5);
        $manager->persist($product2);

        // Sauvegarde toutes les données
        $manager->flush();
    }
}
