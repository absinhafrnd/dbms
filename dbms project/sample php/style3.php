body{
	background:url('img2.jpg');
	background-size: cover;
	font-family:sans-serif;
	color: white; 
}
ul
{
	margin: 0;
	padding: 0;
	list-style: none;
}
ul li
{
	float:left;
width: 190px;
height:40px;
background-color: black;
opacity: .6;
line-height: 40px;
text-align:center;
font-size:20px;
margin-right: 2px;

}

ul li a{
	text-decoration: none;
	color: white;
	display: block;

}
ul li a:hover {
	background-color:green;
}
ul li ul li{
	display: none;
}
ul li:hover ul li{
	display:block;
}
