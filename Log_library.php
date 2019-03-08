<?php
class Log_library {

    protected $path;
    protected $date_time; 

    public function __construct ()
    {
        /** Change it for your path */
        $this->path = APPPATH.'/logs/'.date('Y-m-d').'.txt';
        $this->date_time = date("Y-m-d H:i:s a").' -> ';
    }

    public function create()
    {
        /** if file doesn't exist we create a new log file */
        if (!file_exists($this->path))
        {
            $new_file = fopen($this->path,'w');
            $initial_info = $this->date_time.'archivo log creado.';
            fwrite($new_file, $initial_info);
        }
    }

    public function read()
    {
        /** Returns the read string, or false on failure  */
        $file = fopen($this->path,'r');
        $resp_data = fread($file, filesize($this->path));
        fclose($file);

        return $resp_data; 
    }

    public function write($data)
    {
        /** Append new row in log file from actual date  */
        $data = "\n".$this->date_time.$data;
        $file = fopen($this->path,'a');
        fwrite($file, $data);
    }

    public function delete()
    {
        /** Delete log file from actual date */
        unlink($this->path);
    }

}