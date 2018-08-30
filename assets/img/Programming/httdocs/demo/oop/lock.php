<?php 
class Lock {
	protected $isLocked;

	public function lock(){
		$this->isLocked = true;
	} // lock end

	public function unlock(){
		$this->isLocked = false; 
	}

	// Get function of isLocked/ To display.
	public function isLocked(){
		return $this->isLocked;
	}  // islocked end
}
$lock = new Lock();
echo $lock->lock();
echo $lock->unlock();

 ?>