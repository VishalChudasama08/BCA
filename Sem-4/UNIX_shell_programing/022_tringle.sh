m=0
echo "Enter the no between 5-9"
read m
sp=$m*2-3
if test "$m" -gt 5 -a "$m" -le 9; then
    for ((i = 1; i <= m; i++)); do
        for ((j = 1; j <= i; j++)); do
            echo "$j"
        done
        for ((space = 1; space <= sp; space++)); do
            echo " "
        done
        sp=$sp-2
        if test "$i" -eq "$m"; then
            k=$i-1
        else
            k=$i
        fi
        for ((j = k; j >= 1; j--)); do
            echo "$j"
        done
        echo -n
    done
else
    echo "enter no wetween range"
    exit 1
fi
