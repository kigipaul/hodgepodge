#include "stdio.h"
int main(){
	int t1 = 1,x=0,i=0;
	printf("Start use if = 1\n====\n");
//	for(x = 0 ;x<10;x++){
		int t3=0;
		for(i = 0 ;i < 100000000;i++){
	    	if(t1 ==1){
    	    	t3++;
	    	}
		}

		printf( "\tUse $time s\n");
//	}
//	printf("Stop use if = 1\n");

	return 0;
}
