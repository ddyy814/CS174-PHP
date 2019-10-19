@@ -0,0 +1,95 @@
<?php
/**
 * Created by PhpStorm.
 * User: DZ
 * Date: 2019-02-19
 * Time: 17:11
 */

function value($roman)
{
    if ($roman == 'I')
        return 1;
    if ($roman == 'V')
        return 5;
    if ($roman == 'X')
        return 10;
    if ($roman == 'L')
        return 50;
    if ($roman == 'C')
        return 100;
    if ($roman == 'D')
        return 500;
    if ($roman == 'M')
        return 1000;
    if ($roman == 'i')
        return 1;
    if ($roman == 'v')
        return 5;
    if ($roman == 'x')
        return 10;
    if ($roman == 'l')
        return 50;
    if ($roman == 'c')
        return 100;
    if ($roman == 'd')
        return 500;
    if ($roman == 'm')
        return 1000;

    return -1;
}

echo "Enter a Roman numeral: ";
$input = fgets(STDIN);
echo "The modern Hindu–Arabic numeral is ",
RomanToDecimal($input), "\n";

function RomanToDecimal($input)
{
    $result = 1;       // Initialize result
    for ($i = 0; $i < strlen($input); $i++)
    {
        $s1 = value($input[$i]);        // Getting value of symbol s[i]

        if ($i+1 < strlen($input))
        {
            $s2 = value($input[$i + 1]);        // Getting value of symbol s[i+1]
            if ($s1 >= $s2)
            {
                $result = $result + $s1;          // Value of current symbol is greater or equal to the next symbol
            }
            else
            {
                $result = $result + $s2 - $s1;
                $i++;                           // Value of current symbol is less than the next symbol
            }
        }
        else
        {
            $result = $result + $s1;
            $i++;
        }
    }
    return $result;
}


echo "Enter a value to check your input whether or not correct. If a correct number will be break, if not will be get error_log. ";
$input= fgets(STDIN);
Test($input);"\n";

function Test($input) {
// Roman numerals can be uppercase
    $input = strtoupper($input);
// Roman numerals can be lowercase
    $input =  strtolower($input);

// Check input is not empty and it doesn't have non Roman characters within it
    if ($input == "" || !preg_match('/^[I V X L C D M i v x l c d m]*$/', $input))
    {
        error_log("You cannot input Arabic numbers. Please provide a correct Roman numeral (e.g. I,II,V,X,i,ii,v,x)", 0);
    }
    return false;
}
?>