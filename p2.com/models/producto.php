<?php
     
     
     class producto {

        private $id_producto;
        private $descripcion;
        private $costo;
        private $cantidad;

        public function __construct($id_producto)
        {
            $this -> id_producto= $id_producto;       
        }

        public function setId ($id_producto){
            $this-> id_producto = $id_producto;
        }

        public function getId(){
            return $this ->id_producto;
        }

        public function getdescripcion(){
            return $this ->descripcion;
        }

        public function getcosto(){
            return $this ->costo_compra;
        }

        public function cantidad(){
            return $this ->cantidad_existencia;
        }
        
        public function articulos(){            
            $articulos[]= ["id_producto"=>"1","descripcion"=>"Aceite Olaplex","costo"=>"$24.00","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"2","descripcion"=>"Espejo con luz LED","costo"=>"$21.23","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"3","descripcion"=>"Paleta S. Naked3","costo"=>"$25.65","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"4","descripcion"=>"Crema H. CeraVe","costo"=>"$17.78","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"5","descripcion"=>"Secardor Revlon","costo"=>"$25.24","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"6","descripcion"=>"Tinta de Labios","costo"=>"$5.90","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"7","descripcion"=>"Rimel Essence","costo"=>"$4.99","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"8","descripcion"=>"Spay antifreez","costo"=>"$19.60","cantidad"=>"45"];
    }

    public static function estemismo(){
            $articulos[]= ["id_producto"=>"1","descripcion"=>"Aceite Olaplex","costo"=>"$24.00","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"2","descripcion"=>"Espejo con luz LED","costo"=>"$21.23","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"3","descripcion"=>"Paleta S. Naked3","costo"=>"$25.65","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"4","descripcion"=>"Crema H. CeraVe","costo"=>"$17.78","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"5","descripcion"=>"Secardor Revlon","costo"=>"$25.24","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"6","descripcion"=>"Tinta de Labios","costo"=>"$5.90","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"7","descripcion"=>"Rimel Essence","costo"=>"$4.99","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"8","descripcion"=>"Spay antifreez","costo"=>"$19.60","cantidad"=>"45"];
         
            return $articulos;

    }
    
    public  function valida_producto(){

        $articulos[]= ["id_producto"=>"1","descripcion"=>"Aceite Olaplex","costo"=>"$24.00","cantidad"=>"45"];
        $articulos[]= ["id_producto"=>"2","descripcion"=>"Espejo con luz LED","costo"=>"$21.23","cantidad"=>"45"];
        $articulos[]= ["id_producto"=>"3","descripcion"=>"Paleta S. Naked3","costo"=>"$25.65","cantidad"=>"45"];
        $articulos[]= ["id_producto"=>"4","descripcion"=>"Crema H. CeraVe","costo"=>"$17.78","cantidad"=>"45"];
        $articulos[]= ["id_producto"=>"5","descripcion"=>"Secardor Revlon","costo"=>"$25.24","cantidad"=>"45"];
        $articulos[]= ["id_producto"=>"6","descripcion"=>"Tinta de Labios","costo"=>"$5.90","cantidad"=>"45"];
        $articulos[]= ["id_producto"=>"7","descripcion"=>"Rimel Essence","costo"=>"$4.99","cantidad"=>"45"];
            $articulos[]= ["id_producto"=>"8","descripcion"=>"Spay antifreez","costo"=>"$19.60","cantidad"=>"45"];

        foreach ($articulos as $t)
                {
                    if($this ->id_producto == $t["id_producto"] )
                    return $t;
                    
                }
                return[];
    }
 }
