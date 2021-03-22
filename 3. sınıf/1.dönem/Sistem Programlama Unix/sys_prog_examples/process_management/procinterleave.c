#include <stdio.h>

main(int argc, char *argv[])
{
  int i, limit;

  if (argc == 1)
     {
     fputs("Error", stderr);
     exit(1);
     }
  limit = atoi(argv[1]);
  fork();
  for(i=1;i <= limit; i++) 
     printf("%d ",i);
}

