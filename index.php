        <?php
        $people = '{"data":[{"first_name":"jake","last_name":"bennett","age":31,"email":"jake@bennett.com","secret":"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="}'
                . ',{"first_name":"jordon","last_name":"brill","age":85,"email": "jordon@brill.com","secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu"}]}';

     

  $result = json_decode($people, true);
  $peopleArray = $result["data"];      
 
 
  $peopleEmails = array();
  for ($index = 0; $index < count($peopleArray); $index++) {
    $peopleEmails[] = $peopleArray[$index]['email'];       
}

$peopleEmailWithComma = implode(' , ', $peopleEmails); // the first variable containing the emails of the people array with commas


echo $peopleEmailWithComma . "<br>"; //outputs the emails of the people array with comma

rsort($peopleArray);



 for ($index = 0; $index < count($peopleArray); $index++) {
     $peopleArray[$index]['name']  = $peopleArray[$index]['first_name']. " ". $peopleArray[$index]['last_name'] ;    
}

$peopleArraySorted = $peopleArray;    // second variable containing people array sorted in descending order and the extra name field added

print_r($peopleArraySorted);   //outputs the people array sorted in descending order

        ?>
 