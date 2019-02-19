<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");

class DatabaseOperations{
    public function __construct(){
        $this->db_conn = Config::getConnection();
    }
    public function insertIntoTable(string $table_name, array $table_columns, array $column_values)
    {
        //return 'hello';
        // check if given table exists in the database
        $table_exists = mysqli_query($this->db_conn, "SELECT 1 FROM $table_name");
        if (!$table_exists) {
            return('Table doest Not Exist. Please Check The table name');
        } else {
            $table_cols = implode($table_columns,",");
            $table_vals = "'".implode($column_values,"','")."'"; 
            $query = "INSERT INTO $table_name (".$table_cols.")VALUES(" .$table_vals. ")";
            $query_result = mysqli_query($this->db_conn, $query);
            if($query_result == 1){
                return true;
            }  // returns 1 if the query was executed successfully
            else{
                return json_encode(mysqli_error($this->db_conn));
            }
        }
    }
    public function updateTable(string $table_name, array $data, string $conditions)
    {
        //return 'hello';
        // check if given table exists in the database
        $table_exists = mysqli_query($this->db_conn, "SELECT 1 FROM $table_name");
        if (!$table_exists) {
            return('Table doest Not Exist. Please Check The table name');
        } else {
            $settings = "";
            foreach($data as $key=>$value){
                $settings .= "".$key."='".$value."',"; 
            }
            $settings = substr($settings, 0, -1);
            $query = "UPDATE  $table_name SET $settings Where $conditions";
            //return $query; exit;
            $query_result = mysqli_query($this->db_conn, $query);

            if($query_result == 1){
                return true;
            }  // returns 1 if the query was executed successfully
            else{
                return json_encode(mysqli_error($this->db_conn));
            }
        }
    }

    public function getDataFromTable(string $table_name, array $table_columns=[], array $column_values = [],$logical_operation = "and")
    {
        //return 'hello';
        // check if given table exists in the database
        $table_exists = mysqli_query($this->db_conn, "SELECT 1 FROM $table_name");
        if (!$table_exists) {
            return('Table doest Not Exist. Please Check The table name');
        } else {
            $table_cols = implode($table_columns,",");
            $table_vals = "'".implode($column_values,"','")."'"; 
            $condition = "";

            //check if table columns and column values are passed but not equal in size
            if($table_columns != [] && $column_values != []){
                if(count($table_columns) != count($column_values)){
                    return "Number of column values passed should be equal to number of table columns. ERROR: Line".__LINE__." ,FILE: ".__FILE__;
                    exit();
                }
            }
            
            //if only table name is passed
            if($table_columns == [] && $column_values == [])
            {
                $query = "SELECT * FROM $table_name";
            }

            //if table name and table column is passed
            elseif($table_columns !=[] && $column_values == []){
                  $required_columns = implode($table_columns,",");
                  $query = "SELECT ".$required_columns." FROM ".$table_name;
                  //return $query;
            }
            //if table name , table column and the column values are passed
            else{
                for($i=0; $i<count($table_columns);$i++){
                    $condition .= $table_columns[$i].' = '.'"'.$column_values[$i].'"';
                    
                    if($i < count($table_columns) - 1){
                        $condition .= " $logical_operation ";
                    }
                        
                }
                $query = "SELECT * FROM $table_name WHERE ".$condition;
                //return $query;
            }
           
           $response= [];
           $query_result = mysqli_query($this->db_conn, $query);
           if (mysqli_num_rows($query_result) > 0) {
            
            while($row = mysqli_fetch_assoc($query_result)) {
                 $response[] = $row;
                }         
            }

           return $response;  // returns 1 if the query was executed successfully
        }
    }
}

?>