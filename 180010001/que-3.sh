#substituting string 1 with string2

for i in $(ls *.txt);
do
sed -i 's/\b'$1'\b/'$2'/g' $i
done
