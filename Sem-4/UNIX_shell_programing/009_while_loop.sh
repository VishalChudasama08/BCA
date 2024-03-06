echo "Enter Number" 
read n
i=0
while [ "$i" -lt "$n" ]
do
    echo -n "$i "
    i=$((i + 1))
done
