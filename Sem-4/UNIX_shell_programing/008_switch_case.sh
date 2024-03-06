clear
if $y -le 1999 -a $m -le 13
then 
    echo "Invalid Your ar month";
else
    cal $y $m
fi
case $m in
    1) echo "february"
    cal $m;;
    2) echos