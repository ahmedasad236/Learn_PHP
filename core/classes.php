<?php

    class Task {
        public $description;
        public $completed;

        // public function __construct($des, $comp) {
        //     $this->description = $des;
        //     $this->completed = $comp;
        // }

        public function checkCompleted() {
            return $this->completed;
        }

        public function getDescription() {
            return $this->description;
        }

        public function setCompleted($comp) {
            $this->completed = $comp;
        }
    }