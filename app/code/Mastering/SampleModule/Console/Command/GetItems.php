<?php


namespace Mastering\SampleModule\Console\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Mastering\SampleModule\Model\ItemFactory;


class GetItems extends Command
{

    protected $itemFactory;

    public function __construct(ItemFactory $itemFactory, string $name = null)
    {
        $this->itemFactory = $itemFactory;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('mastering:item:get')
            ->setDescription('the command prints all the items')
            ->setAliases(['gi']);;
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $items = $this->itemFactory->create();
        $items = $items->getCollection()->getItems();
        foreach ($items as $item){
            $output->writeln('Item '.$item->getId().' is called '.$item->getName().'('.$item->getDescription().')');
        }
    }

}
