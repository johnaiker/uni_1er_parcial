
import sys
import time

from os import system
def display_menu(menu): # Imprimir menu
    for i, nombre in menu:
        print(i+1,'-' ,nombre)


def select_opt(opcion): #Simulacion de un case con condicional IF
    if opcion == 1:
        system('cls') 
        print("Buenos Dias!")
        input("Presiona enter para continuar\n")
        system('cls') 
    elif opcion == 2:
        system('cls') 
        print("Buenas Tardes!")
        input("Presiona enter para continuar\n")
        system('cls') 
    elif opcion == 3:
        print("\nLimpiando consola...")
        time.sleep(2)
        system('cls') 
    elif opcion == 4:
            
        print("\nSaliendo...")
        time.sleep(1)
        system('cls') 
        sys.exit()
    else:
        print("\n\nOpcion No disponible, seleccione alguna de las mostradas en el menu") # Simulate function output.
        input("Presiona enter para continuar\n")
        system('cls') 

def main():
    functions_names = ["Imprimir Mensaje para la mañana", "Imprimir Mensaje para la tarde", "limpiar consola", "Salir"]
    system('cls') 
    while True: #Menu desplegado siempre, cuya unica espera es el input del usuario
        display_menu(enumerate(functions_names))

        try:
            selection = int(
                input("\nSeleccione alguna de las opciones presentadas: "))  # Get function key
            # selected_value = selection 
            select_opt(selection)
        except ValueError:
            system('cls') 
            print("\nHa ingresado un caracter incorrecto para el programa!, por favor inserte un numero dentro del rango de opciones.")
            
            input("\nPresiona Enter para continuar")
            system('cls') 

if __name__ == "__main__":
    main()