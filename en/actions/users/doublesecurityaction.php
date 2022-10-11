<?php

if(isset($_SESSION['auth'])){
    header('location: forum');
}