<?php

namespace pets;

class ChargedCreepPet extends Pets {

	const NETWORK_ID = 33;

	const DATA_POWERED = 19;

	public $width = 0.6;
	public $length = 0.6;
	public $height = 1.8;

	public function getName() {
		return "ChargedCreepPet";
	}

	public function getSpeed() {
		return 1.2;
	}

}
