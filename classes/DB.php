<?php

    define('MYSQL_NAME', 'root');
    define('MYSQL_PASS', 'aqswde');
    define('MYSQL_SERVER', 'localhost');
    define('MYSQL_DB', 'restaurants');

	class DB {
	
		private static $instance = null;
		
		
                private function __construct() {
			
		}
		
		
                private function __clone() {
		
		}
		
		
                public static function getInstance() {
			
			if(self::$instance === null) {
				self::$instance = new self(); 
				self::$instance->connect();
			}
			
			return self::$instance;
			
		}

                
                public function connect() {
			
			if(!mysql_connect(MYSQL_SERVER, MYSQL_NAME, MYSQL_PASS)) {
                            throw new DBException("Connection error");
			}
			if(!mysql_select_db(MYSQL_DB)) {
                            throw new DBException("Select db error");
			}
					
		}
                
                
                protected function query($query) {
                    
                    $_query = $query;
                    $res = mysql_query($query);
                    $this->checkResult($res);
                    return $res;
                    
                }
                
                
                private function checkResult($res) {               
                    
                    if(!$res) {
                        throw new DBException("Invalid query: "+  mysql_error());
                    }
                    
                }
                
                
                protected function getColumns($table) {
                    
                    $fields = mysql_list_fields(MYSQL_DB, $table);
                    $num = mysql_num_fields($fields);
                    $res = Array();
                    for($i = 0; $i < $num; $i++) {           
                        $res[$i] = mysql_field_name($fields, $i);
                    }
                    
                    return $res;
                    
                }
                
               
                public function getMenu($restaurant_id) {
                    
                     $query = "SELECT * FROM meals_{$restaurant_id}";
                    $res = $this->query(query);
                     return $res;	
                        
                }
		
		
                public function getMeal($restaurant_id, $id)	{

                    $query = "SELECT * FROM meals_{$restaurant_id} WHERE id='{$id}'";
                    $res = $this->query($query);
                    return $res;

                }


                public function getClientBase($rest_id) {

                    $query = "SELECT * FROM clients_{$rest_id}";
                    $res = $this->query($query);
                    return $res;

                }


                public function getClientInfo($rest_id, $client_id) {

                    $query = "SELECT * FROM clients_{$rest_id} WHERE id='{$client_id}'";
                    $res  = $this->query($query);
                    return $res;

                }


                public function getOrders($rest_id) {

                    $query = "SELECT * FROM orders_{$rest_id}";
                    $res = $this->query($query);
                    return $res;

                }


                public function getOrdersHistory($rest_id) {

                    $query = "SELECT * FROM orders_history_{$rest_id}";
                    $res = $this->query($query);
                    return $res; 

                }


                public function getOrder($rest_id, $order_id) {

                    $query = "SELECT * FROM orders{$rest_id} WHERE id='{$order_id}'";
                    $res = $this->query($query);
                    return $res;

                }


                public function getOrderFromHistory($rest_id, $order_id) {

                    $query = "SELECT * FROM orders_history_{$order_id} WHERE id='{$order_id}'";
                    $res = $this->query($query);
                    return $res;

                }


                public function getTables($rest_id) {

                    $query = "SELECT * FROM tables_{$rest_id}";
                    $res = $this->query($query);
                    return $res;

                }


                public function getReservations($rest_id) {

                    $query = "SELECT * FROM reservations_{$rest_id}";
                    $res = $this->query($query);
                    return $res;

                }


                public function canselOrder($rest_id, $order_id) {

                    $query = "UPDATE orders_{$rest_id} WHERE id='{$order_id}' SET canselled=`1`;";
                    $query .= "INSERT INTO orders_history_{$rest_id} SELECT FROM orders_{$rest_id} WHERE id='{$order_id};";
                    $query .= "DELETE FROM orders_{$rest_id} WHERE id='{$order_id}'";
                    $res = $this->query($query);

                } 



                public function applyOrder($rest_id, $order_id) {

                    $query = "UPDATE orders_{$rest_id} WHERE id='{$order_id}' SET applied=1";
                    $res  = $this->query($query);
                    return $res;

                }


                public function updateRestaurantInfo($rest_id, $info) {

                    $query = "UPDATE restaurants WHERE id='{$rest_id}' SET ";

                    $count  = count($info);
                    $k = 1;
                    foreach ($info as $key => $value) {
                        $query .= "{$key}=`{$value}`";
                        if($k < $count) {
                            $query .= ",";
                        }
                        $k++;
                    }

                    $this->query($query);

                }
                
                
                
        }

?>