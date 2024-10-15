<?php

   class Usuario{

   		private $idusuarios;
   		private $cpf;
   		private $nome;
   		private $celular;
   		private $email;
   		private $login;
   		private $senha;

   		function __construct($cpf,
   		                     $nome,
   		                     $celular,
   		                     $email,
   		                     $login,
   		                     $senha ){

   			$this->cpf  	= $cpf;
   			$this->nome 	= $nome;
   			$this->celular 	= $celular;
   			$this->email 	= $email;
   			$this->login    = $login;
   			$this->senha 	= $senha;

   		}

   		public function gravar(Db $db){
           $dados = [];
           $dados["cpf"] 	= $this->cpf;
           $dados["nome"]	= $this->nome;
           $dados["celular"]= $this->celular;
           $dados["email"]  = $this->email;
           $dados["login"]  = $this->login;
           $dados["senha"]  = $this->senha;
           $db->gravar($dados);
   		}

         public function consultar(Db $db,
                                   $campos,
                                   $where ){

           $dados = $db->consultar($campos, $where);
           return $dados;
         }

         public function alterar(Db $db,
                                 $where,
                                 $dados ){
           $db->alterar($where, $dados);
         }

         public function excluir(Db $db, $where){
            $db->excluir($where);
         }

   }
?>
