<?php
class ArrayConvert{
    
    
    
    public function convert ($anydata){
        
        $result = array();
        
        foreach ($anydata as $key => $value) {
            preg_match_all('/\w+/', $key, $matches);
            if (array_key_exists($matches[0][0], $result)) {
                if (array_key_exists($matches[0][1], $result[$matches[0][0]])) {
                    $result[$matches[0][0]][$matches[0][1]][$matches[0][2]] = $value;
                    
                } else {
                    $result[$matches[0][0]][$matches[0][1]] = [$matches[0][2] => $value];
                }
            } else {
                $result[$matches[0][0]] = [$matches[0][1] => [$matches[0][2] => $value]];
            }
            
        }
        
       
            
        return $result;
    }
    
    public function convert2 ($anydata){
        
        $result = array();
        foreach ($anydata as $key => $value) {
            $newkey = $key;
            foreach ($value as $key1 => $value1) {
                $newkey1 = $newkey . '.' . $key1;
                foreach($value1 as $key2 => $value2) {
                    $newkey2 = $newkey1 . '.' . $key2;
                    $result[$newkey2] = $value2;
                }
            }
        }
        return $result;
        
    }
    
} 
    $data1 = [
                'parent.child.field' => 1,
                'parent.child.field2' => 2,
                'parent2.child.name' => 'test',
                'parent2.child2.name' => 'test',
                'parent2.child2.position' => 10,
                'parent3.child3.position' => 10,
            ];
    $data = [
            'parent' => [
                'child' => [
                    'field' => 1,
                    'field2' => 2,
                ]
            ],
            'parent2' => [
                'child' => [
                    'name' => 'test'
                ],
                'child2' => [
                    'name' => 'test',
                    'position' => 10
                ]
            ],
            'parent3' => [
                'child3' => [
                    'position' => 10
                ]
            ],
        ];
 $MyArrayConvert = new ArrayConvert();
 echo json_encode($MyArrayConvert->convert($data1)), '<br/>';
 echo json_encode($MyArrayConvert->convert2($data));

  

?>