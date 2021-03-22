#include <stdio.h>
#include <stdlib.h>

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

	printf("%d factorial is %d\n", atoi(argv[1]), fact(atoi(argv[1])));
}

