#include <stdio.h>


int main(int argc, char *argv[]) {
	
	int userInput = 10; //number to convert
	int  base = 16; //base to convert to
	int anws[10] = {}; //This could cause problems not sure
	int count = 0;
	
	
	do {
	
		anws[count] = userInput % base;
		userInput = userInput / base;
		
		count++;
		
	} while (userInput != 0);
	
	int  negcount = count - 1;

	for (int i = (count -1); i >= 0; i--) {
	
		if(anws[negcount] == 0){
			negcount = 1;
			continue;
		}
			
		if (base == 16){
			if(anws[i] == 10){
				printf("A");
				continue;
		    }
			else if(anws[i] == 11){
				printf("B");
				continue;
			}
			else if(anws[i] == 12){
				printf("C");
				continue;
			}
			else if(anws[i] == 13){
				printf("D");
				continue;
			}
			else if(anws[i] == 14){
				printf("E");
				continue;
			}
			else if(anws[i] == 15){
				printf("F");
				continue;
			}
		}
			
		printf("%i", anws[i]);
		
	}// for loop
	
}//main