echo "Enter Number" 
read a
i=1
while [ "$i" -le "$a" ]
do
    echo "$i "
    i=$(($i + 1))
done
