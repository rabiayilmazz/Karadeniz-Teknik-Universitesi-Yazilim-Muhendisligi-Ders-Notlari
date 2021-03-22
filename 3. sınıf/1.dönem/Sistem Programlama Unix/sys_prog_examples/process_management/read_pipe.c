#include <unistd.h>

main(int argc, char **argv)
{
	int fd;
	int lowercase_cnt = 0;
	int uppercase_cnt = 0;
	char c;
	int i;

	fd = atoi(argv[1]);

	for(i=0; i<10; i++){
		read(fd, &c, 1);
		if(c >= 'a' && c <= 'z')
			lowercase_cnt++;
		else if(c >= 'A' && c <= 'Z')
			uppercase_cnt++;
	}

	printf("I read %d lowercase characters and %d uppercase characters from the pipe\n", lowercase_cnt, uppercase_cnt);
}

