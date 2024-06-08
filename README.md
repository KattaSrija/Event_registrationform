# EVENT REGISTRATION FORM

I created an event registration form using HTML, CSS, Bootstrap, and JavaScript. The form data will be submitted to a backend script written in PHP, which will save the details to a database.

### Frontend Development
 I created a html file for the registration form(index.html). I used bootstrap to style the form elements for a responsive design.
The form includes the following fields:
1.Full Name
2.Email
3.Address
4.Phone Number
5.Branch (dropdown with multiple options)
6.Comments 


- The following is the form I created using HTML, CSS, Bootstrap.
![Screenshot 2024-06-08 160532](https://github.com/KattaSrija/Event_registrationform/assets/161741828/9826d4a5-9e86-4aa8-bf5b-4d4e69a6a2c9)



I used JavaScript to validate the form elements.
If any form element except ‘Comments’ is entered incorrectly, the form will not be submitted.
If every field is filled correctly, the details of the user will be submitted.

![image](https://github.com/KattaSrija/Event_registrationform/assets/161741828/435efddb-7814-488f-b56c-03c8a3b63f69)

In the above form, I entered invalid email address. So, the form will not be submitted.


![image](https://github.com/KattaSrija/Event_registrationform/assets/161741828/6285f515-4395-414b-82ff-45a56aaf017e)

After entering the correct details, and on clicking the submit button our data will be sent.

![image](https://github.com/KattaSrija/Event_registrationform/assets/161741828/3df68e43-6fe7-4b8e-847a-69d634283785)

After submitting, we will get a message saying that “Data inserted successfully”.

![image](https://github.com/KattaSrija/Event_registrationform/assets/161741828/878e05cd-4d9c-47f1-a6b3-36111938dcb5)

Initially, the table does not contain any details.

But after submitting the form, the table will contain the submitted form details.

![image](https://github.com/KattaSrija/Event_registrationform/assets/161741828/b176ac54-0400-45e6-960b-cf6619aae80c)

I used basic PHP for backend and simple SQL statements to store the details into the table.

