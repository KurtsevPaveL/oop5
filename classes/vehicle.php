<?php

    abstract class Vehicle {

        protected $characteristic;
        protected $weightEmpty;
        protected $weightFull;
        protected $engineVol;
        protected $fuelType;
        protected $roadTax;
        protected $restrictionWeight;

        public function __construct($arr) {
            $this->characteristic = $arr["characteristic"];
            $this->weightEmpty = $arr["weightEmpty"];
            $this->weightFull = $arr["weightFull"];
            $this->engineVol = $arr["engineVol"];
            $this->fuelType = $arr["fuelType"];
        }

        protected final function checkRestrictionWeight() {
            if ($this->restrictionWeight > $this->weightEmpty) {
                return true;
            }
        }

        protected final function getRoadTax() {
            $this->roadTax = (($this->engineVol / 0.1) * $this->categoryPrice) + $this->weightEmpty * 0.1;
        }

        protected function setInfoArray() {
            $this->infoArray["roadTax"] = "The road tax is " . $this->roadTax . " $ ";
            $this->infoArray["characteristic"] = "Dimensions: " . $this->characteristic;
            $this->infoArray["weightEmpty"] = "Empty weight: " . $this->weightEmpty;
            $this->infoArray["weightFull"] = "Full weight: " . $this->weightFull;
            $this->infoArray["engineVol"] = "Engine volume: " . $this->engineVol;
            $this->infoArray["fuelType"] = "Fuel type: " . $this->fuelType;
        }

        //TECHNICALY MORE EASIER SHOW INFO NEXT WAY:
        public final function showInfo() {
            //$checkRestriction = $this->checkRestrictionWeight();
            if ($this->checkRestrictionWeight()) {
                $this->getRoadTax();
                $this->setInfoArray();
                $i = 1;
                foreach ($this->infoArray as $value) {
                    echo "<br>$i. $value";
                    $i++;
                }
            } else {
                echo "<br>SORRY,YOUR WEIGHT ($this->weightEmpty) IS OUT OF THIS CATEGORY (Maximum is $this->restrictionWeight)!";
            }
        }

        public function __destruct() {
            echo "<br><br>Write the information to the notebook... We had destroyed all information about this vehicle, by using __destruct";
        }

//        //WITHOUT CREATING ARRAY
//        public function showInfoo() {
//            $this->getRoadTax();
//            $i = 1;
//            foreach ($this as $key => $value) {
//                if ($value) {
//                    echo $i . " $key --> $value <br>";
//                    $i++;
//                }
//            }
//        }
//
//        //ANY IDEAS???
//        public function showInfooo() {
//
//        }
    }
