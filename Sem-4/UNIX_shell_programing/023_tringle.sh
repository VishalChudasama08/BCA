echo -n "Enter Number between 5 to 9: "
read n
if ! [ $n -ge 5 -a $n -le 9 ]; then
    echo "I ask to enter number between 5 and 9 okay"
    ecit 1
fi
clear
for ((i = 1; i <= 6; i++)); do
    for ((s = n; s >= i; s--)); do
        echo -n " "
    done
    for ((j = 1; j <= i; j++)); do
        echo -n "$j"
    done
    for ((k = 1; k < i; k++)); do
        echo -n "$k"
    done
    echo " "
done
for ((i = n - 1; i >= 1; i--)); do
    for ((s = i; s <= n; s++)); do
        echo -n " "
    done
    for ((j = 1; j <= i; j++)); do
        echo -n "$j"
    done
    for ((k = 1; k < i; k++)); do
        echo -n "$k"
    done
    echo " "
done
