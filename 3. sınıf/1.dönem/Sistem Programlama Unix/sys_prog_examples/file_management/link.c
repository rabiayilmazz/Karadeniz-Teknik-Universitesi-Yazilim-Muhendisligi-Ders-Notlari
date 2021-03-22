/*
 * Sample program for link() system call  - No.9
 *
 * link(2) - make a new name for a file
 *
 * Description
 *     link creates a new link (also known as a hard link) to an
 *     existing file
 *
 * Synopsis
 *     #include <unistd.h>
 *
 *     int link(const char *oldpath, const char *newpath);
 */

#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

main()
{
	system("echo hello > foo.txt");

	link("foo.txt", "bar.txt");

	exit(0);
}

