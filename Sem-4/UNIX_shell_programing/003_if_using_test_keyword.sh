# if using test keyword
# shellcheck disable=SC2148
echo "Enter number";
read n;
if test $n -eq 0
then
    echo "value is zero";
else 
    echo "value is not zero";
fi;