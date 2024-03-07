clear
m=o
echo "enter the no between 5-9: "
read m
if test "$m" -gt 5 -a "$m" -le 9; then
    for ((i = 1; i <= m; i++)); do
        for ((space = i; space <= m; space++)); do
            echo -n " "
        done
        for ((j = 1; j <= i; j++)); do
            echo -n " $j"
        done
        echo " "
    done
else
    echo "Enter no between range"
    exit 1
fi
