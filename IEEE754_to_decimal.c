#include <stdio.h>
#include <math.h>

// Convert a IEEE 754 32 bit floating point binary number to its decimal floating point representation
int main() {
	// IEEE 754 representation
	// [0] - sign bit
	// [1-8] - exponent
	// [9-22] - mantissa
	int iee[32] = {0,1,0,0,0,0,0,0,1,1,1,1,1,0,1,1,0,0,1,1,0,0,1,1,0,0,1,1,0,0,1,1};
	
	
	int exponent = 0;
	int mantissaPower = 0;
	double mantissa = 0;
	double anwser = 0;

	// calculate the exponent by convertiny back to decimal
	// the subtract the bias 127
	for(int i = 1; i < 9; i++){
		
		exponent += iee[i] * pow(2, i-1);

	}
	exponent = exponent - 127;

	// calculate the mantissa by multiplying each bit by 2 to the power of -1, -2, -3 ...
	// depending on position
	for(int i = 9; i < 32; i++){
		mantissaPower--;
		
		mantissa  += iee[i] * pow(2, mantissaPower);
	
	}
	// add 1 so that we have a 1.mantissa representation
	mantissa += 1;

	// calculate the anwser by multiplying by 2 the exponent number of times.
	anwser = mantissa;
	for(int i = 0; i < exponent; i++){
	
		anwser *=2;
	
	}

	printf("\n%f\n", anwser);

	return 0;
}
