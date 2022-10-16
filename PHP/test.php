<?php
    $id = 1;
    $name = "Nabil";
    $cgpa = 3.50;
    $email = "20-42095-1@student.aiub.edu";

    $students=
    [
        's1'=>['id'=>1, 'name'=>"Nabil", 'role'=>"Programmer", 'Dept'=>"CSE", 'CGPA'=>3.5],
        's2'=>['id'=>2, 'name'=>"Sakib", 'role'=>"Student", 'Dept'=>"EEE", 'CGPA'=>4.00],
        's3'=>['id'=>3, 'name'=>"Jim", 'role'=>"Event Managaer", 'Dept'=>"SE", 'CGPA'=>2.5]
    ];
    //    echo $students['s3']['role']." X";

    /*
    if("10"===10)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
    */
    for($i=0;$i<=10;$i++)
    {
        echo "Here This line will print 11 times in console and each time a new line will be created \r\n";
    }
    

?>