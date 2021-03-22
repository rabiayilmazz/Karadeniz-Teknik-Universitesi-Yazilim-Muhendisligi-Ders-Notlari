/*
 * Sample program for open() and close() system call  - No. 5 and No. 6
 *
 * open(2) - open a file or device
 *
 * Synopsis
 *     #include <sys/types.h>
 *     #include <sys/stat.h>
 *     #include <fcntl.h>
 *
 *     int open(const char *pathname, int flags);
 *     int open(const char *pathname, int flags, mode_t mode);
 *
 * * typedef unsigned int __u_int --- <bits/types.h>
 * * tpyedef __u_int __mode_t; ------ <sys/types.h>
 * * typedef __mode_t mode_t; ------- <sys/types.h>
 *
 * close(2) - close a file descriptor
 *
 * Synopsis
 *     #include <unistd.h>
 *
 *     int close(int fd);
 */

#include <stdio.h>

/* from <bits/fcntl.h> */

#define O_RDONLY             00
#define O_WRONLY             01
#define O_RDWR               02

/* from <unistd.h> */

#define STDIN_FILENO    0       /* Standard input.  */
#define STDOUT_FILENO   1       /* Standard output.  */
#define STDERR_FILENO   2       /* Standard error output.  */

main(int argc, char *argv[])
{
	int fd, n;
	char buf[10];

printf("BUFSIZE: %d\n", BUFSIZ);
	fd = open(argv[1], O_RDONLY);
	while((n = read(fd, buf, sizeof buf)) > 0) {
                write(1, "*** ", 4);
		write(STDOUT_FILENO, buf, n);
	}
	close(fd);

	exit(0);
}
