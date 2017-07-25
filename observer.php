 <?php
  //the observer interface
interface IObserver
{
  function onChanged( $sender, $args );
}
 
//the observed interface 
interface IObservable
{
  function addObserver( $observer );
}
 
//users list in an array which is being observed 
class UserList implements IObservable
{
  private $_observers = array();
 
  public function addCustomer( $name )
  {
    foreach( $this->_observers as $obs )
      $obs->onChanged( $this, $name );
  }
 
  public function addObserver( $observer )
  {
    $this->_observers []= $observer;
  }
}
 

 //when user list changes a notification is sent
class UserListLogger implements IObserver
{
  public function onChanged( $sender, $args )
  {
    echo( "'$args' added to user list\n" );
  }
}
 
 //adding jack echos to the screen that jack has been added the observer is therefore notifying changes on the class UserList
$ul = new UserList();
$ul->addObserver( new UserListLogger() );
$ul->addCustomer( "Jack" );

 //adding jack echos to the screen that jack has been added
$ul = new UserList();
$ul->addObserver( new UserListLogger() );
$ul->addCustomer( "Eva" );
?>