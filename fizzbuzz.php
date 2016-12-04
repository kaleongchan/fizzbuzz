<?php

/**
 * prints the numbers from 1 to 100.
 * For numbers which are multiples of 3 print "Fizz" instead of the actual number and for the multiples of 5 print "Buzz".
 * For numbers which are multiples of both 3 and 5 print "FizzBuzz".
 */
function fizzbuzz() {

    for( $i = 1; $i <= 100; $i++ ){

        //check if multiple of 3
        $multi3 = ( $i % 3 == 0 );

        //check if multiple of 5
        $multi5 = ( $i % 5 == 0 );

        //print the number if it's not multiple of 3 nor multiple of 5
        if( !( $multi3 || $multi5 ) ) {
            echo $i . "\n";
            continue;
        }

        if( $multi3 ) {
            echo 'Fizz';
        }

        if( $multi5 ) {
            echo 'Buzz';
        }

        echo "\n";
    }

}

fizzbuzz();