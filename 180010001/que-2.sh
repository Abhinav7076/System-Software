#question number 2

for i in $(ls *.sh);
do
if [ "$i" != "que-2.sh" ]; then
echo $(./$i);
fi
done