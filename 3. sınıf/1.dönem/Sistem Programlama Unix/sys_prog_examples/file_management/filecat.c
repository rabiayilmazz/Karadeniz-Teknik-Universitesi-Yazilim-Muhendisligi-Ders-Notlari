/*******************************************************
 * filecat.cc: 
 *
 * Copy contents of source file to stdout 
 ********************************************************/


#include <unistd.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <iostream>

using namespace std;

#define BUFSIZE 512

int main(int argc, char *argv[])
{
  int n;	/* number of bytes read */
  char buffer[BUFSIZE];
  int fd[2];

  if (argc == 2) {

	  // Open source file  for reading
	  if ( (fd[0] = open(argv[1], O_RDONLY) ) == -1) { 
		  cout << "Error opening source\n"; 
		  return(1); 
	  }

     
	  // copy file contents of source file to stdout with fd 1
	  while ( (n = read(fd[0], buffer, BUFSIZE)) > 0)
	
		  if (write(1, buffer, n) != n) {
			  cout << "Error in write";
			  return(1);
		  }
	  close(fd[0]);
  }
  
  else
	  cout << "Usage: filecat source.\n";
}

