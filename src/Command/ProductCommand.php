<?php
namespace App\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Pimcore\Console\AbstractCommand;

class ProductCommand extends \Pimcore\Console\AbstractCommand{
    protected function configure(){
        $this->setName('product')->setDescription('this cmd is used to import');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output){
        //Create
        // $product = new \Pimcore\Model\DataObject\Product();
        // $product->setTitle('product 144');
        // $product->setDescription('Test Description');
        // $product->setParentId(1);
        // $product->setKey('product-6');
        // $product->setPublished(true);
        // $product->save();
        // $output->writeln('Product is successfull created');
        // return 0;

        //Fetch
        // $product =\Pimcore\Model\DataObject\Product::getByPath("Product");
        // p_r($product);
        // exit;
    }
}