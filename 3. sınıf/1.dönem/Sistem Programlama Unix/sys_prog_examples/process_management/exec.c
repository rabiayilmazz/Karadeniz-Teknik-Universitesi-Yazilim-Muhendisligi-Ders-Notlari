#include <unistd.h>
#include <sys/types.h>
#include <sys/wait.h>

main()
{
	execl("/bin/ls", "ls", "/", 0);
	printf("Exec finished\n");
}

