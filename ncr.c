#include <stdio.h>

int main(int argc, char *argv[]) {
	double n = 9;
	double r = 6;
	double p = n - r;
	
	double factorialn = 1;
	double factorialr = 1;
	double factorialp = 1;
	
	for (int i = 1; i <= n; i++) {
		factorialn = factorialn * i;
	}// for loop
	
	for (int i = 1; i <= r; i++) {
		factorialr = factorialr * i;
	}// for loop
	
	for (int i = 1; i <= p; i++) {
		factorialp = factorialp * i;
	}// for loop

	double ncr = (factorialn / (factorialr * factorialp));
	
	printf("%f", ncr);
}