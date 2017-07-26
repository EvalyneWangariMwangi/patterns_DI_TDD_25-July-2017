      <?php
      namespace strategy;
      //select algorithm during runtime
      interface IStrategy
      {
        function filter( $record );
      }
       
       
       //userList is a wrapper around array of names.
      class UserList
      {
          private $_list = array();
         
          public function __construct( $names )
          {
            if ( $names != null )
            {
              foreach( $names as $name )
              {
                $this->_list []= $name;
              }
            }
        }
       
        public function add( $name )
        {
          $this->_list []= $name;
        }
       
       //the find strategy takes several strategies as defined in IStrategy.
        public function find( $filter )
        {
            $recs = array();
            foreach( $this->_list as $user )
            {
              if ( $filter->filter( $user ) )
                $recs []= $user;
            }
            return $recs;
        }
      }

      require_once 'FindAfterStrategy.php'; 
      $ul = new UserList( array( "Andy", "Jack", "Lori", "Megan" ) );
      $f1 = $ul->find( new FindAfterStrategy( "J" ) );
      print_r( $f1 );
       
       require_once 'RandomStrategy.php';
      $f2 = $ul->find( new RandomStrategy() );
      print_r( $f2 );
      ?>