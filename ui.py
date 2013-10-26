import Tkinter
import tkMessageBox
from Tkinter import *
top = Tkinter.Tk()

def helloCallBack(mess):
   print mess;
   tkMessageBox.showinfo( mess, "Hello World")



Lb1 = Listbox(top)
Lb1.insert(1, "Python")
Lb1.insert(2, "Perl")
Lb1.insert(3, "C")
Lb1.insert(4, "PHP")
Lb1.insert(5, "JSP")
Lb1.insert(6, "Ruby")
Lb1.pack()
selected=Lb1.curselection();
B = Tkinter.Button(top, text ="Hello", command = helloCallBack(selected))
B.pack()

top.mainloop()