<?php

class Test implements PHPUnit_Framework_TestCase
{

   public static function assertNotEquals($expected, $actual, $message = '', $delta = 0, $maxDepth = 10, $canonicalize = FALSE, $ignoreCase = FALSE)
       {
           $constraint = new PHPUnit_Framework_Constraint_Not(
             new PHPUnit_Framework_Constraint_IsEqual(
               $expected, $delta, $maxDepth, $canonicalize, $ignoreCase
             )
           );
   
           self::assertThat($actual, $constraint, $message);
       }

}

?>
