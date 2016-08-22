<?php

    abstract class Car extends Vehicle {

        protected $typeTransmission;
        protected $numPassenger;
        protected $bodyType;

        public function __construct($arr) {
            parent::__construct($arr);
            $this->typeTransmission = $arr["typeTransmission"];
            $this->numPassenger = $arr["numPassenger"];
            $this->bodyType = $arr["bodyType"];
        }

        public function setInfoArray() {
            parent::setInfoArray();
            $this->infoArray["typeTransmission"] = "Type of transmission: " . $this->typeTransmission;
            $this->infoArray["numPassenger"] = "Number of passengers: " . $this->numPassenger;
            $this->infoArray["bodyType"] = "Body type: " . $this->bodyType;
        }

    }
