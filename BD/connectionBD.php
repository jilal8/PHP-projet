<?php 

     class connectionBD{
          private $host;
          private $login;
          private $password;
          private $bd;
          private static $UniqueInstance = null;
          /**
           * 
           */

          private function __construct(){
               $this->host = "localhost";
               $this->login = "root";
               $this->password = "";
               $this->bd = "condidature";
          try{
               self::$UniqueInstance = new PDO("mysql:host=localhost;dbname=condidature;charset=utf8","root","");
               self::$UniqueInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               echo "la connexion a la base de donnée est recu.";
          }catch(PDOException $e){
                    die('Error connecting to database '.$e->getMessage());
          }
          }
          /**
           * cette methode nous retourne l'unique insctance de notre classe connectionBD, histoire d'appliquer le pattenn singleton
           * @return connectionBD objet de la classe connectionBD
           */
          public static function  getUniqueInstance(){
               if(self::$UniqueInstance == null){
                    return new connectionBD();
               }else{
                    return self::$UniqueInstance;
               }
          }
          
          /**
           * [insert description]
           * @param  String $id        id de la table users
           * @param  String $nom       username de la table users
           * @param  String $email     email de la personne
           * @param  String $pass      mot de passe
           * @param  String $tablename nom de la table
           */
          public function insert($id,$nom,$email,$pass,$tablename){
               /*$requet = "INSERT INTO ".$tablename." VALUES (".$id.",".$nom.",".$email.",".$pass.")";
               'mysql_query('.$requet.') or die(mysql_error())';*/
               $PDO = connectionBD::getUniqueInstance();
               if($PDO!=null){
                   $req = $PDO->prepare("INSERT INTO users (id, username, email, password) VALUES (:id, :username, :email, :password)");
                $req->execute(array(
                      "id" => $id, 
                      "username" => $nom,
                      "email" => $email,
                      "password" => $pass
                      )); 
                echo " insertion reussit.";
           }else{
               echo "pas de connexion.";
           }
               

          }
          /**
           * [select description]
           * @param  String $nom  username
           * @param  String  $pass password
           * @return int       nombre de ligne trouvées par la requet select
           */
          public function select($nom,$pass){
               $bdd = self::$UniqueInstance;
               $req = $bdd->prepare("SELECT COUNT(*) FROM users WHERE username='".$nom."' AND password ='".$pass."' ");
               $req->execute();
               $resultat = $req->fetchColumn();
               echo $resultat;
               return $resultat;
          }


     }

     ?>