<?php
function smile ($text) {

    return  preg_replace( [
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:P/iu",
        "/:-\*/iu"
    ],
    [
        '😀',
        "😞",
        "😛",
        "😬"
    ],$text);
}
function qwe($text){
    return preg_match("/.*дурак.*/iu",$text);

}



