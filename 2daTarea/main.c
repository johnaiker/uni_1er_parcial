#include <stdio.h>
#include <math.h>

int main() {
    float numero, parte_decimal, modulo;
    int parte_entera, divisor;

    printf("Ingresa un numero: ");
    scanf("%f", &numero);

    printf("Ingresa un divisor para ese numero: ");
    scanf("%d", &divisor);

    // Obtener la parte entera del número
    parte_entera = (int)numero;

    // Obtener la parte decimal del número
    parte_decimal = numero - parte_entera;

    modulo = fmod(numero, divisor);

    printf("-------*----------*-------\n");
    printf("Parte entera: %d\n", parte_entera);
    printf("Parte decimal: %.2f\n", parte_decimal);
    printf("Modulo: %.2f\n", modulo);

    return 0;
}
