<?php
$sorted=[];
$target = 7;
$nums = [1,3,5,6];
function arr_sort($target,$nums){
    if(!in_array($target,$nums)){
        array_push($nums,$target);
        sort($nums);
        for($i=0;$i<count($nums);$i++){
            $sorted[] = $nums[$i];
        }
        return array_search($target,$sorted);
    }else{
        sort($nums);
        for($i=0;$i<count($nums);$i++){
            $sorted[] = $nums[$i];
        }
        return array_search($target,$sorted);
    }
}
echo arr_sort($target,$nums);