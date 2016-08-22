<?php

    abstract class Truck extends Vehicle {

        protected $allowedWeightTrailer;
        protected $numAxle;

        public function __construct($arr) {
            parent::__construct($arr);
            $this->allowedWeightTrailer = $arr["allowedWeightTrailer"];
            $this->numAxle = $arr["numAxle"];
        }

        public function setInfoArray() {
            parent::setInfoArray();
            $this->infoArray["allowedWeightTrailer"] = "Maximum allowed weight of trailer: " . $this->allowedWeightTrailer;
            $this->infoArray["numAxle"] = "Number of axles: " . $this->numAxle;
        }

    }
