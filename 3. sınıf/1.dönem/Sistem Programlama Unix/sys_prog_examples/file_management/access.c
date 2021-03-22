/*
 * Sample program for access system call  - No.33
 *
 * access - check user's permissions for a file
 *
 * #include <unistd.h>
 *
 * int access(const char *pathname, int mode);
 *
 * Description
 *     access checks whether the process would be allowed to reed, write or
 *     test for existance of the file (or ohter file system object) whose name
 *     is pathname. If pathname is a symbolic link permissions of the file
 *     referred to by this symbolic link are tested.
 *
 * Macros - <unistd.h>
 *
 *     #define R_OK    4               * Test for read permission.  *
 *     #define W_OK    2               * Test for write permission.  *
 *     #define X_OK    1               * Test for execute permission.  *
 *     #define F_OK    0               * Test for existence.  *
 *
 * Retrun value
 *     On success, zero is returned. On error, -1 is returned, and errno is
 *     set appropriately.
 */

#include <stdio.h>
#include <unistd.h>

main(int argc, char *argv[])
{
	if (argc != 2)
		exit(1);

	if (access(argv[1], X_OK) == 0)
		printf("executable\n");
	else
		printf("not executable\n");

	exit(0);
}
