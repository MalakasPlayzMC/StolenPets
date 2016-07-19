<?php

namespace pets;

class CreepPet extends Pets {

	const NETWORK_ID = 33;

	public $width = 0.6;
	public $length = 0.6;
	public $height = 1.8;

	public function getName() {
		return "CreepPet";
	}

	public function getSpeed() {
		return 1.2;
	}

}
