<?php
		

		/*class car{

					public $name;
					public $color;
			function __construct ($name,$color)
			{
				$this->name=$name;
				$this->color=$color;

			}
			function get_name()
			{
				return $this->name;
				//return $this->color;
			}
			function get_color()
			{
				return $this->color;
			}
			/*function set_color($color)
			{
				$this->color=$color;
			}		
			function get_color()
			{
				return $this->color;
			}


		}

		$val =new car("audi","red");

		//$val->set_name("audi","black");
		echo $val->get_color()."\n";
		echo $val->get_name();
		/*echo $val->name="bmw";
		echo "<br>";
		var_dump($val instanceof car);*/


		//$val1= new car();

		// $val->set_name('bmw');
		// $val->set_color("red");

		// echo "car name : ". $val->get_name();
		// echo "<br>";
		// echo "car color : ".$val->get_color();
		//echo $val->get_name();
		//$val->set_name('audi');

		
		//echo "<br>";
	    // echo $val->get_name();*/


	  /*d  class car
	    {
	    	public $start;
	    	public $end;

	    		private function table($n)
	    		{
	    			$this->start=$n;
	    			//$this->color=$color;
	    			//$this->p=$start;
	    			//echo $this->start;

	    		    for($i=1,$j=$this->start;$i<=10;$i++)
	    			{
	    				echo "{$j} * {$i} = ".$j*$i;
	    				Echo "<br>";
	    			}

	    		}
	    		/*function __destruct()
    		    {
    		    	echo "this is destuctor {$this->name}\n" .$this->color;
    		    }

	    }

	    	$val= new car();
	    	//$val->start= 5;
	    	$val->table(23);*/

	    	class car
	    	{
	    		public $name;
	    		public $color;

	    	 	 function __construct($name,$color)
	    		{
	    			$this->name=$name;
	    			$this->color=$color ;
	    		}
	    		 function getinfo()
	    		{
	    			echo "car name is {$this->name} and color is {$this->color}";
	    		}
	    		const VINOTH= "float like butterfly sting like killer bee";
	    		function sarpatta()
	    		{
	    			$con= self::VINOTH;
	    			echo $con;
	    		}
	    	}
	    	class vehicle extends car
	    	{ 
	    		public $year;
	    		function __construct($name,$color,$year)
	    		{
	    			$this->name=$name;
	    			$this->color=$color;
	    			$this->year=$year;
	    			
	    		}
	    		function test()
	    		{
	    			echo "hii da \n";
	    		}
	    		function getinfo()
	    		{
	    			echo "the car year is {$this->year} name is {$this->name} and color is {$this->color}";
	    		}

	    	}


	    	$val= new vehicle("maruti","black",2021);
	    	$val->test();
	    	$val->getinfo();
	    	echo "<br>";
	    	$val->sarpatta();
	    	//$val->getinfo();





?>


















