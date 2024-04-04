#include <limits.h>
#include <stdbool.h>
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define MAX_TESTS 10

bool myread(const char *format, void *address)
{
    char buffer[1024];
    fgets(buffer, sizeof buffer, stdin);
    return sscanf(buffer, format, address) == 1;
}

struct struc
{
    int a;

    int b;

    int c;

    int add;

    int grade;
};

int sj(int n)
{
    int t;

    t = rand() % n;

    return t;
}

void ctm_i(struct struc *t)
{
    t->a = sj(101);

    t->c = sj(4);

    if (t->c == 1)
    {
        t->b = sj(101 - (t->a));

        t->add = (t->a) + (t->b);
    }

    else
    {
        t->b = sj((t->a) + 1);

        t->add = (t->a) - (t->b);
    }

    t->grade = 0;
}

void tcm_i(struct struc *t, int n)
{
    int ad;

    printf(
        " ***********************************************************************"
        "*********\n");

    printf(
        " ......................................................................."
        ".........\n");

    printf(" Pregunta %d\n\n", n + 1);

    printf(" Tiene 3 intentos restantes\n\n");

    if (t->c == 1)
        printf(" %d+%d= ", t->a, t->b);
    else
        printf(" %d-%d= ", t->a, t->b);

    myread("%d", &ad);

    if (ad == t->add)

    {
        t->grade = 10;

        printf("\n Muy bien, gano 10 puntos\n\n");
    }

    else
    {
        printf("\n Incorrecto, 2 intentos restantes\n\n");

        myread("%d", &ad);

        if (ad == t->add)

        {
            t->grade = 7;

            printf("\n Bien, gano 7 puntos\n\n");
        }

        else
        {
            printf("\n Incorrecto, le queda solo UN intento\n\n");

            myread("%d", &ad);

            if (ad == t->add)

            {
                t->grade = 5;

                printf("\n No esta mal, gano 5 puntos\n\n");
            }

            else
            {
                t->grade = 0;

                printf("\n Fallido, 0 puntos\n\n");

                printf("\n La respuesta era %d\n\n", t->add);
            }
        }
    }

    printf(
        " ......................................................................."
        ".........\n");

    printf(
        " ***********************************************************************"
        "*********\n");
}

int main()
{
    int opcion = 0;
    bool cerrar = false;
    
    int rounds = 0;
    int highest = 0;
    int lowest = INT_MAX;
    float allScore = 0;
    float avg = 0;

    int i, j, g = 0;
    // char x;
    struct struc test[MAX_TESTS];

while (!cerrar)
{

        cerrar = false;
    system("cls");

    srand((unsigned)time(NULL));

    printf( " ***********************************************************************************\n");
    printf( " ...................................................................................\n");
    printf( " ************************************* BIENVENIDO! ************************************\n");
    printf("\n Opciones:\n\n");
    printf( "(1)Jugar minjuego de Quiz\n");
    printf( "(2)limpiar consola\n");
    printf( "(3)Salir\n");
    printf( " ................................................................................\n");

    if (scanf("%d", &opcion) == 1) {
        printf("%d", opcion);
    }

if (opcion == 1)
{

    for (;;) {
        system("cls");
        
        rounds++;
        printf(" ***********************************************************************"
               "*********\n");
        for (i = 0; i < MAX_TESTS; i++) // generate all questions
        {
            ctm_i(&test[i]);

            for (j = 0; j < i; j++)

                if (test[i].a == test[j].a && test[i].b == test[j].b && test[i].c == test[j].c)
                    // if question is already present
                    ctm_i(&test[i]); // then re-generate
        }

        printf(" Esta listo? por favor presione cualquier tecla para comenzar: ");
        int c;
        while ((c = getchar()) != '\n' && c != EOF)
        {
        }

        for (i = 1; i <= 2; i++)
        {
            printf(
                " ************************\n");

            printf(
                " ..................................................................."
                ".."
                "...........\n");
        }

        // Take quiz
        for (i = 0; i < MAX_TESTS; i++)
            tcm_i(&test[i], i);

        printf(" End\n\n");

        bool done = false;
        bool unsure = true;
        bool showS = true;

        while (unsure)
        {
            unsure = false;
            puts("\n");
            if (showS)
            {
                puts(" Ingresa 'S' para ver resultados");
            }
            puts(" Ingresa 'P' para jugar otra ronda");
            puts(" Ingresa 'Q' para salir");
            char eleccion;
            myread("%c", &eleccion);
            if (eleccion == 'Q' || eleccion == 'q')
                done = true;
            else if (eleccion == 'S' || eleccion == 's')
            {
                showS = false;
                // calculate total score for current round
                g = 0;
                for (i = 0; i < MAX_TESTS; i++)
                {
                    g += test[i].grade; // add score of each question
                }
                allScore += g;           // add current round's score to total
                avg = allScore / rounds; // average of all rounds

                if (g > highest)
                {
                    highest = g;
                }

                if (g < lowest)
                {
                    lowest = g;
                }

                if (rounds == 1)
                {
                    printf(" Puntaje Final: %d/100\n", g); // display round score
                }
                else
                {
                    // puts("Whoops! Looks like highest/lowest have not been adjusted!");
                    printf(" Puntuacion mas alta: %d/100\n", highest);
                    printf(" Puntaje mas bajo: %d/100\n", lowest);
                    printf(" Puntaje promedio : %f\n", avg);
                }
                unsure = true;
                // getchar();
            }
            else if (eleccion == 'P' || eleccion == 'p')
            {
            }
            else
            {
                puts(" Entrada Invalida!");
                unsure = true;
            }
        }
        if (done)
            break;
    }
    } else if (opcion == 2) {
        printf("\nLimpiando consola...\n");
        system("cls");
    } else if(opcion == 3 ){
        system("cls");
        printf("\nSaliendo...\n");
        
        cerrar = true;
    } else {
        puts(" Entrada Invalida!");
    }
    
    /* code */
}

}