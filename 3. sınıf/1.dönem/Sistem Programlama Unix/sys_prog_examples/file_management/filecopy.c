/*******************************************************
 *   filecopy.cc: 
 *   
 *   Copy contents of source file to destination 
 *********************************************************/

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

  if (argc == 3) {

	  // Open source file  for reading
	  if ( (fd[0] = open(argv[1], O_RDONLY) ) == -1) { 
		  cout << "Error opening source\n"; 
		  return(1); 
	  }

	  // Open target file for writing, creating it if it doesn't exist
 
	  if ( (fd[1] = open(argv[2], O_WRONLY | O_CREAT, 0644) ) == -1) {
		  cout << "Error opening destination\n";
		  return(1);
	  }

     
	  // copy file contents of source file to target file
	  while ( (n = read(fd[0], buffer, BUFSIZE)) > 0)
	
		  if (write(fd[1], buffer, n) != n) {
			  cout << "Error in write";
			  return(1);
		  }
	  close(fd[0]);
	  close(fd[1]);
  }
  
  else
	  cout << "Usage: filecopy source target.\n";
}

