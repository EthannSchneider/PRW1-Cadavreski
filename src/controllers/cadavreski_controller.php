<?php


$entry = [
    "CadavreskiController()" => [
        "GET" => [
            "/api/hello" => "hello()"
        ]
    ]
];

class CadavreskiController
{
    public function hello()
    {
        echo "Hello World!";
    }
}
