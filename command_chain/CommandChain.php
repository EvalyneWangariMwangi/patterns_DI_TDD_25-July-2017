<?php
namespace command_chain;
require 'UserCommand.php';

//each class has a responsibility if it can handle them then the process of passing responsibilities stops
interface ICommand
{
  function onCommand( $name, $args );
}
 
class CommandChain
{
  private $_commands = array();
 
  public function addCommand( $cmd )
  {
    $this->_commands []= $cmd;
  }
 
  public function runCommand( $name, $args )
  {
    foreach( $this->_commands as $cmd )
    {
      if ( $cmd->onCommand( $name, $args ) )
        return;
    }
  }
}
 
?>

