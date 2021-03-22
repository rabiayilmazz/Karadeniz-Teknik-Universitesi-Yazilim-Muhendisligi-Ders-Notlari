/*
* fileio.c
*
* Simple file I/O example code using only the FILE datatype.
*/

#include <stdio.h>

main()
{
	FILE *f;
	char chars[26];
	int i;
	int num_bytes;

	/* open a file for writing */
	f = fopen("fileio.out", "w");

	/* write characters to the file */
	for(i=0; i<26; i++)
		chars[i] = 'a' + i;
	num_bytes = fwrite(chars, 1, 26, f);

	/* close the file */
	fclose(f);

	/* open a file for reading */
	f = fopen("fileio.out", "r");

	/* read every other byte in the file */
	for(i=0; i<26; i+=2){
		num_bytes = fread(&chars[i], 1, 1, f);

		/* write whatever was read to stdout */
		fwrite(&chars[i], 1, 1, stdout);

		/* skip the next byte */
		fseek(f, 1, SEEK_CUR);
	}

	/* write a couple of linefeeds to stdout */
	fwrite("\n\n", 1, 2, stdout);
}

