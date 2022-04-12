<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Clientes;

class  ClientesController extends Controller{
    
   public function index(){

     
        $objClientes = new Clientes();
        $dados["lista"] = $objClientes->lista();
        $dados["view"] = "Clientes/Index";
           


         $this->load("template",$dados);
       
   } 

   public function edit(){
     
      /*objClientes = new Clientes();
      $dados["clientes"] = $objClientes->getClientes(1);*/
      $dados["view"] = "Clientes/Create";
     

      $this->load("template",$dados);

   }

   
   public function create(){
      $dados["view"] = "Clientes/Create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objclientes = new Clientes();
      $clientes = new \stdClass();
      $clientes->nome         = $_POST["nome"];
      $clientes->cpf          = $_POST["cpf"];
      $clientes->dtnasc   = $_POST["dtnasc"];
      $clientes->endereco  = $_POST["endereco"];
      $clientes->tel       = $_POST["tel"];
      $clientes->cep       = $_POST["cep"];
      $clientes->idcliente    =($_POST["idcliente"]) ? $_POST["idcliente"] : NULL;
      


      if(is_null($clientes->idcliente)) {

       
            $objclientes->inserir($clientes);
           } else {
         $objclientes->editar($clientes);
      }
     header("location:".URL_BASE."clientes");
         

   }
  
   public function excluir($id){
      $objclientes = new clientes();
      $objclientes->excluir($id);
      header("location:".URL_BASE."tblclientes");


   }

}
