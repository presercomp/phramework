<?php

namespace APP\controllers;

use \Phramework\API\API;

class editor_controller {

    public static function GET($params) {

        API::view([], 'editor', 'Blog\'s Editor');
    }

}