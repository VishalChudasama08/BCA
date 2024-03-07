for ((i = 1; i <= 5; i++)); do
    for ((j = 1; j <= i; j++)); do
        echo -n " $j"
    done
    echo " "
done
for ((i = 5; i >= 1; i--)); do
    for ((j = 1; j <= i - 1; j++)); do
        echo -n " $j"
    done
    echo " "
done
