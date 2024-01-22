<?php

class LoopHitung
{
    private int $angka;
    public function __construct($angkaInput)
    {
        $this->angka = $angkaInput;
    }

    public function bagi3($j_35): bool
    {
        if ($j_35 < 2) {
            $text = "Bage";
        } else {
            $text = "Concat";
        }
        if ($this->angka % 3 == 0) {
            echo "$text\n";
            return true;
        } else {
            return false;
        }
    }


    public function bagi5($j_35): bool
    {
        if ($j_35 < 2) {
            $text = "Concat";
        } else {
            $text = "Bage";
        }

        if ($this->angka % 5 == 0) {
            echo "$text\n";
            return true;
        } else {
            return false;
        }
    }

    public function bagi35(): bool
    {
        if ($this->angka % 3 == 0 && $this->angka % 5 == 0) {
            echo "Bage Concat\n";
            return true;
        } else {
            return false;
        }
    }
    public function bagi53(): bool
    {
        if ($this->angka % 3 == 0) {
            echo "Bage\n";
            return true;
        } elseif ($this->angka % 5 == 0) {
            echo "Concat\n";
            return true;
        } else {
            return false;
        }
    }
}

$jml35 = 0;

while ($jml35 < 5) {
    $masukan = (int)readline("Masukkan angka :");
    $hitung = new LoopHitung($masukan);
     
        if ($jml35 == 1) {
            $hitung->bagi53();
            $jml35++;
        } else {
            $hitung->bagi35();
            $jml35++;
        }
    $hitung->bagi3($jml35);
    $hitung->bagi5($jml35);
    
}
echo "Program selesai";
