/*
 * Sample program for creat system call  - No. 8
 *
 * cteat(2) - create a file or device
 *
 * Synopsis
 *     #include <sys/types.h>
 *     #include <sys/stat.h>
 *     #include <fcntl.h>
 *
 *     int creat(const char *pathname, mode_t mode);
 *
 * Types
 *     <fcntl.h>
 *     typedef __u_int __mode_t;                
 *     typedef __mode_t mode_t;
 * Macros
 *     <bits/stat.h>
 *     #define __S_IREAD       0400    * Read by owner.  *
 *     #define __S_IWRITE      0200    * Write by owner.  *
 *     #define __S_IEXEC       0100    * Execute by owner.  *
 *     <sys/stat.h>
 *     #define S_IRUSR __S_IREAD       * Read by owner.  *
 *     #define S_IWUSR __S_IWRITE      * Write by owner.  *
 *     #define S_IXUSR __S_IEXEC       * Execute by owner.  *
 *     #define S_IRWXU (__S_IREAD|__S_IWRITE|__S_IEXEC)
 *     # define S_IREAD        S_IRUSR
 *     # define S_IWRITE       S_IWUSR
 *     # define S_IEXEC        S_IXUSR
 *     #define S_IRGRP (S_IRUSR >> 3)  * Read by group.  *
 *     #define S_IWGRP (S_IWUSR >> 3)  * Write by group.  *
 *     #define S_IXGRP (S_IXUSR >> 3)  * Execute by group.  *
 *     #define S_IRWXG (S_IRWXU >> 3)
 *     #define S_IROTH (S_IRGRP >> 3)  * Read by others.  *
 *     #define S_IWOTH (S_IWGRP >> 3)  * Write by others.  *
 *     #define S_IXOTH (S_IXGRP >> 3)  * Execute by others.  *
 *     #define S_IRWXO (S_IRWXG >> 3)
 *     # define ACCESSPERMS (S_IRWXU|S_IRWXG|S_IRWXO) * 0777 *
 *     # define ALLPERMS (S_ISUID|S_ISGID|S_ISVTX|S_IRWXU|S_IRWXG|S_IRWXO)* 07777 *
 *     # define DEFFILEMODE (S_IRUSR|S_IWUSR|S_IRGRP|S_IWGRP|S_IROTH|S_IWOTH)* 0666*
 */

#include <stdio.h>
#include <sys/types.h>
#include <sys/stat.h>

#define STRSIZ 80

main(int argc, char *argv[])
{
	int fd;
	int n = STRSIZ;
	char fname[STRSIZ];
	char buf[BUFSIZ];

	if (argc != 2)
		exit(1);

	strncpy(fname, argv[1], n);

	/* creat(e) a file */
	fd = creat(fname, S_IRUSR | S_IWUSR | S_IRGRP | S_IROTH);

	/* some process will be done to the file descriptor 'fd' e.g., */
	strncpy(buf, "hello\n", sizeof buf);
	write(fd, buf, strlen(buf) + 1);

	close(fd);

	exit(0);
}

