from flask import Flask, request
import os
import subprocess

app = Flask(__name__)

@app.route('/webhook', methods=['POST'])
def webhook():
    if request.method == 'POST':
        # Перейдите в каталог с вашим репозиторием
        os.chdir('/home/nurgisa0136/nur')
        
        # Выполните git pull и перезапуск Docker-контейнеров
        subprocess.run(['git', 'pull', 'origin', 'main'])
        subprocess.run(['sudo', 'docker-compose', 'down'])
        subprocess.run(['sudo', 'docker-compose', 'up', '-d'])
        
        return 'OK', 200

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
