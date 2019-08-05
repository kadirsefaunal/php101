## Include and Require

It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.

* **require** will produce a fatal error (E_COMPILE_ERROR) and stop the script
* **include** will only produce a warning (E_WARNING) and the script will continue