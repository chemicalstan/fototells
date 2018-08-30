<?php 
class Chest{

	protected $lock;
	protected $isClosed;

	public function __construct($lock){
		$this->lock = $lock;
	} // construct end

	public function close($lock){

		if ($lock === true){
		$this->lock->lock();
		} //if end

		$this->isClosed = true;

		echo 'Closed';
	} // close end

	public function open(){
		if($this->lock->isLocked()){
			$this->lock->unlock();
		} // if end
		$this->isClosed = false;

		echo 'Opened';
	} // open end

	public function isClosed(){
		return $this->isClosed;
	} // isclosed end

} // chest end



 ?>