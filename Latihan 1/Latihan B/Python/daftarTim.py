class daftarTim():

	def __init__(self, namaTim, negaraAsal, tahun, pemain):
		self.__namaTim = namaTim
		self.__negaraAsal = negaraAsal
		self.__tahun = tahun
		self.__pemain = pemain

	def setNama(self, namaTim):
		self.__namaTim = namaTim

	def getNamaTim(self):
		return self.__namaTim

	def setNegaraAsal(self, negaraAsal):
		self.__negaraAsal = negaraAsal

	def getNegaraAsal(self):
		return self.__negaraAsal

	def setTahun(self, tahun):
		self.__tahun = tahun

	def getTahun(self):
		return self.__tahun

	def setPemain(self, pemain):
		self.__pemain = pemain

	def getPemain(self):
		return self.__pemain
