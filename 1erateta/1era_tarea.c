#include <stdio.h>
#include <string.h>
#include <stdbool.h>

int main() {
    int numero;
    char cadena[100];
    bool booleano;

    printf("Ingrese un valor: ");
    if (scanf("%d", &numero) == 1) {
        printf("Ha ingresado un valor tipo int\n");
    } else if (scanf("%s", cadena) == 1) {
        if (strcmp(cadena, "true") == 0) {
            booleano = true;
            printf("Ha ingresado un valor booleano: true\n");
        } else if (strcmp(cadena, "false") == 0) {
            booleano = false;
            printf("Ha ingresado un valor booleano: false\n");
        } else {
            printf("Ha ingresado un valor tipo char\n");
        }
    } else {
        printf("No se pudo determinar el tipo de valor ingresado\n");
    }

    return 0;
}