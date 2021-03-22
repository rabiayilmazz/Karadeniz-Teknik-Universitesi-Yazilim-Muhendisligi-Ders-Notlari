/*
 * Sample progrmam for chmod() system call  - No. 15
 *
 * chmod, fchmod - change permission of a file
 *
 * Synopsis
 *     #include <sys/types.h>
 *     #include <sys/stat.h>
 *
 *     int chmod(const char *path, mode_t mode);
 *     int fchmod(int fildes, mode_t mode);
 * Macros
 *     S_ISUID	04000 set user ID on execution
 *     S_ISGID	02000 set group ID on execution
 *     S_ISVTX  01000 sticky bit
 *     S_IRUSR (S_IREAD) 0400 read by owner
 *     S_IWUSR (S_IWRITE) 00200 write by owner
 *     S_IXUSR (S_IEXEC) 00100 execute/search by owner
 *     S_IRGRP	00040 read by group
 *     S_IWGRP	00020 write by group
 *     S_IXGRP	00010 execute/search by group
 *     S_IROTH	00004 read by others
 *     S_IWOTH	00002 write by others
 *     S_IXOTH	00001 execute/search by others
 */

#include <sys/types.h>

main(int argc, char *argv[])
{
	char *name;
	mode_t mode;

	if (argc != 3)
		exit(1);
	name = argv[1];
	sscanf(argv[2], "%o", &mode);

	chmod(name, mode);

	exit(0);
}
