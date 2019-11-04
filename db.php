 <?php 
   //$mynom= $_POST['nom'];
   //$myprenom= $_POST['prenom'];
   echo "My Name is: ".$mynom." ".$myprenom."<br>";
  // $bana=$_POST;
   
   
   try {
   	 
   	// $connexion=new PDO("mysql:host=localhost;dbname=charte;charset=utf8","jd" , "jd");
  
   	// $result = $connexion->query("SELECT name FROM apprenants");
   	 
     foreach ($result as $username) {
        echo $username['name']."\n";
     }

   }  catch (PDOException $error) {
   	    // echo $error->getMessage();
   }

?> 