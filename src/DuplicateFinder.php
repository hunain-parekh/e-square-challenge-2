<?php
namespace Esquare\Challenge3;

class DuplicateFinder
{
    function findDuplicates($arr)
    {
        $N = count($arr);
        $result = [];
        $freq = array_fill(0, $N, 0);

        for ($i = 0; $i < $N; $i++) {
            $freq[$arr[$i]]++;
        }

        for ($i = 0; $i < $N; $i++) {
            if ($freq[$arr[$i]] > 1) {
                $result[] = $arr[$i];
                $freq[$arr[$i]] = 0; 
            }
        }

        return $result;
    }
}
