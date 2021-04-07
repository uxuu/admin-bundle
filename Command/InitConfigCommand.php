<?php
// Command/InitConfigCommand.php
namespace Ux\Bundle\AdminBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;

class InitConfigCommand extends Command
{
    protected static $defaultName = 'admin:init-config';

    public function __construct(Filesystem $filesystem, string $projectDir = null)
    {
        $this->filesystem = $filesystem;
        $this->projectDir = $projectDir;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Initialize config of this bundle.')
            ->setHelp('This command allows you to initialize config of this bundle ...')
            ->addOption('force', 'f', InputOption::VALUE_NONE, 'Force to initialize.', null);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$output instanceof ConsoleOutputInterface) {
            throw new \LogicException('This command accepts only an instance of "ConsoleOutputInterface".');
        }
        $kernel = $this->getApplication()->getKernel();
        $configDir = $this->getConfigDirectory($kernel->getContainer());

        if (!file_exists($configDir . '/packages') || !is_dir($configDir . '/packages')) {
            throw new \LogicException('"' . $configDir . '/packages" is not exists or is not a directory.');
        }

        $this->force = $input->getOption('force');

        $this->writeConfig($configDir . '/packages/firewall.yaml',
            "security:\n" .
            "    firewalls:\n" .
            "        dev:\n" .
            "        admin:\n" .
            "        main:\n"
        );
        $this->writeConfig($configDir . '/packages/uxadmin.yaml',
            "imports:\n" .
            "    - { resource: '@UxAdminBundle/Resources/config/framework.yaml' }\n" .
            "    - { resource: '@UxAdminBundle/Resources/config/security.yaml' }"
        );
        $this->writeConfig($configDir . '/routes/uxadmin.yaml',
            "uxadmin:\n" .
            "    resource: '@UxAdminBundle/Resources/config/routing.yaml'\n" .
            "    prefix: /admin"
        );
        return 0;
    }

    private function writeConfig(string $path, string $data) {
        if (file_exists($path) && $this->force) {
            $this->filesystem->remove([$path]);
        }
        if (!file_exists($path)) {
            $this->filesystem->appendToFile($path, $data);
        }
    }

    private function getConfigDirectory(ContainerInterface $container): string
    {
        $defaultConfigDir = 'config';
        if (null === $this->projectDir && !$container->hasParameter('kernel.project_dir')) {
            return $defaultConfigDir;
        }
        if ($this->projectDir) {
            return $this->projectDir . '/config';
        }

        return $container->getParameter('kernel.project_dir') . '/config';
    }
}
