<?php 

// Or, using an anonymous function as of PHP 5.3.0
spl_autoload_register(function ($class) {
    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/inc/classes/';
    if(strpos($class, 'Techie')!==0){
        return;
    }

    //remove paig from class name
    $file_name=str_replace('Techie\\',"",$class);

    //use namespace as string parse
    $folders=explode("\\",$file_name);
    //remove file name from the folder
    $file_name=array_pop($folders);

    //convert folder array to path string using /
    $file_path=implode("/",array_map(function($folder){
       return strtolower($folder);
    },$folders));

    //combine whole file path and file name with extensions.
    $file_name=$file_path."/".$file_name.'.php';
    //check if file exists in the folder.
    if(file_exists($base_dir.$file_name)){
        //require if file exist
        require $base_dir.$file_name;
    }
});

new Techie\Theme\Main();