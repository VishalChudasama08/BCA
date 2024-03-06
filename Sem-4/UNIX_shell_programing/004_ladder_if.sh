echo "Enter first vlaue";
read n1;
echo "Enter Second value";
read n2;
echo "Enter Thered value";
read n3;
if test $n1 -gt $n2 -a $n1 -gt $n3 
then 
    echo "$n1 is bigger";
elif test $n2 -gt $n1 -a $n2 -gt $n3
then 
    echo "$n2 is biggest";
else 
    echo "$n3 is biggest";
fi;
