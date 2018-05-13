import numpy as np
import cv2
import sys
import urllib
import time

sendstring = sys.argv[1]+"::"
print(type(sendstring),sendstring)

cap = cv2.VideoCapture(0)
face_cascade = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
eye_cascade = cv2.CascadeClassifier('haarcascade_eye.xml')

#eyes different
#current eyes xy
differex1=0
#previous eyes xy
differex2=0

#sleeptime
sleeptime=0.2

#eyes hight
whereiseyes=3

#find faces and eyes
eyecount =0
attentioncount=0#count not attention second
donotattention=50


while True:
	ret, img = cap.read()
	gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
	faces = face_cascade.detectMultiScale(
   		gray,
       	scaleFactor=1.1,
       	minNeighbors=5,
       	minSize=(50, 50)
	)
	if not len(faces):
		if attentioncount == donotattention:
			sendstring = sendstring + "0::"
			print(sendstring)
			break
		attentioncount+=1
		time.sleep(sleeptime)
		continue
	print('found {0} faces'.format(len(faces)))
	for (x,y,w,h) in faces:
   		 eyes = eye_cascade.detectMultiScale(gray)#roi_gray
   		 for (ex,ey,ew,eh) in eyes:
			 if ey < y + (h/whereiseyes):
				 eyecount += 1
				 differex1 += ex
				 cv2.rectangle(img,(ex,ey),(ex+ew,ey+eh),(0,255,0),2)#roi_color
	#avoid divided 0 
	if eyecount == 0:
		differex1=0
		continue
	differex1 /= eyecount
	print(differex1)
	differex1 = 0
	eyecount = 0
	time.sleep(sleeptime)
