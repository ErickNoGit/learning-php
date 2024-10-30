<?php
    function binary_search(array $sort_array, float|int $target): int {
        // O(log n)
        $left = 0;
        $right = count($sort_array) - 1;
        echo "Tamanho do array inserido: " . $right + 1 . "\n";
    
        while ($left <= $right) {
            $m = intdiv($left + $right, 2);
            
            if ($sort_array[$m] < $target) {
                $left = ++$m;
            }
            else if ($sort_array[$m] > $target) {
                $right = --$m;
            }
            else {
                return $m;
            }
        }
        return -1;
    }

    $array_ordenado = [
        0, 1, 2, 3, 4, 5, 6, 8, 9, 10, 12,
        13, 14, 15, 16, 17, 18, 19, 20, 21,
        22, 23, 24, 35, 45, 56, 87, 100
    ];
    $valor = 6;
    echo "O index " . binary_search($array_ordenado, $valor) . " Corresponde ao valor $valor!\n";
