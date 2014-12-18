<?php namespace Larabook\Core;
/**
 * Created by PhpStorm.
 * User: Simonhivelo
 * Date: 12/18/14
 * Time: 11:37 AM
 */

use App;

trait CommandBus {

    /**
     * Execute the command
     *
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * Fetch the command bus
     *
     * @return mixed
     */
    public function getCommandBus()
    {
        return App::make('Laracasts\Commander\CommandBus');
    }
} 