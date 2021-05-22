<?php

$this -> get("/", function(){
    echo "HOME!! :D";
});

$this -> get("/home", function(){
    echo "Estou na Home!! :D";
});

$this -> get("/about/test", function(){
    echo "Estou na about test!! :D";
});
