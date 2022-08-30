from crypt import methods
from flask import Flask, render_template #importando flask
from flask import request
meu_app = Flask(__name__)
@meu_app.route('/') #definindo rota
@meu_app.route('/salvar', methods=['POST'])
def to_index(): #funcao python
    nome=request.form.get["nome"]
    lista=['Eloisa', 'Leticia', 'Paulo']
    return render_template('index.html', lista=lista)
#FLASK_APP=app.py
#flask run
#FLASK_ENV=development
#flask run
#export FLASK_ENV=development - atualizar 
#{{}} html entende que é a variavel do phyton
#flask run --host=0.0.0.0