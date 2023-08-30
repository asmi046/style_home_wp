<?php
    function get_clear_phone($phone) {
        return str_replace(['(',")","-", " "], "", $phone);
    }