#include <stdio.h>
long fibonacci(long n);
int main() {
	
	// fn = fn-1 + fn-2
	
	long fibonacci_number = fibonacci(2);
	printf("%ld\n",fibonacci_number);
	
	
}

long fibonacci(long n){
	long fn;
	
	//seed values
	if (n == 0)
		return 0;
	else if (n == 1)
		return 1;
		
	fn = fibonacci(n-1) + fibonacci(n-2);
	
	return fn;
}
