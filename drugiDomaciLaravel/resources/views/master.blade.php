<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel project</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}


    <script src="{{asset('/discount.js')}}"></script>
</body>
<style>
.aboveBar {
    background-color: #1d1b1b;
    color: white;
    text-transform: uppercase;
    text-align: center;
    font-family: sans-serif;
    letter-spacing: 2px;
    height: 30px;
    padding-top: 7px;
    position: sticky;
    top: 0;
    z-index: 10;
}









.cover {
    height: 70vh;
    background-image: url(/images-videos/cover.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: white;
    text-align: center;
}

.cover h1 {
    padding: 25vh 0 60px 0;
    font-size: 50px;
    text-shadow: 2px 2px black;
}


.brends {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 70px;
    margin-bottom: 70px;
    width: 90%;
    margin-left: 80px;
}

.brends img {
    max-width: 150px;
    max-height: 80px;
    transform-origin: center;
    transform: perspective(800px) rotateY(20deg);
    transition: 0.5s;
    -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, #0004);
}

.brends:hover img {
    opacity: 0.1;
}

.brends img:hover {
    transform: perspective(100px) rotateY(20deg);
    opacity: 1;
}






.heading1 {
    margin-top: 70px;
    margin-bottom: 30px;
    margin-left: 75px;
}



.discount {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    text-align: center;
    flex-flow: wrap;
    background-color: #1d1b1b;
    margin-bottom: 60px;
}

.video {
    flex: 1;
    margin-left: 30px;
    margin-right: 10px;
    margin-top: 35px;
}

.video video {
    display: block;
    margin: 2em auto;
    width: 100%;
    max-width: 720;
    max-height: 480px;
    min-width: 360px;
    min-height: 360px;

}



.rightSide {
    flex: 1;
    margin-left: 10px;
}

.tajmer {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.tajmer h1 {
    display: block;
    color: white;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.rightSide .text {
    padding-top: 50px;
    color: white;
    font-size: 20px;
}

.rightSide .text p {
    text-align: justify;
    padding: 0 100px;
}

.rightSide .text a {
    color: black;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 15px;
    border: 3px solid #ff0;
    line-height: 40px;
    width: 150px;
    background-color: #ff0;
    text-align: center;
    border-radius: 10px;
    font-weight: bold;
    text-transform: none;
    display: block;
    margin: 0 auto;
    margin-top: 40px;
    margin-bottom: 20px;
    text-transform: uppercase;

}

.rightSide .text a:hover {
    transform: scale(1.1);

}

.countdown {
    display: flex;
    margin-top: 50px;
}

.countdown div {
    width: 100px;
    position: relative;
    height: 100px;
    line-height: 100px;
    text-align: center;
    background: #333;
    color: #fff;
    margin: 0 15px;
    font-size: 3em;
    font-weight: 500;
}

.countdown div:before {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 30px;
    background: #ff0;
    color: #333;
    font-size: 0.35em;
    line-height: 35px;
    font-weight: 300;
}

.countdown #day:before {
    content: 'Days';
}

.countdown #hour:before {
    content: 'Hours';
}

.countdown #minute:before {
    content: 'Minutes';
}

.countdown #second:before {
    content: 'Seconds';
}


.countdown div:hover {
    transform: scale(1.05);
    box-shadow: 0 0 40px -10px rgba(224, 221, 45, 0.815);
}

@media only screen and (max-width:500px) {
    .countdown {
        flex-direction: column;
    }
}






.trendingNow {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    margin: 0 auto;
}

.trendingNow div {
    width: 30%;
}

.trendingNow .picture1 {
    /* flex: 1; */
    padding-left: 50px;
}

.trendingNow .picture2 {
    /* flex: 1; */
    padding-left: 50px;
}

.trendingNow .picture3 {
    /* flex: 1; */
    padding-left: 50px;
}

.trendingNow img {
    width: 500px;
    height: 700px;
}

.trendingNow .picture3 img {
    width: 350px;
}

.trendingNow p {
    color: white;
    margin-top: -200px;
    margin-left: 20px;
    font-size: 25px;
    font-family: sans-serif;
    text-shadow: 2px 2px black;
    letter-spacing: 1px;
}

.trendingNow .buttons ul {
    display: flex;
    margin-top: 20px;
    text-decoration: none;
}

.trendingNow .buttons ul li {
    display: flex;
    margin-right: 10px;

}

.trendingNow .buttons ul li a {
    color: black;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 15px;
    border: 3px solid rgba(224, 221, 45, 0.815);
    line-height: 40px;
    width: 80px;
    background-color: white;
    text-align: center;
    border-radius: 10px;
    font-weight: bold;
    text-transform: none;
    margin-bottom: 100px;
}

.trendingNow .buttons ul li a:hover {
    background-color: rgba(224, 221, 45, 0.815);
}

.trendingNow .buttons ul li:hover {
    transform: scale(1.2);

}

@media only screen and (max-width: 700px) {
    .trendingNow {
        width: 100%;
        height: auto;
        flex-direction: column;
    }

    .trendingNow .picture1 img {
        width: 350px;
        height: 500px;
    }


    .trendingNow .picture2 img {
        width: 350px;
        height: 500px;
    }

    .trendingNow .picture3 {
        width: 350px;
        padding-left: 25px;
    }

    .trendingNow .picture3 img {
        width: 350px;
    }
}



.uefaBall {
    display: flex;
    justify-content: center;
    margin-bottom: 50px;
}

.uefaBall img {
    height: 100px;
    margin-left: 2px;
    margin-right: 25px;
    margin-top: 70px;
}

.uefaBall img:hover {
    transform: scale(1.05);
}








.custom-login {
    height: 500px;
    padding-top: 100px;
}

img.slider-img {
    height: 400px !important;
}

.custom-product {
    height: 600px;
}

.slider-text {
    background-color: #35443585 !important;
}

.trending-image {
    height: 100px;
}

.trending-item {
    float: left;
    width: 20%;
}

.trending-wrapper {
    margin: 30px;
}

.detail-img {
    height: 200px;
}





.clothing1 {
    display: flex;
    justify-content: right;
    margin-top: 100px;
    margin-right: 150px;
}

.clothing1 img {
    height: 400px;
    width: 600px;
    margin: 10px;
    border-radius: 10px;
}

.clothing1 img:hover {
    opacity: .5;
    transition: 1s;
    color: black;
    transform: scale(1.05);
}

.clothing1 .prvaSlika {
    text-align: center;
    color: black;
    font-size: 40px;
}

.clothing1 .prvaSlika a {
    display: block;
    margin: 0 auto;
    color: #ff416c
}

.clothing1 .drugaSlika {
    text-align: center;
    color: black;
    font-size: 40px;
}

.clothing1 .drugaSlika a {
    display: block;
    margin: 0 auto;
    color: #ff416c;
}

.clothing2 {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;

}

.clothing2 img {
    height: 300px;
    width: 400px;
    margin: 10px;
    border-radius: 10px;
}

.clothing2 img:hover {
    opacity: .5;
    transition: 1s;
    color: black;
    transform: scale(1.05);
}

.clothing2 .prvaSlika {
    text-align: center;
    color: black;
    font-size: 40px;
}



.clothing2 .prvaSlika a {
    display: block;
    margin: 0 auto;
    color: #ff416c
}

.clothing2 .drugaSlika {
    text-align: center;
    color: black;
    font-size: 40px;

}

.clothing2 .drugaSlika a {
    display: block;
    margin: 0 auto;
    color: #ff416c
}

.clothing2 .trecaSlika {
    text-align: center;
    color: black;
    font-size: 40px;

}



.clothing2 .trecaSlika a {
    display: block;
    margin: 0 auto;
    color: #ff416c
}


.cart-list-devider {
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}


















/*FOOTER*/

.footer {
    background-color: #333;
    color: gray;
    height: 400px;
    position: relative;
    margin-top: 100px;
}

.footer .footer-content {
    height: 350px;
    display: flex;
}

.footer .footer-content .footer-section {
    flex: 1;
    padding: 25px;

}

.footer .footer-content h1,
h2 {
    color: white;
    padding-bottom: 15px;
}

.footer .footer-content .about h1 span {
    color: red;
}

.footer .footer-content .about p {
    padding-left: 20px;
    text-align: justify;
}

.footer .footer-content .about .contact span {
    display: block;
    font-size: 1.1em;
    margin-bottom: 8px;
    margin-left: 20px;
}

.footer .footer-content .about .socials a {
    border: 1px solid gray;
    width: 45px;
    height: 41px;
    padding-top: 5px;
    margin-right: 5px;
    text-align: center;
    display: inline-block;
    font-size: 1.3em;
    border-radius: 5px;
    color: gray;
    transition: all .3s;
}

.footer .footer-content .about .socials a:hover {
    border: 1px solid white;
    color: white;
    transition: all .3s;
}

.footer .footer-content .links ul a {
    display: block;
    margin-bottom: 10px;
    font-size: 1.2em;
    transition: all .3s;
    color: gray;
}



.footer .footer-content .links ul a:hover {
    color: white;
    padding-left: 15px;
    transition: all .3s;
}

.footer .footer-content .contact-form form {
    display: flex;
    flex-direction: column
}

.footer .footer-content .contact-form .contact-input {
    background: #272727;
    color: #bebdbd;
    margin-bottom: 10px;
    line-height: 1.5rem;
    padding: .7rem 1.2rem;
    resize: none;
    border: none;
}

.footer .footer-content .contact-form .contact-input:focus {
    background: #1a1a1a;
}

.footer .footer-content .contact-form form .btn-big {
    width: 100px;
    height: 50px;
    background-color: turquoise;
    border-radius: 7px;
}

.footer .footer-bottom {
    background: #343a40;
    color: #686868;
    height: 50px;
    width: 100%;
    text-align: center;
    left: 0px;
    padding-top: 20px;
    position: absolute;
    bottom: 0px;
    top: 100%;
}

@media only screen and (max-width: 934px) {
    .footer {
        height: auto;
    }

    .footer .footer-content {
        height: auto;
        flex-direction: column;
    }

    .footer .footer-content .contact-form {
        padding-bottom: 90px;
    }

    .footer .footer-content .contact-form form .btn-big {
        width: 100%;
    }



}
</style>

</html>