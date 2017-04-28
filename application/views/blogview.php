<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Untitled Document</title>
</head>
<table border="1">
 <tbody>
 <tr>
  <td>Name</td>
  <td>Price</td>
  <td>Image Name</td>
  <td>Id</td>
 </tr>
 <?php
 foreach ($h->result() as $row)
 {
  ?><tr>
  <td><?php echo $row->name;?></td>
  <td><?php echo $row->price;?></td>
  <td><?php echo $row->image;?></td>
  <td><?php echo $row->id;?></td>
  </tr>
 <?php }
 ?>
 </tbody>
</table>
<body>
</body>
</html>