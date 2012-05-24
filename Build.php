<?php 
class Build {

	var $motherboard;
	var $hard_drive;
	var $processor;
	var $case;
	var $ram;

	function __construct() {
		
	}//__construct()
	
	public function setMotherboard($value) {
		$this->motherboard = $value;

	}//setMotherboard()

	public function getMotherboard() {
		return $this->motherboard;

	}//getMotherboard()

	public function setHardDrive($value) {
		$this->hard_drive = $value;

	}//setHardDrive()

	public function getHardDrive() {
		return $this->hard_drive;

	}//getHardDrive()

	public function setCase($value) {
		$this->case = $value;

	}//setCase()	

	public function setProcessor($value) {
		$this->processor = $value;

	}//setProcessor()

	public function getProcessor() {
		return $this->processor;

	}//getProcessor()

	public function setRam($value) {
		$this->ram = $value;
		
	}//setRam()

	public function getRam() {
		return $this->ram;

	}//getRam()

}//class Build
