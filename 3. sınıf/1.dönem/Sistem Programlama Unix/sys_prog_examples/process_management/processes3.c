#include <unistd.h>
#include <sys/types.h>
#include <sys/wait.h>

main()
{
	int pid;
	int status;

	printf("PARENT: My PID is %d\n", getpid());
	printf("PARENT: My parent's PID is %d\n", getppid());

	pid = fork();
	if(pid == 0){
		sleep(10);
		printf("CHILD: My PID is %d\n", getpid());
		printf("CHILD: My parent's PID is %d\n", getppid());
	}

	else{
		printf("PARENT: My PID is %d\n", getpid());
		printf("PARENT: My child's PID is %d\n", pid);
		wait(&status);
		printf("PARENT: Child is done with status %d\n", status);
	}

	printf("1234567890\n");
	exit(0);
}


