<?php
/**
 * A simple CSRF class to protect forms against CSRF attacks. The class uses
 * PHP sessions for storage.
 * 
 * @author Raahul Seshadri
 *
 */
class CSRF_Protect
{
	/**
	 * The namespace for the session variable and form inputs
	 * @var string
	 */
	private $namespace;
	
	/**
	 * Initializes the session variable name, starts the session if not already so,
	 * and initializes the token
	 * 
	 * @param string $namespace
	 */
	public function __construct($namespace = '_token')
	{
		$this->namespace = $namespace;
		if (session_id() === ''){
			session_start();
		}
		$this->setToken();
	}
	
	/**
	 * Return the token from persistent storage
	 * 
	 * @return string
	 */
	public function getToken(){
		return $this->readTokenFromStorage();
	}
	
	/**
	 * Verify if supplied token matches the stored token
	 * 
	 * @param string $userToken
	 * @return boolean
	 */
	public function isTokenValid($userToken){
		return ($userToken === $this->readTokenFromStorage());
	}
	
	/**
	 * Echoes the HTML input field with the token, and namespace as the
	 * name of the field
	 */
	public function echoInputField(){
		$token = $this->getToken();
		echo '<input type="hidden" name="'.$this->namespace.'" id="'.$this->namespace.'" value="'.$token.'" />';
	}
	
	/**
	 * Verifies whether the post token was set, else dies with error
	 */
	public function verifyGet(){
		if (!$this->isTokenValid(isset($_GET[$this->namespace])? $_GET[$this->namespace] : '')){
			die("CSRF validation failed.");
		}
	}

	/**
	 * Verifies whether the post token was set, else dies with error
	 */
	public function verifyRequest(){
		if (!$this->isTokenValid(isset($_POST[$this->namespace])? $_POST[$this->namespace] : '')){
			die("CSRF validation failed.");
		}
	}
	
	/**
	 * Generates a new token value and stores it in persisent storage, or else
	 * does nothing if one already exists in persisent storage
	 */
	private function setToken(){
		$storedToken = $this->readTokenFromStorage();
		
		if ($storedToken === ''){
			$token = md5(uniqid(rand(), TRUE));
			$this->writeTokenToStorage($token);
		}
	}
	
	/**
	 * Reads token from persistent sotrage
	 * @return string
	 */
	private function readTokenFromStorage(){
		if (isset($_SESSION[$this->namespace])){
			return $_SESSION[$this->namespace];
		} else {
			return '';
		}
	}
	
	/**
	 * Writes token to persistent storage
	 */
	private function writeTokenToStorage($token){
		$_SESSION[$this->namespace] = $token;
	}
}
