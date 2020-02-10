IFS=''
touch output.txt;

rm output.txt;

touch output.txt;

t=0

cat $1 | while read line
do
 t=`expr $t \+ 1`
 echo "($t) $line" >> output.txt
done
