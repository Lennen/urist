# urist_NBPA_docs_errors_checking_FRONT
urist project front

This is the frontend code from the Hackaton "Цифровой прорыв" 2022, where my team got the 7-th place between the 20 avalable places. We developed a system, where you should download the legal document to the developed web-portal, on the output you can see, how well the text in these documents is formatted.

On the backend side, neural network is used (learning has been made on 168 legal documents) to assign text paragraph to one of the 31 classes. There is a grade from 0 to the 100, how close is the considered text to the one of the classes. Flask allows to interact with this neural network using the API. 

So it's a frontend draft, we can send a document from it and receive a grades to visualize it on the front side. Here you should see, how to send a file to remote Flask-based server to the "Front" Apache-based server.
