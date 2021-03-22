#include <stdio.h>

void myNum2(int n) {
  int i, j;
  for (i=1; i<=n; i++) {
    j = i*i;
    j += 2*i;
    printf("i j = %d %d\n", i, j);
  }
}

int main(int argc, char *args[])
{
  if (argc < 2) {
    printf("Usage: %s <number>\n", args[0]);
    exit(1);
  }
  myNum2(atoi(&args[1][0])); 
}
