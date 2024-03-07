# shellcheck disable=SC2148
echo -n "Enter the number:"
read Number
Length=${#Number}
Sum=0
oldNumber=$Number

while [ "$Number" -ne 0 ]; do
    Rem=$((Number % 10))
    Number=$((Number / 10))
    Power=$((Rem ** Length)) # Power=$(echo "$Rem ^ $Length" | bc) # thay are sem
    Sum=$((Sum + Power))
done

if [ "$Sum" -eq "$oldNumber" ]; then
    echo "$oldNumber is an Armstrong number"
else
    echo "$oldNumber is not an Armstrong number"
fi
