<?php
	namespace ElasticEmailApi; 

class File extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Permanently deletes the file from your account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?int $fileID 
     * @param string $filename Name of your file.
     */
    public function EEDelete($fileID = null, $filename = null) {
        return $this->sendRequest('file/delete', array(
                    'fileID' => $fileID,
                    'filename' => $filename
        ));
    }

    /**
     * Gets content of the chosen File
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $filename Name of your file.
     * @param ?int $fileID 
     * @return File
     */
    public function Download($filename = null, $fileID = null) {
        return $this->sendRequest('file/download', array(
                    'filename' => $filename,
                    'fileID' => $fileID
        ));
    }

    /**
     * Lists your available Attachments in the given email
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $msgID ID number of selected message.
     * @return Array<\ElasticEmailEnums\File>
     */
    public function EEList($msgID) {
        return $this->sendRequest('file/list', array(
                    'msgID' => $msgID
        ));
    }

    /**
     * Lists all your available files
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\File>
     */
    public function ListAll() {
        return $this->sendRequest('file/listall');
    }

    /**
     * Gets chosen File
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $filename Name of your file.
     * @return \ElasticEmailEnums\File
     */
    public function Load($filename) {
        return $this->sendRequest('file/load', array(
                    'filename' => $filename
        ));
    }

    /**
     * Uploads selected file to the server using http form upload format (MIME multipart/form-data) or PUT method.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param File $file 
     * @param string $name Filename
     * @param ?int $expiresAfterDays After how many days should the file be deleted.
     * @return \ElasticEmailEnums\File
     */
    public function Upload($file, $name = null, $expiresAfterDays = 35) {
        return $this->sendRequest('file/upload', array(
                    'name' => $name,
                    'expiresAfterDays' => $expiresAfterDays
        ), "POST", $file);
    }

}
