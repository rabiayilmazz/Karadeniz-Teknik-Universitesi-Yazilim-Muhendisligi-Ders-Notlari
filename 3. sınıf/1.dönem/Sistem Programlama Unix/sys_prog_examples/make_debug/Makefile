# Makefile example 1

program : program.o file1.o file2.o file3.o file4.o
	gcc -o program program.o file1.o file2.o file3.o file4.o
program.o : program.c
	gcc -c $?
file1.o : file1.c
	gcc -c file1.c
file2.o : file2.c
	gcc -c file2.c
file3.o : file3.c
	gcc -c file3.c
file4.o : file4.c
	gcc -c file4.c
