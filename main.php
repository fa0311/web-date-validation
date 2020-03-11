function date_validation($date){
    return preg_match("/^[0-9]{4}-(1[0-9]|0[1-9])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date); 
    }
