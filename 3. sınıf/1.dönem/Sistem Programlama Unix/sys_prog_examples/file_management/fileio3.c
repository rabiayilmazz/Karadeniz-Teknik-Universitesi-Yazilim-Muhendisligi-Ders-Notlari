/*
* fileio.c
*
* Simple file I/O example code using the FILE datatype and
* datatype conversion calls.
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
		fprintf(f, "%c", 'a' + i);

	/* close the file */
	fclose(f);

	/* open a file for reading */
	f = fopen("fileio.out", "r");

	/* read every other byte in the file */
	for(i=0; i<26; i+=2){
		fscanf(f, "%c%c", &chars[i], &chars[i+1]);

		/* write whatever was read to stdout */
		printf("%c", chars[i]);
	}

	/* write a couple of linefeeds to stdout */
	printf("\n\n");
}

