<!DOCTYPE html>
    <html lang="en">
   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


        <script src="https://kit.fontawesome.com/1c71e95d0d.js" crossorigin="anonymous"></script>
		



        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <!-- <link rel="stylesheet" href="../assets/css/style2.scss"> -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
        
        <!-- Custom Css -->
        <style>
            
.switch-button {
	position: relative;
	height: 3rem;
	background:#ececec;
	overflow: hidden;
	dispLay: flex;
	align-items : center;
	border-radius : 4rem;
	cursor: pointer;
}

.switch-button:before {
	content: "";
	position: absolute;
	Left:-50%;
	top:-100%;
	height: 300%;
	width: 100%;
	background:linear-gradient(to top right,#702F4E,#164373);
	border-radius: 50%;
	transition: 0.25s;
}

.switch-item
{
	position: relative;
	padding:3rem;
	color:#555;
	font-weight: 600;
	transition: 0.3s;


}
.switch-item:first-child
{
	color:#FFF;

}

.switch-button.switch-active .switch-item:first-child
{
	color: #555;
}

.switch-button.switch-active .switch-item:last-child
{
	color: #FFF;
}

.switch-button.switch-active:before
{
	left: 50%;
	background:linear-gradient(to top right,#F64373,#164373);

}



        </style>

        <title> Responsive portfolio website Ansel </title>
    </head>

    <!-- Header -->
    <body>

        
        <!-- progress  -->
        <div id="progress">
            <span id="progress-value">&#x1F815</span>
        </div>