<?php
namespace app\models;
use app\core\Model;

class Clientes extends Model{

    public function lista(){
         
        $sql = "SELECT * FROM  tblclientes";

        $qry = $this->db->query($sql);

         
        return $qry->fetchAll(\PDO::FETCH_OBJ);

         
    }

    public function inserir($clientes){
        $sql = " INSERT INTO  tblclientes set
        nome =:nome,
        cpf =:cpf,
        dtnasc=:dtnasc,
        endereco=:endereco,
        tel=:tel,
        cep=:cep";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome", $clientes->nome);
        $qry->bindValue(":cpf", $clientes->cpf);
        $qry->bindValue(":dtnasc", $clientes->dtnasc);
        $qry->bindValue(":endereco", $clientes->endereco);
        $qry->bindValue(":tel", $clientes->tel);
        $qry->bindValue(":cep", $clientes->cep);
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getClientes($id){
        $sql = "SELECT * FROM tblclientes where idcliente = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($clientes){
        $sql = " UPDATE tblclientes set
        nome =:nome,
        cpf =:cpf,
        dtnasc=:dtnasc,
        endereco=:endereco,
        tel=:tel,
        cep=:cep,
        where idcliente = :id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":id ", $clientes->idcliente);
        $qry->bindValue(":nome", $clientes->nome);
        $qry->bindValue(":cpf", $clientes->cpf);
        $qry->bindValue(":dtnasc", $clientes->dtnasc);
        $qry->bindValue(":endereco", $clientes->endereco);
        $qry->bindValue(":tel", $clientes->tel);
        $qry->bindValue(":cep", $clientes->cep);
        
        
        $qry->execute();

        return $clientes->idcliente;
       
    }

    public function excluir(){
        $sql = "DELETE FROM  tblclientes where idcliente = $id";
        $qry = $this->db->query($sql);
    }


    

}