<?php

namespace LiveHelperChatExtension\clientoverride\providers {

    class ClientOverrideLiveHelperChat {

        public static function getInstance() {

            if (self::$instance !== null){
                return self::$instance;
            }

            self::$instance = new self();

            return self::$instance;
        }

        public function __construct() {

        }

        public static function getValue($value)
        {
            return $value;
        }

    }
}