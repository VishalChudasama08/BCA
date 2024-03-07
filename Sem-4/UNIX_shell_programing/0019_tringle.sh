for ((ol = 121; ol <= 131; ol++)); do
    for ((il = 121; il <= ol; il++)); do
        echo -n "*"
    done
    echo " "
done
for ((ol = 130; ol >= 121; ol--)); do
    for ((il = 121; il <= ol; il++)); do
        echo -n "*"
    done
    echo " "
done
