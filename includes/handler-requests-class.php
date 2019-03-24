<?php

class Handler {


    public function sanitizeRequest() {

        $searched_input = filter_input(INPUT_GET, 't', FILTER_SANITIZE_STRING);

        return $searched_input;

    }


}