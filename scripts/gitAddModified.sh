#!/bin/sh
# adiciona os novos arquivos

for i in $(git status | grep modified | awk '{print $3}'); do 
git add $i; 
done
git commit -n 'Added new files and some new code.'
#git push origin master
