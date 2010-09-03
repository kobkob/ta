#!/bin/sh
# deleta incondicionalmente no git os arquivos deletados

for i in $(git status | grep deleted | awk '{print $3}'); do 
git rm $i; 
done
git commit -n 'Removed old files.'
#git push origin master
