<?php
namespace UAParser\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateRegexesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        parent::configure();

        $this->setName('kairos:ua:update-regexes')
            ->setDescription('Update the regexes')
            ->setHelp(<<<EOT
The <info>kairos:ua:update-regexes</info> command update the file regexes.yaml

EOT
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $uaParser = $this->getContainer()->get('ua_parser');
        $uaParser::get();

        return 0;
    }
}