<?php

$sections = array(
    "SearchName" => true,
    "SearchIn" => true,
);

$t = "ddddddd";
$a = array_map(fn($i) => $t.$i, $sections);
print_r($a);

$tickets=App\Models\Ticket::all();
$arr = array();
// local $arr 
$tickets->each(function ($ticket) { array_push($arr, $ticket); }); // error, $arr undefined
// copy of $arr
$tickets->each(function ($ticket) use ($arr) { array_push($arr, $ticket); });
print_r($arr); // empty
// copy of $arr
$tickets->each(function ($ticket) use (&$arr) { array_push($arr, $ticket); });
print_r($arr); // ok
