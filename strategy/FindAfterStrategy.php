	<?php
	class FindAfterStrategy implements IStrategy
	{
		  private $_name;
		 
		  public function __construct( $name )
		  {
		    $this->_name = $name;
		  }
		 
		  public function filter( $record )
		  {
		    return strcmp( $this->_name, $record ) <= 0;
		  }
	}
	?>