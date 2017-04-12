 <?php
 class CalculadoraDeImpostos{
     
    public function calcula(Orcamento $orcamento, IImposto $imposto) {
        return $imposto->calcula($orcamento); 
    }
}
 ?>