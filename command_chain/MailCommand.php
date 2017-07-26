 <?php
 namespace command_chain;
 //class that responds to emails
require 'CommandChain.php';
class MailCommand implements ICommand
{
  public function onCommand( $name, $args )
  {
    if ( $name != 'mail' ) return false;
    echo( "MailCommand handling 'mail'\n" );
    return true;
  }
}
$cc = new CommandChain();
$cc->addCommand( new MailCommand() );
$cc->runCommand( 'mail', null );
?>