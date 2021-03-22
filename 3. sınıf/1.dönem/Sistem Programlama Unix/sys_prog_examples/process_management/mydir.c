/* mydir.c
   This program is used to illustrate how to:
   . Read directory contents
   . Print attributes of a directory entry

   It also introduces: opendir(), readdir(), lstat(), closedir(), ctime().
*/

#include <dirent.h>
#include <sys/stat.h>
#include <sys/time.h>
#include <sys/types.h>

main(int argc, char *argv[])
{
  DIR   *dp;
  struct dirent *dirp;
  struct stat sbuf;
  struct tm   *tbufp;
  char *ptr;

  dp = opendir(argv[1]);                 /* no error checking */

  while ((dirp = readdir(dp)) != NULL) {
      printf("%ld, ", dirp->d_ino);
      printf("%s, ", dirp->d_name);

      lstat(dirp->d_name, &sbuf);        /* no error checking */
      if (S_ISREG(sbuf.st_mode))
          printf("regular, ");
      else if (S_ISDIR(sbuf.st_mode))
          printf("directory, ");
      else
          printf("neither, ");

      ptr = ctime(&sbuf.st_atime);
      printf("%s", ptr);
  }
  closedir(dp);
  return(0);
}
