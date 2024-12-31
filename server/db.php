<?php
function create($data)
{
    $currentData = json_decode(file_get_contents("db.json"), true);

    $newUser = [
        // id
        "name" => $data['name'],
        "email" => $data['email']
    ];

    $currentData[] = $newUser;
    $isSucceed = file_put_contents("db.json", json_encode($currentData, JSON_PRETTY_PRINT));

    if ($isSucceed) {
        return $newUser;
    } else {
        return false;
    }
};

function read() {};

function update() {};

function delete() {};

function searchByEmail($user)
{
    $data = json_decode(file_get_contents("db.json"), true);
};

function getRandId() {};
