<?php

$arrayMixer = new ArrayMixer();

echo '<b>First array:</b> <pre>' . print_r($arrayMixer->getArray1(), true) . '</pre>';
echo '<b>Second array:</b> <pre>' . print_r($arrayMixer->getArray2(), true) . '</pre>';

echo '<b>Mixed arrays:</b> <pre>' . print_r($arrayMixer->getMixArray(), true) . '</pre>';


class ArrayMixer
{

    private $array1 = [];
    private $array2 = [];

    // generate new arrays after run
    public function __construct()
    {
        $this->array1 = $this->generateArray();
        $this->array2 = $this->generateArray();
    }

    // create mixed array from array1 and array2, and return it
    public function getMixArray()
    {
        $mixArray = [];

        for ($i = 0; $i < 20; $i++) {

            if (isset($this->array1[$i])) {
                $mixArray[] = $this->array1[$i];
            }
            if (isset($this->array2[$i])) {
                $mixArray[] = $this->array2[$i];
            }
        }
        return $mixArray;
    }

    // getter for array1
    public function getArray1()
    {
        return $this->array1;
    }

    // getter for array2
    public function getArray2()
    {
        return $this->array2;
    }

    // arrays generator with random values
    private function generateArray()
    {
        $array = [];
        for ($i = 0; $i < 20; $i++) {
            $array[$i] = rand(0, 70);
        }

        return $array;
    }


}