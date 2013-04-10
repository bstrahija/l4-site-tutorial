<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class AppRefreshCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'app:refresh';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Refresh application migrations and seed data. WARNING, you will loose all data.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		if ($this->confirm('Are you sure you want to refresh your installation? You will loose all data stored in the database! [yes|no]'))
		{
			// First reset data
			echo 'Reseting DB...'.PHP_EOL;
			$this->call('migrate:reset');
			echo 'Done.'.PHP_EOL.PHP_EOL;

			// Now install it again
			$this->call('app:install');

			// And seed it
			$this->call('app:seed');
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array();
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array();
	}

}
