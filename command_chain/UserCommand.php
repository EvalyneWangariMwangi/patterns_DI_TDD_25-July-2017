<?php
namespace command_chain;

//  class takes care of users

require 'CommandChain.php';
class UserCommand implements ICommand
{
  public function onCommand( $name, $args )
  {
    if ( $name != 'addUser' ) return false;
    echo( "UserCommand handling 'addUser'\n" );
    return true;
  }
}

$cc = new CommandChain();
$cc->addCommand( new UserCommand() );
$cc->runCommand( 'addUser', null );
?>