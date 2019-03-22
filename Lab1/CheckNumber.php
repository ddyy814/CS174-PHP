<?php
/**
 * Created by PhpStorm.
 * User: dz
 * Date: 2019-02-14
 * Time: 09:49
 */
    print "Enter a number to find prime number: ";
    $input = fgets(STDIN);
    echo "Your input number is $input";
    echo "And the prime number(s) is/are: ";
    Prime_Function($input);


    //Here is a Prime_Function that will print prime numbers out if the user give a correct number.
    function Prime_Function($input)
    {
        if($input <=1){
            echo "No prime number. Don't input the same number again.";         // If user input the number <= 1 or negative number, it doesn't work.
        }
        $number = 2;
        for ($i = 1; $i < $input; $i++) {
            $counter = 0;
            for ($j = 1; $j <= $number; $j++) {
                if (($number % $j) == 0) {
                    $counter++;
                }
            }
            if ($counter < 3) {
                echo "$number,";           // print out prime numbers.
            }
            $number++;
        }
    }
    echo "\n";


    print "Enter the number again: ";
    $input = fgets(STDIN);
    echo "Your input number is $input";
    Tester_Function($input);

    //Here is a Tester_Function to detect numbers whether or not are prime numbers from user input, and then print prime number(s) out.
    function Tester_Function($input)
    {
        $num = 0;
        $str = "Your input number including prime numbers are: ";
        $prime = "";
        for ($i = 2;$i <= $input; $i++) {

            $num1 = 0;
            for ($j = 2;$j <= $i; $j++){

                if ($i %$j == 0){$num1++;}
            }
            if ($num1 != 1){

            }
            else{ $prime = $prime."$i,"; }
            

            if ($input % $i == 0){
                $num++;
            }

        }
        if ($num != 1){
            //echo $str,$prime;
            echo "$str $prime but your input the number is not prime number.";
        }
        else {
            echo "$str $prime and your input the number is prime number.";
        }
}

?>