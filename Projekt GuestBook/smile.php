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
    return preg_match_all("/.*дурак|редиска|идиот|козел.*/iu",$text);

}



