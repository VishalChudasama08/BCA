echo "Enter the number: "
read n
flag=1;
i=2
while [ "$i" -lt "$n" ]
do 
    rem=$(expr $n % $i)
    if [ "$rem" -eq 0 ]
    then
        flag=0;
    fi
    i=$(expr $i + 1)
done
if [ "$flag" -eq 0 ]
then 
    echo "Number is NOT Prime";
else
    echo "Number is Prime";
fi;