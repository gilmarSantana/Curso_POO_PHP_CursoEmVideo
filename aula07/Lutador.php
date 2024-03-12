<?php

class Lutador
{
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

  public function __construct($nome, $nacionalidade, $idade, $altura, $peso)
  {
    $this->setNome($nome);
    $this->setNacionalidade($nacionalidade);
    $this->setIdade($idade);
    $this->setAltura($altura);
    $this->setPeso($peso);
    $this->setCategoria();
  }


  public function ganharLuta()
  {
    $this->setVitorias($this->getVitorias() + 1);
  }

  public function perderLuta()
  {
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  public function empatarLuta()
  {
    $this->setEmpates($this->getEmpates() + 1);
  }

  public function status()
  {
    echo "Categoria: " . $this->getCategoria()  . "<br>";
    echo "Vitorias: " . $this->getVitorias() . "<br>";
    echo "Derrotas: " . $this->getDerrotas() . "<br>";
    echo "Empates: " . $this->getEmpates() . "<br>";
  }

  public function apresentar()
  {
    echo "Nome: " . $this->getNome() . "<br>";
    echo "Nacionalidade: " . $this->getNacionalidade() . "<br>";
    echo "Idade: " . $this->getIdade() . "<br>";
    echo "Altura: " . $this->getAltura() . "<br>";
    echo "Peso: " . $this->getPeso() . "<br>";
    echo "Categoria: " . $this->getCategoria() . "<br>";
    echo "Vitorias: " . $this->getVitorias() . "<br>";
    echo "Derrotas: " . $this->getDerrotas() . "<br>";
    echo "Empates: " . $this->getEmpates() . "<br>";
  }
  /**
   * Get the value of nome
   */
  private function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   *
   * @return  self
   */
  private function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }

  /**
   * Get the value of nacionalidade
   */
  private function getNacionalidade()
  {
    return $this->nacionalidade;
  }

  /**
   * Set the value of nacionalidade
   *
   * @return  self
   */
  private function setNacionalidade($nacionalidade)
  {
    $this->nacionalidade = $nacionalidade;

    return $this;
  }

  /**
   * Get the value of idade
   */
  private function getIdade()
  {
    return $this->idade;
  }

  /**
   * Set the value of idade
   *
   * @return  self
   */
  private function setIdade($idade)
  {
    $this->idade = $idade;

    return $this;
  }

  /**
   * Get the value of altura
   */
  private function getAltura()
  {
    return $this->altura;
  }

  /**
   * Set the value of altura
   *
   * @return  self
   */
  private function setAltura($altura)
  {
    $this->altura = $altura;

    return $this;
  }

  /**
   * Get the value of peso
   */
  private function getPeso()
  {
    return $this->peso;
  }

  /**
   * Set the value of peso
   *
   * @return  self
   */
  private function setPeso($peso)
  {
    $this->peso = $peso;
    $this->setCategoria();

    return $this;
  }

  /**
   * Get the value of categoria
   */
  private function getCategoria()
  {
    return $this->categoria;
  }

  /**
   * Set the value of categoria
   *
   * @return  self
   */
  private function setCategoria()
  {
    $peso = $this->getPeso();
    if ($peso < 52.2) {
      $this->categoria = 'Inválido';
    } elseif ($peso <= 70.3) {
      $this->categoria = 'Leve';
    } elseif ($peso <= 83.9) {
      $this->categoria = 'Médio';
    } elseif ($peso <= 120.2) {
      $this->categoria = 'Pesado';
    } else {
      $this->categoria = 'Inválido';
    }

    return $this;
  }

  /**
   * Get the value of vitorias
   */
  private function getVitorias()
  {
    return $this->vitorias;
  }

  /**
   * Set the value of vitorias
   *
   * @return  self
   */
  private function setVitorias($vitorias)
  {
    $this->vitorias = $vitorias;

    return $this;
  }

  /**
   * Get the value of derrotas
   */
  private function getDerrotas()
  {
    return $this->derrotas;
  }

  /**
   * Set the value of derrotas
   *
   * @return  self
   */
  private function setDerrotas($derrotas)
  {
    $this->derrotas = $derrotas;

    return $this;
  }

  /**
   * Get the value of empates
   */
  private function getEmpates()
  {
    return $this->empates;
  }

  /**
   * Set the value of empates
   *
   * @return  self
   */
  private function setEmpates($empates)
  {
    $this->empates = $empates;

    return $this;
  }
}