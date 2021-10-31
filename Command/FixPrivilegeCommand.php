<?php
// Command/FixPrivilegeCommand.php
namespace Ux\Bundle\AdminBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\ConsoleOutputInterface;

class FixPrivilegeCommand extends Command
{
    protected static $defaultName = 'admin:fix-priv';

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Fix privilege of "%kernel.project_dir%/var".')
            ->setHelp('This command allows you to fix privilege of "%kernel.project_dir%/var" ...')
            ->addOption('user', 'u', InputOption::VALUE_REQUIRED, 'The user to grant privilege.', null);
    }

    protected function execute(InputInterface $input, OutputInterface $output):int
    {
        if (!$output instanceof ConsoleOutputInterface) {
            throw new \LogicException('This command accepts only an instance of "ConsoleOutputInterface".');
        }

        $httpUser = $input->getOption('user');
        if (!$httpUser) {
            $httpUser = shell_exec("ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1");
        }
        $httpUser = str_replace("\n", "", $httpUser);
        if (!$httpUser) {
            throw new \LogicException('No http user detected.');
        }

        $kernel = $this->getApplication()->getKernel();

        if (preg_match('/\/cache\/(dev|prod|test)$/', $kernel->getCacheDir())) {
            $cacheDir = preg_replace('/\/cache\/(dev|prod|test)$/', '', $kernel->getCacheDir());
        } else if (preg_match('/\/(dev|prod|test)$/', $kernel->getCacheDir())) {
            $cacheDir = preg_replace('/\/(dev|prod|test)$/', '', $kernel->getCacheDir());
        } else {
            $cacheDir = $kernel->getCacheDir();
        }

        if (preg_match('/\/log$/', $kernel->getCacheDir())) {
            $logDir = preg_replace('/\/log$/', '', $kernel->getLogDir());
        } else {
            $logDir = $kernel->getLogDir();
        }

        shell_exec(sprintf('setfacl -R -m u:"%s":rwX -m u:"%s":rwX %s', $httpUser, getenv('LOGNAME'), $cacheDir));
        shell_exec(sprintf('setfacl -dR -m u:"%s":rwX -m u:"%s":rwX %s', $httpUser, getenv('LOGNAME'), $cacheDir));
        if ($cacheDir != $logDir) {
            shell_exec(sprintf('setfacl -R -m u:"%s":rwX -m u:"%s":rwX %s', $httpUser, getenv('LOGNAME'), $logDir));
            shell_exec(sprintf('setfacl -dR -m u:"%s":rwX -m u:"%s":rwX %s', $httpUser, getenv('LOGNAME'), $logDir));
        }
        return 0;
    }
}
