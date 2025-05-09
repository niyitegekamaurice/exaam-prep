<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body{
			width: 100%;
			height: 100%;
		}
		h1{
			background-color: black;
			font-size: 40px;
			height: 100px;
			color: white;
			text-align: center;

		}
		 a{
			color: burlywood 200;
			border: none solid gray;
			text-decoration: none;
			font-size: 50px;
		} 
		a:hover{
			color: whitesmoke;
			border: 2px solid black;
			text-decoration: none;
			font-size: 50px;
			border-radius: 14px;
			background-color: burlywood;
		} 
		 .logout{
			border: 10px solid darkcyan;
			width: 200px;
			color: aliceblue; 
			margin-left: 85%;
			margin-top: -60px;
			font-size: 60px;
		 } 
		.footer{
			background-color: cyan;
			text-align: center;
			margin-top: 59.9vh;
			background-color: black;
			font-size: 60px;
			height: 90px;
			color: white;
			text-align: center;
		}
		.footer marquee h2{
			color: chartreuse;
			font-weight: 20px;
			font-size: 30px;
		}
		 .report {
  font-family: Arial, sans-serif;
  font-size: 30px;
  margin-left: 60%;
  width: 250px;
  margin-top: -40px;
}

.dropdown {
  position: relative;
  display: inline-block;
  cursor: pointer;
  padding: 5px;
  background-color: #3498db;
  color: white;
  border-radius: 4px;
}

.dropdown:hover {
  background-color: #2980b9;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  /* width: 200px; */
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
  z-index: 1;
  border-radius: 4px;
}

.dropdown-content a {
  color: black;
  text-decoration: none;
  display: block;
  border-bottom: 1px solid gray;
  width: fit-content;
}

.dropdown-content a:hover {
  background-color: mediumseagreen;
  height: 70px;
}

.dropdown:hover .dropdown-content {
  display: block;
  height: 100px;
}

	</style>
</head>
<body>
<h1>welcome to berwashop platform</h1>
<div class="links">
<a href="product1.php">product</a>&nbsp;&nbsp;
<a href="productin_form.php">productin</a>&nbsp;&nbsp;
<a href="productoutselect.php">productout</a>&nbsp;&nbsp;
<div class="report">
  <span class="dropdown">Select Report
    <div class="dropdown-content">
      <a href="generalreport.php">General_Report</a>
	  <a href="periodicreport.php">report of productin</a>
	  <a href="periodicreportout.php">report_of_productout</a>
    </div>
  </span>
</div>
</div>
<div class="logout">
<a href="logout.php">logout</a>
</div>
<div class="footer">
	 <marquee><h2>implementation of crud operation</h2></marquee>
</div>
</body>
</html>