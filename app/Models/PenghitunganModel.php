<?php

namespace App\Models;
use CodeIgniter\Model;

class PenghitunganModel extends Model {

  protected $matrikDefaultA = [
    [1.2, 4, 1],
    [25000, 50000, 35000],
    [2, 4, 4]
  ];

  protected $matrikDefaultB = [
    36,
    700000,
    60
  ];

  public function nilaiMatrikDefault() {
    return [
      'matrikDefaultA' => $this->matrikDefaultA,
      'matrikDefaultB' => $this->matrikDefaultB
    ];
  }

  public function gaussjordan($A, $b) {
    $session = session();

    for ($i=0; $i < count($A); $i++) {
      $A[$i][] = $b[$i];
    }

    $n = count($A);

    for ($i=0; $i < $n; $i++) {

      $maxEl = abs($A[$i][$i]);
      $maxRow = $i;

      for ($k=$i+1; $k < $n; $k++) {
        if (abs($A[$k][$i]) > $maxEl) {
          $maxEl = abs($A[$k][$i]);
          $maxRow = $k;
        }
      }

      for ($k=$i; $k < $n+1; $k++) {
        $tmp = $A[$maxRow][$k];
        $A[$maxRow][$k] = $A[$i][$k];
        $A[$i][$k] = $tmp;
      }

      for ($k=$i+1; $k < $n; $k++) {
        $c = -$A[$k][$i]/$A[$i][$i];
        for ($j=$i; $j < $n+1; $j++) {
          if ($i==$j) {
            $A[$k][$j] = 0;
          } else {
            $A[$k][$j] += $c * $A[$i][$j];
          }
        }
      }
    }

    $x = array_fill(0, $n, 0);
    for ($i=$n-1; $i > -1; $i--) {
      $x[$i] = $A[$i][$n]/$A[$i][$i];
      $x[$i] = round($x[$i], 8);
      for ($k=$i-1; $k > -1; $k--) {
        $A[$k][$n] -= $A[$k][$i] * $x[$i];
      }
      if ($x[$i] < 0) $session->setTempdata('status', ['ok' => false, 'message' => 'Nilai negatif ditemukan! Jumlah bahan atau waktu pengerjaan kurang pas!']);
    }

    return $x;
  }

}