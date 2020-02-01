<?php
   /**
    *
    */
   class Operator
   {
     public $operator;
     public $field1;
     public $field2;
     function __construct($operator, $field1, $field2)
     {
       //Creating a new values for the properties
       $this->operator = $operator;
       $this->field1 = $field1;
       $this->field2 = $field2;
     }

     //Running calculator metthod
     public function calculator()
     {
       switch ($this->operator) {
         case 'add':
         return $this->field1 + $this->field2;
           break;
         case 'sub':
         return $this->field1 - $this->field2;
           break;
         case 'div':
         return $this->field1 / $this->field2;
           break;
         case 'mul':
         return $this->field1 * $this->field2;
           break;

         default:
           echo "Error calculating";
           break;
       }
     }
   }

 ?>
