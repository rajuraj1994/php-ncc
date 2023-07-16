<?php 
require 'database/database_connection.php';

$query1="Insert into pitch_info( pitch_name, location, description, image, price, pitch_type)
values 
('Banff Adventure', 'Banff National Park, Alberta, Canada','This type of caravan is like a regular caravan, but it has a roof that can be raised to give more space and airflow.Easy to set up and durable,its perfect for outdoor adventures with family and friends','1.jpg',2000,'Pop-top Caravan') ,

('Queensland Site','Great Barrier Reef, Queensland, Australia','This is a small, lightweight caravan that has a distinctive teardrop shape. It typically has a small kitchen and sleeping area but doesnot have a bathroom or other amenities.','2.jpg',1500,'Teardrop Caravan'),

('Mara Rafting Site',' Masai Mara National Reserve, Kenya','This type of tent is designed to be set up quickly and easily, with a pre-assembled frame that pops up into shape. Its great for casual camping trips or festivals.','3.jpg',3000,'Pop-up Tent'),

('Norway Camping and Swimming','Jotunheimen National Park, Norway','This type of tent is shaped like a cone or pyramid, with a single central pole and a circular base. Its easy to set up, spacious and offers good ventilation.','4.jpg',3500,'Teepee Tent'),

('Torres del camping ','Torres del Paine National Park, Chile','This is a small, lightweight caravan that has a distinctive teardrop shape. It typically has a small kitchen and sleeping area but doesnot have a bathroom or other amenities.','5.jpg',4000,'Teardrop Caravan'),

('Yosemite Site','Yosemite National Park, California, USA','This is a large, heavy caravan that is designed to be towed by a pickup truck. It features a raised section that extends over the bed of the truck and provides extra living space.','6.jpg',5000,'Fifth Wheel Caravan'),
    
('Lake District Adventure','Lake District National Park, Cumbria, England','This is the most common type of tent and features a dome-shaped structure supported by flexible poles. Its easy to set up, lightweight, and offers good headroom.','7.jpg',1700,'Dome Tent'),

('Amalfi Coast Camping Site','Amalfi Coast, Italy','This is a rugged, heavy-duty caravan that is designed to handle rough terrain and off-road conditions. It typically has reinforced suspension, heavy-duty tires, and a sturdy chassis.','8.jpg',2700,'Motor home')
";
if(mysqli_query($con,$query1)){
    echo 'successfully added pitch information';
}
else{
    echo 'something went wrong while adding pitch information';
}

?>