#include <stdio.h>

int main(int argc, char *args[])
{
#ifdef DEBUG
printf("Debugging line...\n");
#endif

  file1();
  printf("%d\n", getNum1());
  file2();
  printf("%d\n", getNum2());
  file3();
  printf("%d\n", getNum3());
  file4();
  printf("%d\n", getNum4());

}
