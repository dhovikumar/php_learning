<?php
      
     /*abstract class vinoth
      {
      
      	abstract public function name($name);
      }
      class child extends vinoth
      {
      	
      	 public function name($name)
			{
      		if($name=="vijay")
      		{
      			$prefix=" mr";

      		}
      		elseif($name=="kajal")
  			{
  				$prefix="mrs";
  			}
  			else
  			{
  				$prefix="";
  			}
  			$seperator=".";$greetin="dear";
  			return $greetin.$prefix.$seperator.$name;
      	}
      }

      	$val = new child();
      	echo $val->name("vijay");*/
      	
      	abstract class ipl
      	{
      		public $name;
      		public function __construct($val)
      		{
      			$this->name=$val;
      		}

      		abstract protected function player_team();
      		
      	}
      	class csk extends ipl
  		{
  			public function player_team()
  			{
  				return $this->name." is csk player";
  			}
  		}
  		class mi extends ipl 
		{
			public function player_team()
			{
				return "$this->name is mi player ";
			}
		}

		$csk = new csk("dhoni");
		echo $csk->player_team();
		echo "<br>";
		$mi= new mi("rohit");
		echo $mi->player_team();

		
?>