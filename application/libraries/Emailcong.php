<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of  Emailcong
 *
 * @author Ing. Hector Curbelo Barrios
 */

class Emailcong 
{  
    private $protocol;
    private $port;
    private $host;
    private $usermaster;
    private $mailtype;
    private $charset;
    private $subject;
    private $images;
    private $message1;
    private $message2;
    private $baseattachmen;
    
    public function __construct() 
    {       
        $this->protocol         =   'smtp';
        $this->port             =   25;
        $this->host             =   '192.168.65.254';
        $this->usermaster       =   'noreply@ssauto.com';
        $this->mailtype         =   'html';
        $this->charset          =   'utf-8';
        $this->subject          =   'S&S Automotive: SDS file(s) request';
        $this->images           =   '<img src="'.$this->baseUrl().'assets/site/images/sds.jpg" /><br>';
        $this->message1         =   "<label><b>Download below the MSDS for the following item/items:</b></label><br>";
        $this->message2         =   "<label></label><br>";
        $this->baseattachmen    =   'https://www.ssauto.com/sds_files/';
    }

    
    public function getProtocol() 
    {   
        return $this->protocol;
    }
    
    public function getPort() 
    {      
        return $this->port;
    }
    
    public function getHost() 
    {
        return $this->host;
    }
    
    public function getUsermaster() 
    {
        return $this->usermaster;
    }
    public function setUsermaster( $email ) 
    {
        return $this->usermaster=$email;
    }
    
    public function getMailtype()
    {
        return $this->mailtype;
    }
    
    public function getCharset() 
    {
        return $this->charset;
    }
    
    public function getSubject() 
    {
        return $this->subject;
    }
    
    public function getImages() 
    {
        return $this->images;
    }
    
    public function getMessage1() 
    {
        return $this->message1;
    }
    
    public function getMessage2()
    {
       return $this->message2;
    }
    
    public function getLink() 
    {
        return $this->link;
    }
    
    private function baseUrl() 
    {
        $baseurl='';
        if(base_url()==='/')
        {
            $baseurl='http://soundweb.ssauto.com/';
        }
        else
        {
            $baseurl=  base_url();
        }
        return $baseurl;
    }

    /**
     * @return string
     */
    public function getBaseattachmen()
    {
        return $this->baseattachmen;
    }
} 