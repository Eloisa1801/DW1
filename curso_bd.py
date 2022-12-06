class curso(db.model):
    
    curso_id = db.column(db.Integer, primary_key=true)
    curso_nome = db.column(db.String(45))
    curso_descricao = db.column(db.String(200))
    curso_carga_horaria = db.column(db.Integer)
    
    def  __INIT__(self, curso_nome, curso_descricao, curso_carga_horaria):
        self.curso_nome  = curso_nome
        self.curso_descricao = curso_descricao
        self.curso_carga_horaria = curso_carga_horaria
