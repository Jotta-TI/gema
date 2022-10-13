<?php
require_once 'system\databases\DBConnection.class.php';

class Views_Evento{

    private $id_eventos;
    private $titulo;
    private $cor;
    private $inicio;
    private $termino;

    /*function __construct(  $id_eventos,$titulo,$cor,$inicio,$termino){
        $this->setId_Eventos( $id_eventos );
        $this->setTitulo( $titulo );
        $this->setCor($cor);
        $this->setInicio($inicio);
        $this->setTermino($termino);
       
   }*/
   public function views(){
       $conn = new DBConnection();
       $SqlCommand = "select id_eventos, titulo, cor, inicio, termino from `hostdeprojetos_gema`.`eventos`";
       
   //echo $SqlCommand;
     $result = $conn->query($SqlCommand);

     return($result);
       
     
    }
    public function setId_Eventos( $id_eventos ){
            $this->id_eventos = $id_eventos;
    }

    public function getId_Eventos(){
            return( $this->id_eventos );
    }
    public function setTitulo( $titulo ){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
            return( $this->titulo );
    }
    public function setCor( $cor ){
        $this->cor = $cor;
    }

        public function getCor(){
        return( $this->cor );
    }
    public function setInicio( $inicio ){
        $this->inicio = $inicio;
    }

        public function getInicio(){
        return( $this->inicio );
    }
    public function setTermino( $termino ){
        $this->termino = $termino;
    }

        public function getTermino(){
        return( $this->termino );
    }
}


?>
}


?>