#include <signal.h>

void abc(void);
main()
{
	printf("Press Ctrl-C now.\n");
	signal(SIGINT, abc);
	for(;;);
}
void abc() {
	printf("You have pressed Ctrl-C.\n");
}

