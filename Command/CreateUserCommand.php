<?php
// Command/CreateUserCommand.php
namespace Ux\Bundle\AdminBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\ConsoleOutputInterface;

class CreateUserCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'admin:create-user';

    public function __construct(bool $requirePassword = false)
    {
        // best practices recommend to call the parent constructor first and
        // then set your own properties. That wouldn't work in this case
        // because configure() needs the properties set in this constructor
        $this->requirePassword = $requirePassword;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('Creates a new user.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to create a user...')
            //->addArgument('username', InputArgument::REQUIRED, 'The username of the user.')
            //->addArgument('password', $this->requirePassword ? InputArgument::REQUIRED : InputArgument::OPTIONAL, 'User password');
            ->addOption('username', 'u', InputOption::VALUE_REQUIRED, 'The username of the user.', null)
            ->addOption('password', 'p', InputOption::VALUE_OPTIONAL, 'The password of the user.', null);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$output instanceof ConsoleOutputInterface) {
            throw new \LogicException('This command accepts only an instance of "ConsoleOutputInterface".');
        }

        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        // retrieve the argument value using getArgument()
        //$output->writeln('Username: '.$input->getArgument('username'));
        //$output->writeln('Password: '.$input->getArgument('password'));
        $output->writeln('Username: '.$input->getOption('username'));
        $output->writeln('Password: '.$input->getOption('password'));
        //$section1 = $output->section();
        //$section2 = $output->section();

        //$section1->writeln('Hello');
        //$section2->writeln('World!');
        // Output displays "Hello\nWorld!\n"

        // overwrite() replaces all the existing section contents with the given content
        //$section1->overwrite('Goodbye');
        // Output now displays "Goodbye\nWorld!\n"

        // clear() deletes all the section contents...
        //$section2->clear();
        // Output now displays "Goodbye\n"

        // ...but you can also delete a given number of lines
        // (this example deletes the last two lines of the section)
        //$section1->clear(2);
        // Output is now completely empty!

        return 0;
    }
}
