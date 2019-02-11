#!/bin/bash
rm -Rf 20*

if [[ $(date +%u) -ne 1 ]] ; then
    mon=$(date -d"last monday" +'%Y-%m-%d')
else
    mon=`date +'%Y-%m-%d'`    
fi

index=0
while read name ; do
    mkdir `date -d"${mon}+${index} days" +'%Y-%m-%d'`
    wget -P `date -d"${mon}+${index} days" +'%Y-%m-%d'` $(wget --user-agent 'Mozilla/5.0' -qO -  "www.google.be/search?q=${name}\&tbm=isch" | sed 's/</\n</g' | grep '<img' | head -n 10 | tail -n1 | sed 's/.*src="\([^"]*\)".*/\1/')
    index=$(($index+1))
done < idol.txt
