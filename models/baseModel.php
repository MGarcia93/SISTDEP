
<?php
class baseModel{
    private  $table;
    protected  $db;

    function __construct($table){

		$this->db=Database::connect();
        $this->table=$table;

	}



    public function remove(){

    	$query=$this->db->query("DELETE FROM {$this->table} WHERE id={$this->id}");
    	if($this->db->affected_rows==1){
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

   
    function findByID(){
        $sql="SELECT * FROM {$this->table} WHERE id={$this->id}";
		$query=$this->db->query($sql);
		if ($query){
            if ($query->num_rows) return $query->fetch_object();
		}
		else {
			return false;		}
	}

    function findBy($column,$value){
        $sql="SELECT * FROM {$this->table} WHERE $column=$value";
        $query=$this->db->query($sql);
        
        if ($query){
            if ($query->num_rows) return $query->fetch_object();
        }
        else {
            return false;      
         }
    }
    function findLike($campo,$value){
        $sql="SELECT * FROM {$this->table} WHERE $column like '%{$value}%'";
        $query=$this->db->query($sql);
        if ($query){
            if ($query->num_rows){
                while ($row=$query->fetch_object()) {
                    $data[]=$row;
                }
                return $data;
            }
        }
        
        else {
            return false;       
        }
    }
    function findLast(){
        $sql="SELECT * FROM {$this->table} ORDER BY id DESC LIMIT 1";
        $query=$this->db->query($sql);
        if ($query){
            if ($query->num_rows) return $query->fetch_object();
        }
        else {
            return false;       }
    }

     public function findAll(){
        $sql="SELECT * FROM {$this->table}";
        $query=$this->db->query($sql);
        if ($query){
            if ($query->num_rows){
                while ($row=$query->fetch_object()) {
                    $data[]=$row;
                }
                return $data;
            }
        }
        else {
            return false;       
        }
    }
}
?>
