import os
import time

iplist=['0.0.0.0']


iplistcompare =1
#open arp table
while True:
	iplistcount=0
	arpcompare = 1
	os.system('ip link set arp off dev wlan0')
	print('1')
	time.sleep(1)
	os.system('ip link set arp on dev wlan0')
	print('2')
	time.sleep(30)
	f = open("/proc/net/arp", "r")
	print('3')
	#delete header
	line = f.readline()
	print('4')
	while line:
		line = f.readline()
		print('5')
		if line.find('wlan0')>0:
			arpcompare+=1
			for ipaddr in iplist:
				if line[0:15].strip() == ipaddr:
					iplistcount+=1
					print('6')
					break
			if iplistcount>0:
				continue
			iplist.append(line[0:15].strip())
			iplistcompare = len(iplist)
			print('7')
			ip=line[0:15].strip()
			os.system('python /root/videoanalysis.py '+ip)
			os.system('python /root/snsanalysis.py '+ip)
	print('arp : ', arpcompare, 'iplist : ',iplistcompare)
	if arpcompare<iplistcompare :
		arpcompare = 1
		iplistcompare = 1
		f.close()
		print('11')
		f = open("/proc/net/arp","r")
		print('12')
		line = f.readline()
		print('13')
		i = 0
		print('14')
		del iplist[1:]
		print('15')
		while line:
			line = f.readline()
			print('16')
			if line.find('wlan0')>0 :
				print('17')
				iplist.append(line[0:15].strip())
		print('18')
		f.close()
	print('19')
	time.sleep(1)
print('20')
print(iplist)
f.close
