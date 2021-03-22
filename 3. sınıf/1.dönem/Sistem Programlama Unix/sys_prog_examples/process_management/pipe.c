/* pipe.c
   This program illustrates how to use the pipe() system call.

   This example shows a way of implementing who | sort using pipe().
   The output from who is redirected to a system pipe and sort gets its
   input from the system pipe.
   Algorithm outline:
     a. to create a pipe
     b. to fork a child
     c. to duplicate a file descriptor
     d. to close unused ends of the pipe
     e. to exec a process to execute the command
*/

#include <stdio.h>

main()
{
  int fd[2];

  pipe(fd);     /* a pipe is created: fd[0] for read; fd[1] for write */

  if (fork() == 0) {          /* 1st child - output redirection */
      dup2(fd[1], 1);         /* connect stdout to pipe */
      close(fd[0]);           /* close unneeded file descriptors */
      close(fd[1]);
      printf("\nThis is the write end of the pipe:\n");
      fflush(stdout);         /* write out the msg to terminal */
      execl("/bin/who", "who", (char *)0);
      printf("\nThis line shouldn't be here");
  }

  if (fork() == 0) {          /* 2nd child - input redirection */
      dup2(fd[0], 0);         /* connect stdin to pipe */
      close(fd[0]);           /* close unneeded file descriptors */
      close(fd[1]);
      printf("\nThis is the read end of the pipe:\n");
      execl("/bin/sort", "sort", (char *)0);
      printf("\nThis line shouldn't be here");
  }

  close(fd[0]);               /* parent is taking it easy */
  close(fd[1]);
  printf("\nParent is terminating\n");
  return(0);
}
