<?php
// Magic constants
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';
// Create directory
mkdir("test");
// Rename directory
rename("test", "test1");
// Delete directory
rmdir("test1");
// Read files and folders inside directory
$files= scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';
// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt')."<br>";
echo file_put_contents('sampletest.txt','sample text txt!');
// file_get_contents from URL
$userinfo = file_get_contents("https://jsonplaceholder.typicode.com/users");
echo '<pre>';
echo $userinfo;
echo '</pre>';

$userJson = json_decode($userinfo,true);
echo '<pre>';
echo $userJson;
echo '</pre>';
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists('lorem.txt');
echo is_dir('11_fs');
// is_dir
// filemtime
// filesize
// disk_free_space
// file