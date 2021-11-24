<?php

require('../settings/connection.php');

// inherit the methods from Connection
class customer extends Connection{


	function add_customer($name, $email, $password,$country,$city,$contact,$image,$role){
		// return true or false
		return $this->query("insert into customer(customer_name,customer_email, customer_pass,customer_country, customer_city, customer_contact, customer_image, user_role) 
        values('$name', '$email', '$password','$country','$city','$contact','$image','$role')");
	}

	function delete_one_customer($id){
		// return true or false
		return $this->query("delete from customers where customer_id = '$id'");
	}

	function update_one_customer($id,$name, $email, $password,$country,$city,$contact,$image,$role){
		// return true or false
		return $this->query("update customers set customer_name='$name', customer_email='$email', customer_pass='$password' 
        customer_country='$country', customer_city='$city', customer_contact='$contact', customer_image='$image' 
        where customer_id = '$id'");
	}

	function select_all_customers(){
		// return array or false
		return $this->fetch("select * from customer");
	}

	function select_one_customer($email){
		// return associative array or false
		return $this->fetchOne("select * from customer where customer_email='$email'");
	}

}

?>