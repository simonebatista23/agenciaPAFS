<?php

/**
 * classe Db
 *
 * Responsável por criar uma instancia de conexão com tabelas do banco de dados
 *
 * exemplo de uso inicial para ativar a classe
 * $db  = new Db();
 * $db->conectar();
 * $db->setTabela("usuarios"); 
 *
 * @autor Sérgio Luiz Tonsig
 */
class Db
{
  private $host;
  private $porta;
  private $usudb;
  private $nomedb;
  private $senhadb;
  private $conexao;
  private $tabela;

  /**
   * Construtor responsável por definir os valores das propriedades da tabela
   * @method __construct
   * @param  string    $host        Ip do servidor do banco de dados
   * @param  string    $porta       Número da porta utilizada pelo banco 
   * @param  string    $usudb       Usuário do banco de dados
   * @param  string    $nomedb      Nome do banco de dados
   * @param  string    $senhadb     Senha do banco de dados
   */
  function __construct(
    $host="127.0.0.1",
    $porta="3306",
    $usudb="root",
    $nomedb="unisale",
    $senhadb=""
  ) {
    $this->host     = $host;
    $this->porta    = $porta;
    $this->nomedb   = $nomedb;
    $this->usudb    = $usudb;
    $this->senhadb  = $senhadb;
    $this->conexao  = null;
  }

  /**
   * Método responsável pela conexão com o banco de dados
   * @method conectar
   * @return void
   */
  public function conectar()
  {
    $dados = "mysql:host="       . $this->host;
    $dados = $dados . ";port="   . $this->porta;
    $dados = $dados . ";dbname=" . $this->nomedb;

    try {
      $this->conexao = new PDO($dados, $this->usudb, $this->senhadb);
      $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      $mensagem  = "DB class conectar() = " . $e->getMessage();
      file_put_contents("erro.log", $mensagem, FILE_APPEND);
    }
  }

  /**
   * Método responsável por definir a tabela
   * @method setTabela
   * @param  string    $tabela        Nome da tabela no banco de dados
   */
  public function setTabela($tabela = null)
  {
    $this->tabela = $tabela;
  }

  /**
   * Responsável por criar a SQL de seleção (SELECT)
   * @method consultar
   * @param  string $campos nome dos campos e alias a serem retornados
   * @param  string $where  campos e valores do WHERE
   * @param  string $order  campos e suas ordenações
   * @param  string $limit  inicio,quantidade
   * @return array
   */
  public function consultar($campos = '*', $where = null, $order = null, $limit = null)
  {
    $campos = is_null($campos) ? '*' : $campos;

    $where  = is_null($where) ? '' : 'WHERE ' . $where;
    $order  = is_null($order) ? '' : 'ORDER BY ' . $order;
    $limit  = is_null($limit) ? '' : 'LIMIT ' . $limit;

    $query = "SELECT " . $campos . " FROM " . $this->tabela . " " . $where . " " . $order . " " . $limit;
    return $this->executaSQL($query);
  }

  /**
   * Método responsável por retornar o total de registros
   * @method totalRegistros
   * @return int
   */
  public function totalRegistros()
  {
    $sql = "SELECT count(*) as totalReg FROM " . $this->tabela;
    $result = $this->executaSQL($sql);
    return $result[0]['totalReg'] ?? 0;
  }

  /**
   * Método responsável por executar as instruções SQLs
   * @method executaSQL
   * @param  string  $query Instruções SQL
   * @return array
   */
  public function executaSQL($query)
  {
    $dados = array();
    $query = trim($query);

    if ($this->conexao === null) {
      throw new Exception("Conexão com o banco de dados não estabelecida.");
    }

    try {
      $this->conexao->beginTransaction();
      $resultado = $this->conexao->query($query);
      $this->conexao->commit();

      if ($resultado) {
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
          $dados[] = $row;
        }
      }
    } catch (PDOException $e) {
      $this->conexao->rollBack();
      $mensagem  = "db class executaSQL = " . $e->getMessage();
      file_put_contents("erro.log", $mensagem, FILE_APPEND);
    }

    return $dados;
  }

  /**
   * Método responsável por criar a query de inserção (INSERT)
   * @method gravar
   * @param  array  $dados Array com os dados a serem inseridos
   * @return bool
   */
  public function gravar($dados = null)
  {
    $campos   = implode(",", array_keys($dados));
    $valores  = implode("','", array_values($dados));
    $query = "INSERT INTO " . $this->tabela . " (" . $campos . ") VALUES ('" . $valores . "')";
    return $this->executaSQL($query);
  }

  /**
   * Método responsável por criar a query de atualização (UPDATE)
   * @method alterar
   * @param  string $where Instrução WHERE do Update
   * @param  array  $dados Array com os dados a serem atualizados
   * @return bool
   */
  public function alterar($where = null, $dados = null)
  {
    if (!is_null($where)) {
      $valores = array();
      foreach ($dados as $key => $value) {
        $valores[] = $key . "='" . $value . "'";
      }
      $valores = implode(',', $valores);
      $query = "UPDATE " . $this->tabela . " SET " . $valores . " WHERE " . $where;
      return $this->executaSQL($query);
    } else {
      return false;
    }
  }

  /**
   * Responsável por criar a query de exclusão (DELETE)
   * @method excluir
   * @param  string $where Instrução WHERE do Delete
   * @return bool
   */
  public function excluir($where = null)
  {
    if (!is_null($where)) {
      $query = "DELETE FROM " . $this->tabela . " WHERE " . $where;
      return $this->executaSQL($query);
    } else {
      return false;
    }
  }
}
