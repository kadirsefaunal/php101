## PHP Autoloading  
Autoloading allows you to automatically include the class files.

```
<?php  
include 'Class1.php'; 
include 'Class2.php'; 
include 'Namespace\Class1.php'; 
include 'Namespace\Class2.php'; 
// and more...
```

## The Logic of Autoloading

Let's understand what was going on with the autoloader in 3 steps.

### Step 1: Registering an Autoloader

-   You know, PHP has numerous in-built functions.  spl_autoload_register  is one of them. It accepts 3  parameters but we will only use the first one here.
-   We will call the  spl_autoload_register()  function with a callback (anonymous function).
-   You can call that function multiple times with different callback functions.
-   PHP remembers all of those callback functions  **in order**. This is called  **Registering autoloaders**.

### Step 2: Running the Autoloader

-   When you try to access a class in your code (new Circle() ), PHP first checks if the class is found.
-   If the class was not found, PHP tries to find it. PHP does it using registered autoloaders. If there are registered autoloaders, PHP will run the first registered autoloader. After running it, PHP will check if the class is now found. If not, PHP will run all the registered autoloaders by the registered order.
-   If PHP founds the class, it will terminate the "finding process" and the other autoloaders are  **not called**.

### Step 3: What happened in the last example?

-   Here's our autoloader from the last example.
    ```
    <?php
    spl_autoload_register(function($className) {
    	$file = $className . '.php';
    	if (file_exists($file)) {
    		include $file;
    	}
    });
    ```
-   When PHP calls the callback function, it sends the class name as the first argument. ($className  in the callback function)
-   Let's assume that  $className  was  _Circle_. We know, the  Circle  class is in the  Circle.php  file.
-   If the file  Circle.php  exists, we will include it. Now, the  Circle  class is available in our PHP file.

> It is better to not to throw errors if the file is not found, as there may be multiple autoloaders to find the file.

### Namespace-Friendly Autoloading
