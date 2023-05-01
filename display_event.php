<?php                
//Database connection
$hostname = "localhost";
$username = "root";
$password = "";  
$database = "barangaywebsite";   
$con=mysqli_connect($hostname,$username,$password,$database);    
//Fetch all needed values
$display_query = "select id,lastName,firstName,message,date from booking";             
$results = mysqli_query($con,$display_query);   
$count = mysqli_num_rows($results);  
if($count>0) 
{
	$data_arr=array();
    $i=1;
	while($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC))
	{	
	$data_arr[$i]['id'] = $data_row['id'];
	$data_arr[$i]['message'] = $data_row['message'];
	$data_arr[$i]['lastName'] = $data_row['lastName'];
	$data_arr[$i]['firstName'] = $data_row['firstName'];
	$data_arr[$i]['date'] = date("Y-m-d", strtotime($data_row['date']));
	
	$data_arr[$i]['color'] = '#00ff00'; // 'green'; pass colour name

	$i++;
	}
	//Populate data
	$data = array(
                'status' => true,
                'msg' => 'successfully!',
				'data' => $data_arr
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Error!'				
            );
}
echo json_encode($data);
?>