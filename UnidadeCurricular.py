class UnidadeCurricular:

    def  __INIT__(self, codigoUnidadeCurricular, nomeUnidadeCurricular, professor, cargaHoraria, ementa, objetivoGeral, objetivoEspecifico, curso):
        self.codigoUnidadeCurricular = codigoUnidadeCurricular
        self.nomeUnidadeCurricular = nomeUnidadeCurricular
        self.professor = professor
        self.cargaHoraria = cargaHoraria
        self.ementa =  ementa
        self.objetivoGeral = objetivoGeral
        self.objetivoEspecifico = objetivoEspecifico
        self.curso = curso
    

    def getCodigoUnidadeCurricular(self):
        return self.codigoUnidadeCurricular
    

    def setCodigoUnidadeCurricular(self, codigoUnidadeCurricular):
        self.codigoUnidadeCurricular=codigoUnidadeCurricular
    