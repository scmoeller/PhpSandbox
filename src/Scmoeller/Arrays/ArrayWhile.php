<?php

namespace Scmoeller\Arrays;

/**
 * Description of While
 *
 * @author moeller
 */
class ArrayWhile {
     public function execute(array $arrayWhile)
     {
        $newArray = array();
        
        while (list($key, $value) = each($arrayWhile)) {
            $newArray[$key] = $value;
        }
        
        return $newArray;
     }
}
