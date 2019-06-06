<!DOCTYPE html>
<html>
<head>
    <title></title>
<style>
body {
  font-size: 18px;
  background-color: black;
  color: white;
}

.header ul {
  list-style-type: none;
  margin: 0;
  padding: 4px;
  overflow: hidden;
  background-color: black;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
  color: white;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 5px 16px;
  text-decoration: none;
}

/*li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}*/
#div2 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15.5%;
  background-color: black;
  color: white;
  position: fixed;
  height: 100%;
  overflow: auto;
  margin-top: 50px;
}
#section {
    margin-left: 16%;
    height: 1000px;
    background-image: url("3d9.jpg");
    color: white;
}
</style>
</head>
<body>
    <!--<div class="header">
        <h2>Scroll Down</h2>
        <p>Scroll down to see the sticky effect.</p>
    </div>-->
    <div class="header">
        <ul>
            <li>NEVGAS</li>
            <li style="float: right;"><a href="#">Welcome Owner</a></li>
        </ul>
    <div><br>
    <div id="div2">
        <ul>
            <li><a class="active" href="#home">Dashbord</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Purchases</a></li>
            <li><a href="#">Sales</a></li>
            <li><a href="#">Accounting</a><li>
        </ul> 
    </div>
    <div id="section">
        <h2>welcome</h2>
    </div>       
   
</body>
</html>