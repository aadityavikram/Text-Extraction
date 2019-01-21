from PIL import Image
import pytesseract 
str=raw_input("Enter Location --> ")
im = Image.open(str)
text = pytesseract.image_to_string(im,lang='eng')
file=open("text.txt","w")
file.write(text)
