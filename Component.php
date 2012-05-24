<?php 
class Component {
	
	const TYPE_PROCESSOR = 1;
	const TYPE_MOTHERBOARD = 2;
	const TYPE_HARD_DRIVE = 3;
	const TYPE_RAM = 4;
	const TYPE_POWER_SUPPLY = 5;
	const TYPE_CASE = 6;
	const TYPE_RAM = 7;

	var $type;
	var $price;
	var $model;
	var $manufacturer;

	var $types = array(
		self::TYPE_PROCESSOR => 'Processor',
		self::TYPE_MOTHERBOARD => 'Motherboard',
		self::TYPE_HARD_DRIVE => 'Hard Drive',
		self::TYPE_RAM => 'Ram',
		self::TYPE_POWER_SUPPLY => 'Power Supply',
		self::TYPE_CASE = 'Case',
		self::TYPE_RAM = 'RAM',
	);
		
	function __construct(){

	}//__construct()

	protected function setPrice($value) {
		$this->setPrice = (float)$value;

	}//setPrice()

	protected function getPrice() {
		return $this->price;

	}//getPrice()

	protected function setManufacturer($value) {
		$this->manufacturer = $value;

	}//setManufacturer()

	protected function getManufacturer($value) {
		return $this->manufacturer;

	}//getManufacturer()

	proctected function setModel($value) {
		$this->model = $model;

	}//setModel()

	proctected function getModel() {
		return $this->model;
	
	}//getModel()

}//class Component
