#include <stdio.h>

int fact(int n)
{
	return(n * fact(n-1));
}

main(int argc, char **argv)
{
	if(argc == 1){
		printf("Usage: example n (where n is an integer)\n");
		exit(1);
	}

	printf("%d factorial is %d\n", *argv[1], fact(*argv[1]));
}

