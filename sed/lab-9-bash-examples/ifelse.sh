#X=10
#Y=10
X=$1 
Y=$2 

if [ $X -eq $Y ] 
then	echo "$1 and $2 are equal"
elif [ $X -gt $Y ]
then   echo "$1 is greater than $2"
else [ $X -lt $Y ]
echo  "$1 is smaller than $2"
fi

#  -lt 	<
#  -gt 	>
#  -le 	<=
#  -ge 	>=
#  -eq 	==
#  -ne 	!=
