		 <?php

				//the observer interface
				interface IObserver
				{
				  function onChanged( $sender, $args );
				}
				 
				 //when user list changes a notification is sent
				class UserListLogger implements IObserver
				{
				  public function onChanged( $sender, $args )
				  {
				    echo( "'$args' added to user list\n" );
				  }
				}

		?>