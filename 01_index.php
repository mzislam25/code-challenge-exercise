<?php
class TaskOne extends ArrayObject{
    
    function __set($name, $val) {
        $this[$name] = $val;
    }

    public function displayAsTable() {
        $data = $this;
        // echo json_encode($data);
        $html = '<table>';
        foreach($data as $key => $value){
            $html.='<tr><th>'.$key.'</th><td>'.$value.'</td></tr>';    
        }
        $html.= '</table>';
        return $html;
    } 
}

$object = new TaskOne();    
$object->Name = 'John Doe'; 
$object->Age = 27;
$object->Sex = 'Male';
$object->Address = 'Dhaka, Bangladesh';

echo $object->displayAsTable();

?>