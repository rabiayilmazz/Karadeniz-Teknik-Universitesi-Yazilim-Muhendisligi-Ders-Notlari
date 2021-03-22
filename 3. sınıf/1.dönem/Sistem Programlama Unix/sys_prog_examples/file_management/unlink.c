/*
 * Sample program for creat system call  - No. 10
 *
 * unlink(2) - delete a name and possibly the file it refers to
 *
 * Synopsis
 *     #include <unistd.h>
 *
 *     int unlink(const char *pathname);
 */

#include <stdio.h>
#include <unistd.h>

main(int argc, char *argv[])
{
	if (argc != 2)
		exit(1);

	/* delete a file */
	unlink(argv[1]);

	exit(0);
}

