/*
 * Sample program for lseek function call  - No.19
 *
 * lseek - rposision read/write file offset
 *
 * Synopsis
 *     #include <sys/types.h>
 *     #include <unistd.h>
 *
 *     off_t lseek(int filedes, off_t offset, int whence);
 * Types - <sys/types.h>
 *     typedef long int off_t;
 * Macros - <unistd.h>
 *     # define SEEK_SET       0       * Seek from beginning of file.  *
 *     # define SEEK_CUR       1       * Seek from current position.  *
 *     # define SEEK_END       2       * Seek from end of file.  *
 *     # define L_SET          SEEK_SET
 *     # define L_INCR         SEEK_CUR
 *     # define L_XTND         SEEK_END
 */

#include <stdio.h>
#include <sys/types.h>
#include <unistd.h>

main(int argc, char *argv[])
{
	int fd;
	off_t offset, new_offset;
	char *name, buf[BUFSIZ];

	if (argc != 3)
		exit(1);

	name = argv[1];
	offset = atoi(argv[2]);

	if ((fd = open(name)) == -1)
		exit(1);

	new_offset = lseek(fd, offset, SEEK_SET);
	read(fd, buf, 1);
	printf("%d %c\n", new_offset, buf[0]);

	exit(0);
}

