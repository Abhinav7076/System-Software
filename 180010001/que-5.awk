BEGIN{u day n month starttime endtime}
{
if($1=="user"){
	u=$1
	day= $4
	month= $5
	n=$6
	starttime =$7
	endtime =$9
}


}
END{
	print "Enter Roll Number : " u
	print "User " u " last logged in on " day " " month " "  n
	print "Session lasted from " starttime " to " endtime
}