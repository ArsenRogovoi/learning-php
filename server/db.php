<?php
function create() {};

function read() {};

function update() {};

function delete() {};

function searchByEmail($user)
{
    $data = json_decode(file_get_contents("db.json"), true);
};

function getRandId() {};
