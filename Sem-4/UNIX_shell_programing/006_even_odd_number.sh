echo "Enter a number: ";
read no;
val=$(( $no % 2 ));
if [ $val -eq 0 ]
then
    echo "$no number is even";
else 
    echo "$no number is odd";
fi;