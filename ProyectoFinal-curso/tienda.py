import mysql.connector
import tkinter as tk
import tkinter
from tkinter import *
from tkinter import ttk
from tkinter import PhotoImage
from datetime import date
from datetime import datetime
from tkinter import messagebox as Messagebox
import random

root = Tk()
root.title('Acceso')
root.resizable(1, 1)
root.geometry("400x350")
root.config(bg="#FEC1F8")
root.iconbitmap('tarta.ico')
imagen = PhotoImage(file="images/fondo.png")
Label(root, image=imagen, bd=0).place(x=0, y=0)

nombre = Label(root, text="Nombre: ")
nombre.place(x=70, y=95)
nombre.config(fg="black", font=("Verdana", 10))

nombre = tk.StringVar()
nombre_entry = Entry(root, textvariable=nombre, width=20)
nombre_entry.place(x=200, y=95)

contraseña = Label(root, text="Contraseña: ")
contraseña.place(x=70, y=170)
contraseña.config(fg="black", font=("Verdana", 10))

contraseña = tk.StringVar()
contraseña_entry = Entry(root, textvariable=contraseña, width=20, show="*")
contraseña_entry.place(x=200, y=175)


def registrar():
    db = mysql.connector.connect(
        user='root', password='', host='localhost', database='tienda')
    cur = db.cursor()

    cur.execute("INSERT INTO ingresar VALUES (%s, %s)",
                (nombre_entry.get(), contraseña_entry.get()))
    db.commit()
    Messagebox.showinfo("Insertar", "usuario registado correctamente")


def acceder():
    global nombre
    db = mysql.connector.connect(
        user='root', password='', host='localhost', database='tienda')
    cur = db.cursor()

    nombre = nombre_entry.get()
    clave = contraseña_entry.get()

    cur.execute(
        'SELECT * FROM ingresar WHERE nombre = %s AND contraseña = %s', (nombre, clave))

    if cur.fetchall():
        Messagebox.showinfo("Existe", "usuario encontrado")
        new_window = tk.Toplevel()
        new_window.title("Tienda")
        new_window.geometry('600x570')
        new_window.iconbitmap('tarta.ico')
        new_window.config(bg="#FAD7F6")

    else:
        Messagebox.showinfo("No existe", "No se encuentra en la base de datos")

        cur.close()

    #Datos del producto 1, extraidos de la tabla productos
    cur.execute('SELECT * FROM productos WHERE id="1"')
    producto1 = cur.fetchone()

    imagen1 = PhotoImage(file=producto1[4])
    fotoproducto = Label(new_window, image=imagen1, bg="#FAD7F6", bd=0)
    fotoproducto.place(x=30, y=30)

    tarta_chocolate = Label(new_window, text=producto1[1])
    tarta_chocolate.place(x=220, y=50)
    tarta_chocolate.config(fg="black", bg="#FAD7F6", font=("Verdana", 12))

    stock_tarta_chocolate = Label(new_window, text=(producto1[2], 'en', 'stock'), fg="blue", bg="#FAD7F6", font=("Verdana", 10))
    stock_tarta_chocolate.place(x=220, y=80)

    tarta_chocolate_precio = Label(new_window, text=('Precio:', producto1[3], '€'), fg="red", bg="#FAD7F6", font=("Verdana", 12))
    tarta_chocolate_precio.place(x=220, y=110)

    cantidad1 = tk.StringVar()
    cantidad1 = Spinbox(new_window, from_=0, to=producto1[2], width=5)
    cantidad1.place(x=220, y=170)

    #Datos del producto 2, extraidos de la tabla productos
    cur.execute('SELECT * FROM productos WHERE id="2"')
    producto2 = cur.fetchone()

    imagen2 = PhotoImage(file=producto2[4])
    fotoproducto = Label(new_window, image=imagen2,bg="#FAD7F6", bd=0)
    fotoproducto.place(x=30, y=210)

    tarta_zanahoria = Label(new_window, text=producto2[1])
    tarta_zanahoria.place(x=220, y=220)
    tarta_zanahoria.config(fg="black", bg="#FAD7F6", font=("Verdana", 12))

    stock_tarta_zanahoria = Label(new_window, text=(producto2[2], 'en', 'stock'), fg="blue", bg="#FAD7F6", font=("Verdana", 10))
    stock_tarta_zanahoria.place(x=220, y=250)

    tarta_zanahoria_precio = Label(new_window, text=('Precio:', producto2[3], '€'), fg="red", bg="#FAD7F6", font=("Verdana", 12))
    tarta_zanahoria_precio.place(x=220, y=280)

    cantidad2 = tk.StringVar()
    cantidad2 = Spinbox(new_window, from_=0, to=producto2[2], width=5)
    cantidad2.place(x=220, y=310)

    #Datos del producto 3, extraidos de la tabla productos
    cur.execute('SELECT * FROM productos WHERE id="3"')
    producto3 = cur.fetchone()

    imagen3 = PhotoImage(file=producto3[4])
    fotoproducto = Label(new_window, image=imagen3,bg="#FAD7F6", bd=0)
    fotoproducto.place(x=30, y=420)

    tarta_redvelvet = Label(new_window, text=producto3[1])
    tarta_redvelvet.place(x=220, y=430)
    tarta_redvelvet.config(fg="black", bg="#FAD7F6", font=("Verdana", 12))

    stock_tarta_redvelvet = Label(new_window, text=(producto3[2], 'en', 'stock'), fg="blue", bg="#FAD7F6", font=("Verdana", 10))
    stock_tarta_redvelvet.place(x=220, y=460)

    tarta_redvelvet_precio = Label(new_window, text=('Precio:', producto3[3], '€'), fg="red", bg="#FAD7F6", font=("Verdana", 12))
    tarta_redvelvet_precio.place(x=220, y=490)

    cantidad3 = tk.StringVar()
    cantidad3 = Spinbox(new_window, from_=0, to=producto3[2], width=5)
    cantidad3.place(x=220, y=520)

    def comprar():
        global nombre
        db = mysql.connector.connect(
            user='root', password='', host='localhost', database='tienda')
        cur = db.cursor()

        cantidadcompra_producto1 = cantidad1.get()
        cantidadstock_producto1 = int(
            producto1[2]) - int(cantidadcompra_producto1)

        cantidadcompra_producto2 = cantidad2.get()
        cantidadstock_producto2 = int(
            producto2[2]) - int(cantidadcompra_producto2)

        cantidadcompra_producto3 = cantidad3.get()
        cantidadstock_producto3 = int(
            producto3[2]) - int(cantidadcompra_producto3)

        sql = "UPDATE productos SET unidad= %s WHERE id=1"
        unidades1 = cantidadstock_producto1
        cur.execute(sql, (unidades1,))

        sql = "UPDATE productos SET unidad= %s WHERE id=2"
        unidades2 = cantidadstock_producto2
        cur.execute(sql, (unidades2,))

        sql = "UPDATE productos SET unidad= %s WHERE id=3"
        unidades3 = cantidadstock_producto3
        cur.execute(sql, (unidades3,))
        db.commit()

        fecha_compra = date.today()

        producto1_cantidad = ''
        producto2_cantidad = ''
        producto3_cantidad = ''
        total_producto1 = 0
        total_producto2 = 0
        total_producto3 = 0

        if int(cantidadcompra_producto1) > 0:
            producto1_cantidad = producto1[1] + " x " + cantidadcompra_producto1
            total_producto1 = float(producto1[3]) * int(cantidadcompra_producto1)

        if int(cantidadcompra_producto2) > 0:
            producto2_cantidad = producto2[1] +  " x " + cantidadcompra_producto2
            total_producto2 = float(producto2[3]) * int(cantidadcompra_producto2)

        if int(cantidadcompra_producto3) > 0:
            producto3_cantidad = producto3[1] + " x " + cantidadcompra_producto3
            total_producto3 = float(
                producto2[3]) * int(cantidadcompra_producto3)

        producto_cantidad = producto1_cantidad + " " + producto2_cantidad + " " + producto3_cantidad
        total_compra = total_producto1 + total_producto2 + total_producto3

        cur.execute('INSERT INTO tickets VALUES (%s,%s,%s,%s)',
                    (nombre, producto_cantidad, fecha_compra, total_compra))
        db.commit()

        Messagebox.showinfo("Compra", "Compra realizada!")

    btnComprar = Button(new_window, text="Comprar", command=comprar,
                        fg="#000000", width=8, font=("Verdana", 12)).place(x=460, y=520)
    imagen1 = ImageTk.PhotoImage(imagen)


def salir():
    print('Salir')


btnAcceder = Button(root, text="Acceder", command=acceder, fg="blue", width=8).place(x=150, y=250)

btnRegistrar = Button(root, text="Registrar", command=registrar, fg="green", width=8).place(x=60, y=250)

btnSalir = Button(root, text="Salir", command=salir, fg="red", width=8).place(x=240, y=250)


root.mainloop()
