from crypt import methods
from flask import Flask, render_template #importando flask
from flask import request
meu_app = Flask(__name__)
app.config["SQLALCHEMY_DATABASE_URI"] = "mysql://usuario:senha/IP/nome_bd" #prog. de bd utilizado, usuario, senha, @, e nome do bd
db=SQLALCHEMY(app)
@meu_app.route('/') #definindo rota

class curso(db.model):
    
    curso_id = db.column(db.Integer, primary_key=true)
    curso_nome = db.column(db.String(45))
    curso_descricao = db.column(db.String(200))
    curso_carga_horaria = db.column(db.Integer)
    
    def  __INIT__(self, curso_nome, curso_descricao, curso_carga_horaria):
        self.curso_nome  = curso_nome
        self.curso_descricao = curso_descricao
        self.curso_carga_horaria = curso_carga_horaria
