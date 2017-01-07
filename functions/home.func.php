<?php

function get_dashboard(){

    global $db;

    $req = $db->query("
        SELECT  assets.team AS at,
        		assets.name AS an,
                states.state,
                states.datetime,
                states.comment,
                states.writer


        FROM assets
        JOIN states
        ON assets.name=states.name

        



    ");

    $results = array();

    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }


    return $results;


}

