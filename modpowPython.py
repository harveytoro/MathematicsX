def modpow(value, power, mod):
	e = 1
	
	for i in range(0, power):
		e = ((e * value) % mod);
	
	print e;
	
	
modpow(97, 17, 3233) 
	
		