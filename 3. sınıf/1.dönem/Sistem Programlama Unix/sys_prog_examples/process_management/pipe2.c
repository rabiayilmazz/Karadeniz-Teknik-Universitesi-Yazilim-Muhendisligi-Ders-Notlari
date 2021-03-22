#include <unistd.h>

void write_pipe(int fd)
{
	int i;
	char letters[10];

	for(i=0; i<10; i++)
		letters[i] = 'A' + (lrand48() % 58);

	write(fd, letters, 10);
	printf("I sent through the pipe: ");
	for(i=0; i<10; i++)
		printf("%c ", letters[i]);
	printf("\n");
}

main(int argc, char **argv)
{
	int pipe_fds[2];
	int pid;
	char fdstr[2];
	int status;

	srand48(atoi(argv[1]));

	pipe(pipe_fds);

	pid = fork();

	if(pid == 0){
		sprintf(fdstr, "%d", pipe_fds[0]);
		execl("./read_pipe", "read_pipe", fdstr, NULL);
	}

	else
		write_pipe(pipe_fds[1]);
}


