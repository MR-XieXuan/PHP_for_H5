<?php

namespace HTML;

//成对出现的标签
function PullOpen($b){
    $b['type'] = isset($b['type']) ? $b['type'] : "" ; 
    $b['id'] = isset($b['id']) ? $b['id'] : "" ; 
    $b['class'] = isset($b['class']) ? $b['class'] : "" ; 
    $b['other'] = isset($b['other']) ? $b['other'] : "" ; 
    $b['box'] = isset($b['box']) ? $b['box'] : "" ; 
    $return =   "<".
                $b['type'].
                " id=\"".$b['id']."\"".
                " class=\"".$b['class']."\"".
                " ".$b['other']." ".
                "> ".
                $b['box'].
                " </".$b['type'].">";
    return $return;
}
//非成对出现的标签
function PullClose($b){
    $b['type'] = isset($b['type']) ? $b['type'] : "" ; 
    $b['id'] = isset($b['id']) ? $b['id'] : "" ; 
    $b['class'] = isset($b['class']) ? $b['class'] : "" ; 
    $b['other'] = isset($b['other']) ? $b['other'] : "" ; 
    $return =   "<".
                $b['type'].
                " id= \"".$b['id']."\" ".
                " class=\"".$b['class']."\"".
                " ".$b['other']." ".
                "> ";
    return $return;
}



?>