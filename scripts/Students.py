from flask import Flask
from flask_restful import Resource, Api, reqparse

app = Flask(__name__)
api = Api(app)
response = {
    'statusMessage':'ok',
    'statusCode':'00'
}

def populate(name):
    response["result"] = "Hello "+name
    response["name"] = name
    return response

class StudentsList(Resource):
    def get(self):
        response = populate("Reyna")
        return response

api.add_resource(StudentsList, '/students/')


if __name__ == "__main__":
    app.run(debug=True)

