/*
 * Sample program for chdir() system call  - No.12
 *
 * chdir, fchdir - change working directory
 *
 * Synopsis
 *     #include <unistd.h>
 *
 *     int chdir(const char *path);
 *     int fchdir(int fd);
 * Description
 *     chdir changes the current directory to that specified in
 *     path.
 *
 *     fchdir is identical to chdir, only that the directory is
 *     given as an open file descriptor.
 */

#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

main()
{
	chdir("/");
	system("ls");

	exit(0);
}
