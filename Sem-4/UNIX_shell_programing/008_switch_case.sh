clear
if "$y" -le 1999 -a "$m" -le 13
then
    echo "Invalid year or month"
else
    cal "$y" "$m"
fi

case "$m" in
    1) echo "January"
       ;;
    2) echo "February"
       ;;
    3) echo "March"
       ;;
    4) echo "April"
       ;;
    5) echo "May"
       ;;
    6) echo "June"
       ;;
    7) echo "July"
       ;;
    8) echo "August"
       ;;
    9) echo "September"
       ;;
    10) echo "October"
        ;;
    11) echo "November"
        ;;
    12) echo "December"
        ;;
    *) echo "Invalid month"
       ;;
esac