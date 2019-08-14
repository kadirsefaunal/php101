## Namespace  
In PHP, you cannot have two classes with the same name. If you need two classes to handle your blog users and app users, you will need to name those: Blog_User and App_User. But, those prefixes are hard to manage.  
  
Namespaces can be used to simplify the process and make it more organized. Namespaces give you more control.  
  
### Using "use" in Namespaces to Import  

The **use** keyword can be used to import a class to the current scope.

### You can nickname the imports

There are two places to use nicknames for importing classes.
* When you already have a class named the same name as the importing class
* When you need a more convenient (or easy) name for the importing class

The  **as**  keyword is used for nicknaming.