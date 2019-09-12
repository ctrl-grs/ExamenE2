<?php

class DateCompare
{
  public $date;
  // public $e;
  // private $a;

//
    public function __constructor($date)
    {
        $this->t = new DateTime($date);
    }

// clona timestamp, le añade un intervalo y lo devuelve

    public function cloneTimeAddInterval($timestamp, DateInterval $interval)
    {
        $timestamp = clone $date;
        $timestamp->add($interval);
        return $timestamp;
    }

// Compara dos objetos datetime y sustrae una cantidad
    public function dateTimeSub(DateTime $date, DateInterval $interval)
    {
        $timestamp = clone $date;
        $timestamp->sub($interval);
        return $timestamp;
    }

    public function dateDiff($date)
    {
        return $this->t->diff($date);
    }
}
