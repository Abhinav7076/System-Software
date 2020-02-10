{ 
  fp="q5.txt";
   printf($0) > fp;
   printf(" ") > fp;
    for (i=1; i<=NF; i++)  {
        a[NR,i] = $i
        b= index(a[NR,i],"?");
        c = index(a[NR,i],",");
        d= index(a[NR,i],":");
        e = index(a[NR,i],".");
        f = index(a[NR,i],"/");
        g = index(a[NR,i],"!");
        
        
        
        if(c>0){
        str = substr(a[NR,i],0,c-1) substr(a[NR,i],c+1,length(a[NR,i]));
        printf(length(str)) > fp;
        }
        else if(b>0){
        str = substr(a[NR,i],0,b-1) substr(a[NR,i],b+1,length(a[NR,i]));
        printf(length(str)) > fp;
        }
        else if(d>0){
        str = substr(a[NR,i],0,d-1) substr(a[NR,i],d+1,length(a[NR,i]));
        printf(length(str)) > fp;
        }
        else if(e>0){
        str = substr(a[NR,i],0,e-1) substr(a[NR,i],e+1,length(a[NR,i]));
        printf(length(str)) > fp;
        }
        else if(f>0){
        str = substr(a[NR,i],0,f-1) substr(a[NR,i],f+1,length(a[NR,i]));
        printf(length(str)) > fp;
        }
        else if(g>0){
        str = substr(a[NR,i],0,g-1) substr(a[NR,i],g+1,length(a[NR,i]));
        printf(length(str)) > fp;
        }
        else{
        str = substr(a[NR,i],0,h-1) substr(a[NR,i],h+1,length(a[NR,i]));
        printf(length(str)) > fp;
        }
        printf(" ") > fp;
    }
}

