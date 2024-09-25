<?php 

function is_authenticated() : bool  {
    if ( session_status () === PHP_SESSION_NONE ) {
        session_start();
    }
}