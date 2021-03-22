/*
* fileio.cc
*
* Simple file I/O example code using only raw UNIX system calls.
*/

#include <unistd.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>

main()
{
	int fd;
	char chars[26];
	int i;
	int num_bytes;

	/* open a file for writing */
	fd = open("fileio.out", O_WRONLY | O_CREAT, 00644);
	//fd = open("fileio.out", O_WRONLY | O_CREAT);

	/* write characters to the file */
	for(i=0; i<26; i++)
		chars[i] = 'a' + i;

	num_bytes = write(fd, chars, 26);

	/* close the file */
	close(fd);

	/* open same file for reading */
	fd = open("fileio.out", O_RDONLY);

	/* read every other byte in the file */
	for(i=0; i<26; i+=2){
		num_bytes = read(fd, &chars[i], 1);

		/* write whatever was read to stdout */
		write(1, &chars[i], 1);

		/* skip the next byte */
		lseek(fd, 1, SEEK_CUR);
	}

	/* write a couple of linefeeds to stdout */
	write(1, "\n\n", 2);
}

