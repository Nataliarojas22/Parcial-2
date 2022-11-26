<?php

    class usuario {
        private $usuario;
        private $password;
        private $salt;
        private $nombre;

            public function __construct($usuario,$password,$salt,$nombre)
            {
               $this ->usuario = $usuario;
               $this ->password = $password;
               $this ->salt = $salt;
               $this ->nombre = $nombre;

            }

                public function valida_usuario(){
                    #password = hash(password_usuario .|.salt)
                    #salt = md5(random_bytes(20))


                    $tabla[]= ["usuario"=>"nataliar","password"=>"7c81c3dcfd8ed861e9ec1520d5bf7d30cea480c3","salt"=>"slidufys83ad","nombre"=>"Natalia Rojas"];
                    $tabla[]= ["usuario"=>"fabiolar","password"=>"57aa3f5a98c134e35d7e08a8ac7dd3874b806007","salt"=>"owierhoam23","nombre"=>"Fabiola Rojas"];
                    $tabla[]= ["usuario"=>"carmenp","password"=>"7759b742bc422a38fb8c934a96292ae92c371368","salt"=>"mvklcpvs43","nombre"=>"Carmen Peralta"];

                    foreach ($tabla as $t)
                    {
                        $pass = sha1($this->password.$t["salt"]);
                        if($this->usuario == $t["usuario"]&& $pass == $t["password"])
                        return $t;

                    }
                    return[];
                    echo "Acceso restringido";





                }





    }











?>