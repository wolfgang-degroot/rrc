<?php
namespace WolfgangDeGroot\RRC;

class Core
{
	// Objects
	private \Linfo\Linfo $System;
	private \mikehaertl\shellcommand\Command $Command;

	// Methods
	public function __construct() {
		$this->System = new \Linfo\Linfo;
		$this->Command = new \mikehaertl\shellcommand\Command;
		var_dump($this->System->getRAM());
	}
}