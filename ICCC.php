<?php
class ICCC implements IImposto{
     public function calcula(Orcamento $orcamento) {
        
        $valor_orcamento = $orcamento->getValor();
        
        if($valor_orcamento < 1000){
            return $orcamento->getValor() * 0.05;
        }else if($valor_orcamento >= 1000 && $valor_orcamento <= 3000 ){
            return $orcamento->getValor() * 0.07;
        }else if($valor_orcamento > 3000){
            return ($orcamento->getValor() * 0.08) + 30 ;
        }
    }
}
?>