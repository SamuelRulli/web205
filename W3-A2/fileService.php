<?php
    define("SUCCESS","File success wrote!");
    define("ERROR","File writer error!");

    class fileService{

        function save($text) {
            
            $response = SUCCESS;

            try {

                $fileName = new FileService();

                $name     = $fileName->createFileName();
                $pathFile = $fileName->findLocalPath($name);

                fwrite($pathFile, $text);

                fclose($pathFile);

            } catch (\Throwable $th) {
                return ERROR . $th;
            }

            return $response;
        }

        // CREATE A FILE NAME
        function createFileName(){
            return "file-". date("Y-m-d") .".txt";
        }

        // FIND LOCAL PATH TO WRITE FILE
        function findLocalPath($name){
            $folderPath = 'bucket';

            $newLocal = fopen($folderPath . DIRECTORY_SEPARATOR . $name,"w") or die("Unable to open file!"); 

            return $newLocal;
        }

    }
?>