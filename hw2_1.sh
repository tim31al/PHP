#!/bin/bash

regexp="^(-)?[0-9]+(\.)?[0-9]*$"

if ! [[ $1 =~ $regexp ]];
  then echo "В первом параметре введено не числовое значение"
  exit
fi

if ! [[ $2 =~ $regexp ]];
  then echo "В втором параметре введено не числовое значение"
  exit
fi

echo -n "Сумма чисел: " && bc <<< "$1+$2"