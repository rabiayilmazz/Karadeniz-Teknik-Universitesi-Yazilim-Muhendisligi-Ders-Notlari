/* sigexec.c
   This program is used to print the commandline arguments' and current
   environment variables' vaules. Note: It is called from signal.c
*/

extern char **environ;

main(int argc, char * argv[])
{
   char **env;
   int i;

   printf("\nParameters are:\n");
   for (i=0; i<argc; i++) 
       printf("%2d: %s\n", i, argv[i]); 

   printf("\nEnviroment variable are:\n");
   for (env = environ; *env != (char *)0; env++)
       printf(" %s\n", *env); 
   return(0);
} /* sigexec */
