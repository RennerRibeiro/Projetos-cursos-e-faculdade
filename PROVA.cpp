#include <iostream>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(void) {        

    int soma; int fator; int numero; 
    printf ("que numero você quer?");
	scanf ("%d", &numero); 
	soma=numero;
	



    for (fator=numero;fator>0;fator--)
    {
        (soma = soma*fator);
        printf("\n %d",fator);
 	
    

        printf("\n %d",soma);
    }

    

        return(0); 
}
			

            
	
	
	
	

