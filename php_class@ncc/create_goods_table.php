<?php require 'db_connection.php' ?>

<?php 
$create="create table goods(
    id int auto_increment primary key,
    goods_name varchar(100) not null,
    price int not null,
    count_in_stock int not null,
    description text not null,
    manufacture_date date not null,
    expiry_date date not null,
    category_id int ,
    rating int,
    foreign key(category_id) references category(id)
)";

if(mysqli_query($con,$create)){
    echo 'goods table created';
}
else{
    echo 'failed to create goods table';
}
?>