<?php

    function calculateArea($height, $width) {
        $area = ($height * $width);
        return $area;
    }

    echo "La surface est de :" ." ". calculateArea(4,5)."m²";