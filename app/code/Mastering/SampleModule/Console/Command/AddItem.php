<?php


namespace Mastering\SampleModule\Console\Command;


use Magento\Framework\Console\Cli;
use Symfony\Component\Console\Command\Command;
use Mastering\SampleModule\Model\ItemFactory;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddItem extends Command
{
    const INPUT_KEY_NAME = 'name';
    const INPUT_KEY_DESCRIPTION = 'description';

    private $itemFactory;

    public function __construct(ItemFactory $itemFactory, string $name = null)
    {
        $this->itemFactory = $itemFactory;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('mastering:item:add')
        ->addArgument(
            self::INPUT_KEY_NAME,
            InputArgument::REQUIRED,
            'Item name'
        )
        ->addArgument(
            self::INPUT_KEY_DESCRIPTION,
            InputArgument::OPTIONAL,
            'Item description'
        );
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $item = $this->itemFactory->create();
        $item->setName($input->getArgument(self::INPUT_KEY_NAME));
        $item->setDescription($input->getArgument(self::INPUT_KEY_DESCRIPTION));
        $item->setIsObjectNew(true);
        $item->save();

        return Cli::RETURN_SUCCESS;
    }
}
