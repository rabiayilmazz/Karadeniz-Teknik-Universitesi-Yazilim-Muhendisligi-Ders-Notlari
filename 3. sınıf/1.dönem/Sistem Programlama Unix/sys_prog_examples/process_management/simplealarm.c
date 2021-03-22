/*
 * The following program runs for approximately 5 seconds of wall-clock time,
 * gets an interrupt, prints a message and then sets the alarm again.
 */
#include <unistd.h>
#include <signal.h>

void setAlarm(int seconds) {
   alarm(seconds);
}

void handler() {
  printf("\nI (pid = %d) got an interrupt; will continue\n", getpid());
  setAlarm(5);
}  

int main(void) {
  signal(SIGALRM, handler);
  setAlarm(5);
  for ( ; ; ) ;
}

