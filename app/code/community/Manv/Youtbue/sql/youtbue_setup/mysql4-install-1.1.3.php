<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table {$this->getTable('manvvideogallery')} (id int not null auto_increment, title varchar(255), url varchar(255),description varchar(255),status varchar(255),primary key(id));

insert into {$this->getTable('manvvideogallery')} (`title`,`url`,`description`,`status`) VALUES 
('Youtube Video gallery  1','https://www.youtube.com/watch?v=dnzLxT8TCvA','www.google.com','0'), 
('Youtube Video gallery  2','https://www.youtube.com/watch?v=x8F5dz8kv1w','www.google.com','0'),
('Youtube Video gallery  3','https://www.youtube.com/watch?v=XNMMrbHMiNM','www.google.com','0'),
('Youtube Video gallery  4','https://www.youtube.com/watch?v=dnzLxT8TCvA','www.google.com','0'), 
('Youtube Video gallery  5','https://www.youtube.com/watch?v=x8F5dz8kv1w','www.google.com','0'),
('Youtube Video gallery  6','https://www.youtube.com/watch?v=XNMMrbHMiNM','www.google.com','0'),
('Youtube Video gallery  7','https://www.youtube.com/watch?v=dnzLxT8TCvA','www.google.com','0'), 
('Youtube Video gallery  8','https://www.youtube.com/watch?v=x8F5dz8kv1w','www.google.com','0'),
('Youtube Video gallery  9','https://www.youtube.com/watch?v=XNMMrbHMiNM','www.google.com','0'),
('Youtube Video gallery  10','https://www.youtube.com/watch?v=dnzLxT8TCvA','www.google.com','0'), 
('Youtube Video gallery  11','https://www.youtube.com/watch?v=x8F5dz8kv1w','www.google.com','0'),
('Youtube Video gallery  12','https://www.youtube.com/watch?v=XNMMrbHMiNM','www.google.com','0'),
('Youtube Video gallery  13','https://www.youtube.com/watch?v=dnzLxT8TCvA','www.google.com','0'), 
('Youtube Video gallery  14','https://www.youtube.com/watch?v=x8F5dz8kv1w','www.google.com','0'),
('Youtube Video gallery  15','https://www.youtube.com/watch?v=XNMMrbHMiNM','www.google.com','0'),
('Youtube Video gallery  16','https://www.youtube.com/watch?v=dnzLxT8TCvA','www.google.com','0'), 
('Youtube Video gallery  17','https://www.youtube.com/watch?v=x8F5dz8kv1w','www.google.com','0'),
('Youtube Video gallery  18','https://www.youtube.com/watch?v=XNMMrbHMiNM','www.google.com','0'),
('Youtube Video gallery  19','https://www.youtube.com/watch?v=dnzLxT8TCvA','www.google.com','0'), 
('Youtube Video gallery  20','https://www.youtube.com/watch?v=x8F5dz8kv1w','www.google.com','0'),
('Youtube Video gallery  21','https://www.youtube.com/watch?v=XNMMrbHMiNM','www.google.com','0');

SQLTEXT;

$installer->run($sql);
//demo 
Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 
