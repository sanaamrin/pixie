<?php namespace Pixie\ConnectionAdapters;

class Sqlite extends ConnectionAdapter
{
    /**
     * @param $config
     *
     * @return mixed
     */
    public function connect($config)
    {
        $connectionString = 'sqlite:' . $config['database'];
        return $this->container->build('\PDO', array($connectionString, null, null));
    }
}