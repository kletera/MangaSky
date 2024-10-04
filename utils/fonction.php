<?php
    function santifize($data){
        return htmlentities(strip_tags(stripslashes(trim($data))));
    }
?>