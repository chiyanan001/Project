  <?php
  include("db_config.php");
  class db_regis
  {
    private $conn;

    public function __construct(){
     $database = new Database();
     $db = $database->dbConnection();
     $this->conn = $db;
    } //TheEnd function

    public function Redirect($url)
    {
      header("Location: $url");
  	 }//TheEnd function

    public function math(){
     try
     {
       $st = $this->conn->prepare("SELECT * FROM `match1`");
       $st->execute();
       $stm=$st->fetchAll();
       return $stm;
     }
     catch(PDOException $error)
     {
      echo $sql . "<br>" . $error->getMessage();
    }
          } //TheEnd function



          public function regis(){
           try
           {
             $st = $this->conn->prepare("SELECT * FROM `regis`");
             $st->execute();
             $stm=$st->fetchAll();
             return $stm;
           }
           catch(PDOException $error)
           {
             echo $sql . "<br>" . $error->getMessage();
           }
         }

               //TheEnd function

        

          public function addregis($ID,$Name_lastname,$Faculty,$Branch){
          try 
          {   
         $st = $this->conn->prepare("INSERT INTO regis VALUES (:ID,:Name_lastname	,:Faculty,:Branch)");      
                    
            $st->bindparam(":ID",$ID);
            $st->bindparam(":Name_lastname",$Name_lastname);    
            $st->bindparam(":Faculty",$Faculty);
            $st->bindparam(":Branch",$Branch);    
       
           
            
            $st->execute();
          }
          catch(PDOException $error) 
          {
            echo $sql . "<br>" . $error->getMessage();
          }
          }//TheEnd function 


          public function deleteregis($ID){
           try
           {
             $st = $this->conn->prepare("DELETE FROM regis  WHERE ID = :ID");
             $st->bindparam(":ID",$ID);
             $st->execute();
           }
           catch(PDOException $error)
           {
             echo $sql . "<br>" . $error->getMessage();
           }
         }

               //TheEnd function
       }
          
		
		  
		  
		  
		  
		  