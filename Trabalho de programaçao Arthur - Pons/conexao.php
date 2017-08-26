 <?php 
	class Conexao
	{
		
		public $mysql;
			
			function conectar{
				$this->mysql = new PDO("mysql:host=localhost;dbname=loja_prog", 'root', '');
				return $this->conexao;
			}

			function close() {
      	    	$this->mysql=null;
   			}
		
}
?>
