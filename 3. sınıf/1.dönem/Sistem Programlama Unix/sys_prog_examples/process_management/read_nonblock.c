/* read_nb.c
   This program illustrates how to do non-blocking reads.
*/

#include <stdio.h>
#include <fcntl.h>

main()
{
   int i, val, nread;
   char buf[BUFSIZ];
   char mesg[] = "\tNo keyboard input\n", 
        mesg1[] = "Waiting for input >> ";

   val = fcntl(0, F_GETFL, 0);  /* get current file status flags */
   val |= O_NONBLOCK;           /* turn off blocking flag */
   fcntl(0, F_SETFL, val);      /* set up non-blocking read */

   for (i = 0; i < 10; i++) {   /* to loop around 10 (arbitrary) times */
     nread = read(0, buf, BUFSIZ);
     if (nread > 0)
         write(1, buf, nread);
     else
         write(1, mesg, strlen(mesg));
     sleep(2);                  /* to get some delay */
   }

   val &= ~O_NONBLOCK;          /* turn on blocking flag */
   fcntl(0, F_SETFL, val);      /* go back to blocking read */
   write(1, mesg1, strlen(mesg1));
   nread = read(0, buf, BUFSIZ);
   write(1, buf, nread);
}
