<?php

function getEvents(){

    return json_decode(file_get_contents(__DIR__ . '/events.json'), true);
}

function getEventById(int $id){
    
}



function createEvent(array $data){
    $events = getEvents();
    array_push($events, $data);
    file_put_contents(__DIR__ . '/events.json', json_encode($events));
}

function updateEvent(array $data, int $id){

}

function deleteEvent(int $id){

}
