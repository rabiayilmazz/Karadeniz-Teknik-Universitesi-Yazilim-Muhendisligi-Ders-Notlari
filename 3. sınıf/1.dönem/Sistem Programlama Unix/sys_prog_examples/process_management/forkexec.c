/* forkexec.c
   This program accepts a command from the user and initiates its execution.
   Also included is the concept of closing the standard input at user layer.
*/

#include <stdio.h>
#include <stdlib.h>
#define MAX  100

main() 
{
  int i = 0;
  char  arg[BUFSIZ], *argbuf[MAX];

  printf("\nEnter command (full pathname) to be executed > "); 
  scanf("%s", arg);
  argbuf[i] = malloc(strlen(arg)+1);   /* allocate space to store arg value */
  strcpy(argbuf[i++], arg); 

  while (1) {                          /* to get arguments */
     printf("Please enter argument (<ctrl-d> to terminate) > "); 
     if (scanf("%s", arg) != EOF) {
         argbuf[i] = malloc(strlen(arg)+1);  /* one extra for null */
         strcpy(argbuf[i++], arg);
     }
     else
         break;                        /* break upon EOF */
  }
  argbuf[i] = (char *)NULL;            /* to terminate argv list */

  printf("\nWould you like to spawn a child process (y/n) > ");
  read(0, arg, 1);          /* a dirty fix --  was scanf("%s", arg); */
  if (arg[0] == 'y') {
      if (fork()) {                    /* parent process */
          printf("Parent is waiting");
          wait((int *)0);              /* wait till child terminates */
          exit(0);
      }
      else  {                          /* child process */
          printf("\nChild will be overlaid by %s\n", *argbuf);
          execv(*argbuf , argbuf);     /* execute a new program */ 
          printf("\nSomething is wrong");
      }
  }

  printf("\nNo forking: %s will overlay current process\n", *argbuf);
  execv(*argbuf , argbuf);             /* execute a new program */
  printf("\nThis line shouldn't be here");
}
