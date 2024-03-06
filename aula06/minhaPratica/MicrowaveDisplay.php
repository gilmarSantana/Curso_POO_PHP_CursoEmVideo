<?php

interface MicrowaveDisplay
{
  public function upTime();
  public function informTime($time);
  public function showTime();
  public function cancelTime();
  public function usePopcorn();
  public function play();
  public function pause();
  public function stop();
}