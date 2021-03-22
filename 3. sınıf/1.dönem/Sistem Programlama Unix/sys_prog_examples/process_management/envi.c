/* envi.c
   This programs introduces char **environ and char *envp[]. It also shows
   how to use getenv() and putenv().
*/

#include <stdio.h>

extern char **environ;

main(int argc, char *argv[], char *envp[])
{
   int i;

   for (i = 0; argv[i] != NULL; i++)
       printf("argv[%d] = %s\n", i, argv[i]);
   printf("\n");

   for (i = 0; envp[i] != NULL; i++)
       printf("envp[%d] = %s\n", i, envp[i]);
   printf("\n");

   for (i = 0; environ[i] != NULL; i++)
       printf("environ[%d] = %s\n", i, environ[i]);
   
   printf("\nHOME = %s", getenv("HOME"));

   putenv("HOME=/users/sam/home");
   printf("\nHOME = %s", getenv("HOME"));
   return(0);
}
