	<?php
	class RandomStrategy implements IStrategy
	{
		  public function filter( $record )
		  {
		    return rand( 0, 1 ) >= 0.5;
		  }
	}

	?>