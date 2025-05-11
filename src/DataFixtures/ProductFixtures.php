<?php

namespace App\DataFixtures;

<<<<<<< HEAD
use App\Entity\Category;
=======
>>>>>>> feature/order-system
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
<<<<<<< HEAD
        $category1 = new Category();
        $category1->setName('Céramique');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Textile');
        $manager->persist($category2);

        $product1 = new Product();
        $product1->setName('kolla');
        $product1->setDescription('Un vase fait à la main en céramique.');
        $product1->setPrice('29.99');
        $product1->setImage('kolla.jpg');
        $product1->setStock(10);
        $product1->setCategory($category1);
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setName('robe Berbère');
        $product2->setDescription('robe à la main en laine.');
        $product2->setPrice('89.99');
        $product2->setImage('jebba.jpg');
        $product2->setStock(5);
        $product2->setCategory($category2);
        $manager->persist($product2);

        $manager->flush();
    }
}
=======
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
>>>>>>> feature/order-system
