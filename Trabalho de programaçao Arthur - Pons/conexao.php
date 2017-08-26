 <?php 
	class Conexao
	{
		
		public $mysql;
			
			function conectar{
				$this->mysql = new PDO("mysql:host=localhost;dbname=loja_prog", 'root', '');
				return $this->mysql;
			}

			function close() {
      	    	$this->mysql=null;
   			}

   			function criptografar($str){

    			return sha1(md5($str));
			}
			function isLogado()
		{
	    	if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
	    	{
	    	    return false;
	   		 }
	 
		    return true;
		}
		
}
?>
