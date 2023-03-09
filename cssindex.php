<style>

									/*------------------ A C C U E I L -------------------*/
.section1{
	background-color: #0D0D0D;
	padding: 10px 20px 10px 20px;
	border: none;
	height: 75px;
	width: 100%;
	/* background-image: url('dot.png'); */
	background-size: cover;
	position: fixed;
	top: 0;
	z-index: 999 !important;
	box-shadow: 0px 0px 8px 0px;
	display: flex;
	flex-direction: column;
}


.titreh1{
	margin: 0px;
	color: white;
	text-align: center;
	padding: 8px;
	
}
.texttitreh1{
	padding: 0px 0px 20px 0px;
	margin: 0px;
	border: none;
	text-decoration: none;
	color: white;
	font: small-caps bold 34px/1 sans-serif;
}
.menu{
	border: none;
	margin: 0px;

	text-align: center;
	min-width: 100%;
	min-height: 50px;
	display:flex;
	justify-content: center;
	align-items: start;
	overflow: visible;
}

.pagemenu{
	border: none;
	text-decoration: none;
	color: black;
	border-radius: 5px;
	background-color: #FFE300;
	height: 30px;
	width:100px;
	padding:2px;
	margin: 0px 10px;	
}

.pagemenu:hover{
	transform: scale(1.01);
	background-color: #FFF17B;
	box-shadow: 0 0 5px black;
	transition-duration: 0.3s;
	transition-property: box-shadow;
	
}

.section2{
	background-color: white;
	margin: 0px;
	border: none;
	height: auto;
	width: auto;
	padding: 5px 100px
	
}


									/*------------------ P A G E   B T S -------------------*/

.bts2{
	margin: 10px 200px;
	padding: 0px;
	display: flex;
	flex-direction: row;
	height: 200px;
	width: 100%;
	background-color: lightgrey;
	border: 20px;
	border-radius: 20px;
}
.conteneurbts1bis{	
	background-color: white;
	margin: 10px 200px;
	padding: 0px;
	border: 0px;
	min-width: 600px;
	max-width: 900px;
	text-align: center;
	display: inline-block;
	justify-content: center; 
}

.conteneurbts1{
	margin: 30px 200px;
	padding: 0px;
	height: auto;
	width: auto;
	min-width: 600px;
	display: flex;
	display: flex;
	flex direction: row;
	justify-content:center;
	flex-wrap:wrap;
	border: 10px;
	border-radius: 20px;
}
.text{
	font: 20px/1 sans-serif;
	margin: 40px;
	text-align: justify;
	display: flex;
	flex-direction: row;
}

.conteneurbts2{
	margin: 10px;
	padding: 0px;
	height: auto;
	min-width: 600px;
	max-width: 650px;
	background-color: #EDEDED;
	border: 10px;
	border-radius: 20px;
}


									/*------------------ P A G E   P R O J E T -------------------*/


.projet2{
	background-color: white;
	margin: 10px 200px;
	padding: 0px;
	border: 0px;
	text-align: center;
	display: flex;
	flex-direction: row;
	justify-content: left; 
	overflow-x: scroll;
}

.projet2::-webkit-scrollbar{ 
	max-height: 8px;
	scrollbar-width: 20%;  
}

.projet2::-webkit-scrollbar-track{
  background: none;        
}

.projet2::-webkit-scrollbar-thumb{
  background-color: lightgrey;    
  border-radius: 20px;       
  border: none;  
  height: thin;
}

.conteneur_doc:hover{
	display: flex;
	transform: scale(1.01);
	box-shadow: 0 0 5px black;
	transition-duration: 0.3s;
	transition-property: box-shadow;
	transition: transform 0.3s;
}
.conteneur_doc{
	margin: 0px;
	border: none;
	border-radius: 10px 10px 10px 10px;
	box-shadow: 0 0 1px black;
	height: 200px;
	width: 200px;
	margin: 10px;
	background-image: url('capture.png');
	background-size: cover;
	display: flex;
	flex-direction: column-reverse;
	min-width: 200px;
	max-width: 200px;
	text-decoration: none;
}
.documents{
	margin: 0px;
	border: none;
	text-decoration: none;
	color: white;
	border-radius: 0px 0px 5px 5px;
	background-color: black;
	padding: 5px;
	font: 17px/1 sans-serif;;
	
	
	
}

	

									/*------------------ G E N E R A L -------------------*/
.headkill{
	margin: 0px;
	margin-top: 150px;
	padding: 0px;
}

.bouton{
	border: none;
	text-decoration: none;
	color: white;
	border-radius: 5px;
	background-color: grey;
	padding: 10px 15px;
	margin: 10px 15px;
}

.titre{
	margin: 0px;
	padding: 0px;	
}
.titrepage{
	padding: 0px;
	margin: 20px;
	border: none;
	text-decoration: none;
	color: black;
	font: small-caps bold 30px/1 sans-serif;
	background-color: #white;
}
.inter_titre{
	margin: 20px 250px ;
	padding: 0px;
	color: black;
	border-bottom: 1px solid black;
	padding: 10px;
	font: small-caps bold 30px/1 sans-serif;
}
body{
	margin: 0px;
	text-align: center;
}
ul{
    list-style:none;      
}
li{
	list-style:none ;
	
}
.footer{
	margin:0px;
	padding:0px;
	background-color:#0D0D0D;
	display: flex;
	width: 100%;
	height: 200px;
	flex-direction: row;
	align-items: center;
	justify-content: center;
	position: relative !important;
	bottom:0;
}
.container{
	margin: 10px ;
	margin-top: 50px;
	margin-bottom: 100px;
	justify-content: center;
	text-align: center;
}



									/*------------------ T A B L E A U -------------------*/

.tabl {
	border-collapse: collapse;
	width: 1900px;
	box-shadow: 0 5px 50px rgba(0,0,0,0,.15);
	cursor: pointer;
	margin: 100px auto ;
	border: 2px solid #0D0D0D;
	overflow-x: scroll;
	font-family: sans-serif;
	
}




caption {
background-color: #0D0D0D;
color: white;
font-size: 30px;
padding: 15px;
}

thead {
background-color: #242424;
color: white;
text-align: center; 
}

.za {
 -webkit-transform: rotate(-90deg);
 text-align: left;
 font-weight: 600;
 font-size: 14px;
}

td {
padding: 15px 20px;
}

tbody tr, td{
border: 1px solid #ddd;
text-align: center;
}

th {
border: 1px solid #0D0D0D;
}

tbody tr:nth-child(even){
background-color: #f3f3f3;
}

.coche {
font-size: 20px;
font-family: sans-serif;
font-weight: 700;
color: #242424;
padding: 5px;
}

.titre {
	font-size: 14px;
	font-family: sans-serif;
	font-weight: 600;
	text-transform: uppercase;	
	border-radius: 3px;
	color: #242424;
	padding: 5px;
	text-decoration: none;
	width: 90%;
	transition: 1s;
	background-color: #E8E8E8;
}
.treti {
	background-color: #E8E8E8;
}
.titre:hover {
	background-color: #242424; 
	color: #E8E8E8;
	border-radius: 3px;
	width: 90%;
}

.page {
	padding : 5px 15px;
	border: solid 1px #242424;
	
	background-color: #232323;
	font-family: sans-serif;
	font-weight: 600;
	text-transform: uppercase;
	color: #E8E8E8;
	border-radius: 3px;
	width: 20%;
	transition: width 0.4s ease-in-out;
}
.page:hover {
	width: 25%;
	
	
}



</style>