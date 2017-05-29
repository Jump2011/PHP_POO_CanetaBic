<?php


//  @author Junio
 
class Caneta {
    public $modelo;
    public $cor;
    public $ponta;
    private $carga;
    protected $tampado;
    
    public function rabiscar(){
        if ($this->tampado == TRUE) {
            echo '<p>ERROR, NÃO ESTOU RABISCANDO...</p>';
        } else {
                echo '<p>ESTOU RABISCANDO...</p>';
        }
    }
    public function tampar(){
        $this->tampado=FALSE;
    }
    public function destampar(){
        $this->tampado=TRUE;
    }
    public function Caneta($m,$c,$p,$cg){
        $this->modelo=$m;
        $this->cor=$c;
        $this->ponta=$p;
        $this->carga=$cg;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo=$m;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor=$c;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta=$p;
    }
    public function getCarga(){
        return $this->carga;
    }
    public function setCarga($cg){
        $this->carga=$cg;
    }
    public function getTampado(){
        return $this->tampado;
    }
    public function setTampado($t){
        $this->tampado=$t;
    }
}
