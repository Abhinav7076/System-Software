BEGIN {printf("File System|Available Storage|Used|Percentage\n");}
int(substr($5,1,index($5, "%")-1))>30 {print $1"|"$2"|"$3"|"$5}
END {}

