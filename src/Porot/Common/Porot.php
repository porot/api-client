<?php

namespace Porot\Common;

use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Service\Builder\ServiceBuilderLoader;

/**
 * Base class for interacting with web service clients
 */
class Porot extends ServiceBuilder
{
    /**
     * Create a new service locator.
     *
     * You can configure the service locator is four different ways:
     *
     * 1. Use the default configuration file shipped with the SDK that wires class names with service short names and
     *    specify global parameters to add to every definition (e.g. key, secret, credentials, etc)
     *
     * 2. Use a custom configuration file that extends the default config and supplies credentials for each service.
     *
     * 3. Use a custom config file that wires services to custom short names for services.
     *
     * 4. If you are on Amazon EC2, you can use the default configuration file and not provide any credentials so that
     *    you are using InstanceProfile credentials.
     *
     * @param array|string $config           The full path to a .php or .js|.json file, or an associative array of data
     *                                       to use as global parameters to pass to each service.
     * @param array        $globalParameters Global parameters to pass to every service as it is instantiated.
     *
     * @return Aws
     */
    public static function factory($config = null, array $globalParameters = array())
    {
        if (!$config) {
            // If nothing is passed in, then use the default configuration file with credentials from the environment
            $config = self::getDefaultServiceDefinition();
        } elseif (is_array($config)) {
            // If an array was passed, then use the default configuration file with parameter overrides
            $globalParameters = $config;
            $config = self::getDefaultServiceDefinition();
        }

        $loader = new ServiceBuilderLoader();
        $loader->addAlias('_porot', self::getDefaultServiceDefinition());

        return $loader->load($config, $globalParameters);
    }

    /**
     * Get the full path to the default service builder definition file
     *
     * @return string
     */
    public static function getDefaultServiceDefinition()
    {
        return __DIR__  . '/Resources/porot-config.php';
    }

    /**
     * Returns the configuration for the service builder
     *
     * @return array
     */
    public function getConfig()
    {
        return $this->builderConfig;
    }
}
