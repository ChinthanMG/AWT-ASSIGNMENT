<html>
<body>

<?php
   
    function isPalindrome($number){
        
        $temp = $number;
        
        $sum = 0;
        
        
        while(floor($temp)){
            $digit = $temp % 10;
            $sum = $sum*10 + $digit;
            $temp = $temp/10;
        }
        
        if($sum == $number)
            return 1;
        else
            return 0;
    }
    
    
    $num = 12321;
    if(isPalindrome($num))
        echo($num . " is a palindrome number");
    else
        echo($num . " is not a palindrome number");
?>

</body>
</html>