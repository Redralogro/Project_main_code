<?php
class DataSource
{
    private $hostname="localhost";
		private $user = "root";
		private $pass = "";
		private $db = "dienthoai";
		protected $conn = null;
    private $result = null;
   //connect
    function connect()
  		{
  			$this->conn = mysqli_connect($this->hostname, $this->user, $this->pass, $this->db) or die("Can't connect db!");

  			if ($this->conn) {
  				mysqli_set_charset($this->conn, 'utf-8');
  			}else{
  				exit();
  			}
        return $this->conn;
  		}

    //  Function execute sql command
     public function execute($sql)
     {

       $this->result=$this->conn->query($sql);
       return $this->result;

     }

     // Function getdata

     public function getdata()
     {

       if($this->result)
       {

         $data=mysql_fetch_array($this->result);
       }
       else
       {
         $data=0;

       }
      return $data;

     }

     // Function getAllData

     public function getAllData()
     {
        if(! $this->result)
        {
          $data=0;
        }
        else
        {
          while($temp= $this->getdata())
          {
            $data[]=$temp;
          }
        }
        return $data;
     }

     //-------------------------------CRUD-------------------------------

     //Insert

     // Select

     //Update
     
     //Delete
     public function Delete_datat($id,$table)

     {

       $sql_command = $this->= "DELETE FROM  $table WHERE id=$id" ;

       return $this->execute($sql);
     }
     //-----------------------------END_CRUD-----------------------------
}
?>
