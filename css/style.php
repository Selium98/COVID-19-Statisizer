<style type="text/css">

html {
	scroll-behavior: smooth;
}
	
*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif;}

.nav_style{
	background-color: #a43bfe!important; 

}

.nav_style a{color: white;}

.nav-item a:hover{
	background-color: #8d1ced;
}


/***************main header **************************/

.main_header{
	height: 450px;
	width: 100%;
}

.rightside h1{
	font-size: 3rem;
}

.corona_ani img{
	animation: movecorona 3s linear infinite;
}

@keyframes movecorona{
	0% {transform: rotate(0); }
	100% {transform: rotate(360deg); }
}

.leftside img {animation : heartbeat 5s linear infinite;}

@keyframes heartbeat {
	0% {transform: scale( .75 ); }
	20% {transform: scale( 1 ); }
	40% {transform: scale( .75 ); }
	60% {transform: scale( 1 ); }
	80% {transform: scale( .75 ); }
	100% {transform: scale( 1 ); }

}

/***************corona update******************/

.corona_update{
	margin: 0 0 30px 0;
}

.corona_update h1 {color: #ff7675;}

.corona_update h2 {font-size: 2rem; text-align: center;}




/*************about*************************/

.sub_section{
	background-color: #fbfafd;
	color:black;
	text-align: justify; 
}

/******************** footer ********************/

.footer_style {
	background-color: #a43bfe!important;

	
}

.footer_style p {
	margin-bottom: 0;
	padding:30px;
}

/**********top scroll************/

#myBtn {
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}

#myBtn:hover {
	background: #060606;
}

.search_btn {
	font-family: "Lucida Console", Courier, monospace;
	color: black;
	font-weight: bold;
	 font-size: 1.875em;
}


/* Country table header */

.country {
	background-color: #7a4a91;
	color: white;
}

.totcon {
	background-color: #4dd7d8; 
}

.totrec {
	background-color: #26C281;
}

.totdea {
	background-color: #f36e23;
}

.newcon {
	background-color: #d1d130;
}

.newrec {
	background-color: #2ce66a;
}

.newdea {
	background-color: #ed13c5;
}

</style>