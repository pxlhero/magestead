<?php namespace Magestead\Installers;

class Project
{
    public static function create(array $options, array $config, $projectPath, $output)
    {
        switch ($options['app']) {
            case "magento":
                return new MagentoProject($options, $config, $projectPath, $output);
            break;
            case "magento 2":
                return new Magento2Project($options, $config, $projectPath, $output);
            break;
        }
    }
}