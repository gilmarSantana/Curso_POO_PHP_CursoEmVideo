<?php

require_once './MicrowaveDisplay.php';

class Microwave implements MicrowaveDisplay
{
  private $time;
  private $ligado;

  function __construct()
  {
    $this->setTime(0);
    $this->setLigado(false);
  }

  public function upTime()
  {
    if (!$this->getLigado()) {
      $this->setTime($this->getTime() + 1);
    }
  }

  public function cancelTime()
  {
    if (!$this->getLigado()) {
      if ($this->getTime() !== 0) {
        $this->setTime(0);
      }
    }
  }

  public function informTime($time)
  {
    if (!$this->getLigado()) {
      $this->setTime($time);
    }
  }

  public function showTime()
  {
    return $this->getTime();
  }

  public function usePopcorn()
  {
    if (!$this->getLigado()) {
      $this->setTime(180);
    }
  }

  public function play()
  {
    if (!$this->getLigado()) {
      if ($this->getTime() > 0) {
        $this->setLigado(true);

        for ($i = $this->getTime(); $i >= 0; $i--) {
          echo "$i segundos <br>";

          if ($i == 0) {
            echo "Pi! Pi! Pi! <br>";
            $this->setLigado(false);
            $this->setTime(0);
          }
        }
      } else {
        echo "Precisa definir um tempo";;
      }
    }
  }

  public function pause()
  {
    if ($this->getLigado()) {
      if ($this->getTime() > 0) {
        $this->setLigado(false);
      }
    }
  }

  public function stop()
  {
    if ($this->getLigado()) {
      if ($this->getTime() > 0) {
        $this->setLigado(false);
      }
    }
  }

  /**
   * Get the value of time
   */
  private function getTime()
  {
    return $this->time;
  }

  /**
   * Set the value of time
   *
   * @return  self
   */
  private function setTime($time)
  {
    $this->time = $time;

    return $this;
  }

  /**
   * Get the value of ligado
   */
  private function getLigado()
  {
    return $this->ligado;
  }

  /**
   * Set the value of ligado
   *
   * @return  self
   */
  private function setLigado($ligado)
  {
    $this->ligado = $ligado;

    return $this;
  }
}