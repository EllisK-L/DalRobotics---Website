from flask import *
app = Flask(__name__)

@app.route("/")
@app.route("/home")
def home():
    return render_template("home.html")




if __name__ == "__main__":
    app.run(debug=True,host="192.168.2.24")