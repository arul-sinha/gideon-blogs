from flask import Flask
app = Flask(__name__)
@app.route('/')
def first_time_web():
    return 'Welcome to my web page. This is my first try. Happy coding'
@app.route('/basic/')
def basic():
    return "This is the second page"
@app.route('/', subdomain ='practice')
def practice():
    return "this is a subdomain of localhost"
@app.route('/course/', subdomain ='practice')
def blog():
    return "blog taken by myself"
if __name__ == '__main__':
    app.config['SERVER_NAME']='localhost:5000'
    app.run()