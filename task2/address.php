<?php

$Connection = new mysqli("localhost", "root", "", "task2");


class address
{
public $pID;
public $address;

static function showContenents()
{
  $Connection = new mysqli("localhost", "root", "", "task2");
    $sql = "SELECT * FROM address WHERE pID = 0";
    $result = mysqli_query($Connection, $sql);

		while($Row = mysqli_fetch_array($result))
		{
		echo 'Contenent: '.$Row["Address"].' ID: '.$Row["ID"].'<br>';
        }
        
}

static function showChildren($parent)
{
  $Connection = new mysqli("localhost", "root", "", "task2");
    $sql = "SELECT * FROM address WHERE pID =".$parent;
    $result = mysqli_query($Connection, $sql);

		while($Row = mysqli_fetch_array($result))
		{
		echo 'Child to Parent ID '.$parent.' is: '.$Row["Address"].' ID: '.$Row["ID"].'<br>';
        }
        
}

//////////////////////////////////////after show

static function contenentOptions()
{
  $Connection = new mysqli("localhost", "root", "", "task2");
    $sql = "SELECT * FROM address WHERE pID = 0";
    $result = mysqli_query($Connection, $sql);

		while($Row = mysqli_fetch_array($result))
		{
            echo '<option value ='.$Row["ID"].'>'.$Row["Address"].'</option>';
        }
        
}



static function childrenOptions($parent)
{

  $Connection = new mysqli("localhost", "root", "", "task2");
    $sql = "SELECT * FROM address WHERE pID =".$parent;
    $result = mysqli_query($Connection, $sql);

		while($Row = mysqli_fetch_array($result))
		{
		echo '<option value ='.$Row["ID"].'>'.$Row["Address"].'</option>';
        }
        
}

}

?>