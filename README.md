# Log library

Create basic log file in your project.</br>
This file was created specifically to codeigniter project.

## Load in codeigniter 

You need to add `Log_library` class in `application/libraries` directory.</br>

And load it in each controller to use it. </br>

```php 
  $this->load->library('log_library');
``` 

Or you can autoload file in `application/config/autoload.php` </br>

```php 
  $autoload['libraries'] = array('log_library'); 
```

## Methods

 - `create`: Create new file and validate if file doesn't exist, all files are saved in `application/log` directory.
 - `read`: Read file and returns the read string, or false on failure.
 - `write`: Append new row in log file from actual date name.
 - `delete`: Delete log file from actual date name.

## Usage in codeigniter

```php
  $this->log_library->create();
  
  echo $this->log_library->read();
  
  $this->log_library->write("Ejemplo de nuevo ingreso al log");
  
  echo $this->log_library->read();
```
