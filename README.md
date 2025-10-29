[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/YqOlgMob)
## Assignment Three: MVC Implementation of Update and Delete Contacts

In this assignment, the student will start with the starter project that provides a simple MVC controller implementation to introduce the studen to the design and implementation of an MVC Architecture.  The starter project already has implemented the (**Retrieve**) - *contactListController.php* and the (**Create**) - *contactAddController.php*.  The requirement for the student is to add the remaining two **CRUD** functions:
1. (**Update**) - *contactUpdateController.php*: This should provide a contact form with the current information for the contactID prefilled, and replace the values with the form values on submission using DAO method that implements an **Update** SQL query.
2. (**Delete**) - *contactDeleteController.php*: This should allow a contact to be removed from the contacts table based on their contactID. Provide a confirmation before removing using a DAO method that implements am **Delete** SQL query.  

### Requirements
* Follow the demonstrated naming convention for the controllers, views, and DAO methods.
* The *Delete* and *Update* functions should be activated from the *ContactList-view.php*.
* **ALL HTTP REQUESTS GO to A CONTROLLER**  No view page is directly accessed by bypassing a controller
  
