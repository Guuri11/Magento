<?php


namespace Mastering\SampleModule\Console\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Mastering\SampleModule\Model\ItemFactory;


class GetItems extends Command
{
    const ITEM_ID = 'id';

    protected $itemFactory;

    public function __construct(ItemFactory $itemFactory, string $name = null)
    {
        $this->itemFactory = $itemFactory;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('mastering:item:get')
            ->setDescription('the command prints all the items or one of them')
            ->setAliases(['gi']);
        $this->setDefinition([
            new InputArgument(self::ITEM_ID,InputArgument::OPTIONAL,'Id of the item that you want to get',
                null,null)
        ]);
        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     *
     * Will return one|all item/s
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $items = $this->itemFactory->create();

        if ($input->hasArgument(self::ITEM_ID)){
            $item = $items->load($input->getArgument(self::ITEM_ID));
            $item->isEmpty() ? $output->writeln('Item doesn\'t exist'):$output->writeln('Item '.$item->getId().' is called '.$item->getName().'('.$item->getDescription().')');
        }else{
            $items = $items->getCollection()->getItems();
            foreach ($items as $item){
                $output->writeln('Item '.$item->getId().' is called '.$item->getName().'('.$item->getDescription().')');
            }
        }
    }

}
