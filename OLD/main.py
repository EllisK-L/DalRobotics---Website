from flask import Flask, render_template, request, url_for, redirect
from werkzeug import secure_filename
import os

app = Flask(__name__)

class ListFiles():
    def __init__(self,dir):
        self.dir = dir
        self.display()

    
    def display(self):
        self.fileDic = []
        self.files = os.listdir(self.dir)
        for f in self.files:
            if "." in f:
                self.tempDic = {
                    "file":f,
                    "extension":(f.split("."))[1],
                    "folder":"False"
                }
            else:
                self.tempDic = {
                    "file":f,
                    "extension":"",
                    "folder":"True"
                }
            self.fileDic.append(self.tempDic)


app.config["uploads"] = "F:\Documents\File Server\static"


@app.route("/favicon.ico")
def bad():
    return "Hello"


@app.route("/upload", methods= ["GET","POST"])
def upload():
    if request.method == "POST":
        f = request.files["file"]
        f.save(os.path.join(app.config["uploads"]),secure_filename(f.filename))
        return redirect(url_for("files"))


@app.route("/files/<directoryRaw>")
@app.route("/files/", defaults={"directoryRaw": ""})
def files(directoryRaw):
    print(directoryRaw)
    dirHTML = directoryRaw + "/"
    directory = directoryRaw + "/"
    print(dirHTML.replace("-","/"))
    return render_template("files.html",files=ListFiles("static/Files"+directory.replace("-","/")).fileDic,dir=(dirHTML.replace("-","/")))

@app.route("/")
@app.route("/home")
def home():
    return render_template("home.html")




if __name__ == "__main__":
    app.run(debug=True,host="192.168.2.24")