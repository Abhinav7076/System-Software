BEGIN {numDevices=0;printf "Number of devices on full capactity : \n"}
int(substr($5,1,index($5, "%")-1))==100 {numDevices++;print $1}
END {print "Total : "numDevices,"devices"}

