<?
    $binblocks;

    // gera oito blocos binarios
    for ($x = 0; $x < 8; $x++){
        $ar = [];
        for ($y = 0; $y < 8; $y++){
            $ar[] = rand(0,1);
        }
        $binblocks[] = $ar;
    }

    foreach($binblocks as $b){
        $row = "[" . implode('', $b) . "] --> ";
        preg_match_all("/1{2,}/", $row, $n);
        echo "[" . implode(', ', $b) . "] --> " . count($n[0]) ."<br/>";
    }
