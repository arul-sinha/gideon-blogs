from flask import Flask, render_template, redirect, request
import subprocess as sp
from cs50 import SQL
#import yaml

app = Flask("__name__")
#config = yaml.load(open('configs/config.yaml'))
#db = config["db"]
#print(db) 

@app.route("/")
def index():
    return render_template("index.html")

@app.route("/register")
def register():
    return render_template("register.html")

@app.route("/login")
def login():
    return render_template("login.html")

@app.route("/reg_into_db", methods=["POST"])
def reg_into_db():
    fname = request.form.get("reg_fname")
    print(fname)
    return redirect("/msg_reg_success")

@app.route("/contact_dev")
def contact():
    return render_template("contact.html")

@app.route("/temp_layout")
def layout_test():
    return render_template("/layout.xml")

@app.route("/about")
def about():
    out = sp.run(["php", "./templates/about.php"], stdout=sp.PIPE)
    return out.stdout

@app.route("/settings")
def settings():
    return render_template("setting.html")

if __name__ == "__main__":
    app.run(debug=True)
