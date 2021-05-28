<?php
//A php functon that takes a string as an argument and check/return 
//if the passed argument is a palindrome string or not

function Palindrome($strToTest) {
  $left = 0; //an offset variable initialized to zero pointing the first character from left 
  $right = strlen($strToTest) - 1;// an offset variable initialized to length of given string pointing the first character from right
  $flag = 0;// a boolean flag variable to hold 0 or 1 depending updon the character

  while($right > $left){ // a loop to compare the character from left to right by incrementing left and right offset on each iteration
    if ($strToTest[$left] != $strToTest[$right]){ 	// condition for character comaprison
	
      $flag = 1;    // setting the flag to 1 if characters do not match
      break;        // and break the loop
    }
    $left++;   // increment the left offset
    $right--; // decrement the right offset
  }

// code to check the value of flag 

  if ($flag == 0){ 
    echo $strToTest." is a Palindrome.\n";
  }
  else{
    echo $strToTest." is not a Palindrome.\n";
  }
}

Palindrome("racecar"); //natural
Palindrome("117711"); //numeric 
Palindrome("s"); //single character
Palindrome("TattarrattaT"); // Uppercase & lowercase
Palindrome("TucTuc"); //Camelcase
Palindrome("no & on"); // space & special character
Palindrome("rubber"); //similar words like palindrome
Palindrome(""); //Empty string 
Palindrome(null); //Null string
?>