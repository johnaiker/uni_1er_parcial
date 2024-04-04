def print_tipo_dato(entrada):
    try:
        numero = int(entrada)
        print("Ha ingresado un valor tipo int")
    except ValueError:
            if entrada.lower() == "true" or entrada.lower() == "false":
                print("Ha ingresado un booleano")
            else:
                print("Ha ingresado un string")

entrada = input("Ingrese el valor de la variable a testear: ")
print_tipo_dato(entrada)
