<?php declare(strict_types=1);

final class FizzBuzz {

     
    public function convert($num) {

        //Check if num contains 3
        if(preg_match('/(3)/', (string)$num)) {
            return "lucky";
        }
        //Check if divisible by 15
        if ($num % 15 === 0) {
            return "fizzbuzz";
        }
        //Check if divisible by 3
        if($num % 3 == 0){
            return "fizz";
        }
        //Check if divisible by 5
        if($num % 5 == 0){
            return "buzz";
        }

        return strval($num);
        
        
    }

    public function run() {

        $out = [];
        $fizz = $buzz = $fb = $num = $luck = 0;

        //Set max range
        for($i = 1; $i < 21; $i++) {

            $convert = $this->convert($i);

            $out[$i] = $convert;

            //Check returned value and increment if match

            if($convert == 'fizz') {
                $fizz++;
            }
            if($convert == 'buzz') {
                $buzz++;
            }
            if($convert == 'fizzbuzz') {
                $fb++;
            }
            if($convert == 'lucky') {
                $luck++;
            }
            if(is_numeric($convert)) {
                $num++;
            }
        }

        //Setup report format

        echo implode(" ", $out) . PHP_EOL;
        echo 'fizz: ' . $fizz . PHP_EOL;
        echo 'buzz: ' . $buzz . PHP_EOL;
        echo 'fizzbuzz: ' . $fb . PHP_EOL;
        echo 'lucky: ' . $luck . PHP_EOL;
        echo 'integer: ' . $num . PHP_EOL;
    }
}

$fizz = new FizzBuzz;
$fizz->run();

?>