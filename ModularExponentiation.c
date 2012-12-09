#include <stdio.h>

int main(int argc, char *argv[]) {
	
		/*
		
		Modular exponentiation
		
		(x^k) mod n
		
		*/
		int x = 97;
		int n = 3233;
		int k = 17;
		
		
		int e = 1;
		
	
		
		
		for (int i = 0; i < k; i++) {
			
			e = ((e * x) % n);
			
		}

		printf("%i\n", e); 
	
	
} // main