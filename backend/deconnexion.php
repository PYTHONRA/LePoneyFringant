<?php
    session_start();
    session_unset();
    session_destroy('location: ../frontend/index.html');
    exit; 

//"détuire" une session pour se déconnecter