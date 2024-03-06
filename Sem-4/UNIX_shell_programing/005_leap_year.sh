echo "Enter the Year: ";
read y
rem=$(expr $y % 4)

if [ $rem -eq 0 ]; then
    echo "$y is a leap year!";
else
    echo "$y is NOT a leap year!";
fi;