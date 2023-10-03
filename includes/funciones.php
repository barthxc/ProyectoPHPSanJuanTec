<?php

function estaLogueado() : void{
    if(!isset($_SESSION['login'])){
        header ('Location: /');
    }
}