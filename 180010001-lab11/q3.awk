BEGIN {printf("on input :"); for (i=1;i<=10;i++) Ar[i]=i}
{if($1=="q")

 {
  printf("Program terminates.\n")
  exit
 }

 flag=0;

 for(i=1;i<=10;i++)
 {
  if(Ar[i]==$1)
  {
   flag=1
   if(Ar[i]==1)
   printf("I\n");
   if(Ar[i]==2)
   printf("II\n");
   if(Ar[i]==3)
   printf("III\n");
   if(Ar[i]==4)
   printf("IV\n");
   if(Ar[i]==5)
   printf("V\n");
   if(Ar[i]==6)
   printf("VI\n");
   if(Ar[i]==7)
   printf("VII\n");
   if(Ar[i]==8)
   printf("VIII\n");
   if(Ar[i]==9)
   printf("IX\n");
   if(Ar[i]==10)
   printf("X\n");
   delete Ar[i]
  }
 }
   if(flag==0)
  printf("Given Previously\n");
 printf("on input:");
}
END {  }
