<head>
    <meta charset="utf-8">
    <meta http-equiv="X=UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>sample project</title>
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        body{
        padding-top:50px;
        background-color:gray;
        }
        p,td{
        font-weight: bold;
        font-size:120%;
        font-family:serif;
        }
        h1,h2,h3,h5{
            font-family:serif;
        }
        table,th{
            text-align: center;
        }
        .starter-template{
        padding:40px 15px;
        background-color: white;
        }
        .out{
        position: relative;
        }
        .in img{
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: .5s;
            z-index: 0;
        }
        img{
            display: block;
            width: 100%;
            height: auto;
        }
        /*input{
            display: none;
        }*/
        .in{
            display: flex;
            justify-content: center;
        }
        label span{
            display: block;
            width: 15px;
            height: 15px;
            padding: 7px;
            margin: -40px 0 0;
            border-radius: 100%;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }
        label span::before{
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            background: #4287f5;
            opacity: 0.5;
            border-radius: 100%;
        }            
        input:nth-of-type(1):checked ~ .in label:nth-of-type(1) span::before,
        input:nth-of-type(2):checked ~ .in label:nth-of-type(2) span::before,
        input:nth-of-type(3):checked ~ .in label:nth-of-type(3) span::before,
        input:nth-of-type(4):checked ~ .in label:nth-of-type(4) span::before{
            background: #000;
            opacity: 1;
        }
        label span::before{
            animation: slidebutton 14s infinite;
        }
        @keyframes slidebutton{
            0%{opacity: 0.5;background: #4287f5;}
            3.5%{opacity: 1;background: #000;}/* b÷x×100=y */
            25%{opacity: 1;background: #000;}/* 100÷c=z */
            28.5%{opacity: 0.5;background: #4287f5;}/* y+z */
        }            
        label:nth-of-type(2) span::before,label:nth-of-type(2) img{
            animation-delay: 3.5s;
        }            
        label:nth-of-type(3) span::before,label:nth-of-type(3) img{
            animation-delay: 7s;
        }            
        label:nth-of-type(4) span::before,label:nth-of-type(4) img{
            animation-delay: 10.5s;
        }            
        input:nth-of-type(1):checked ~ .in label:nth-of-type(1) img,
        input:nth-of-type(2):checked ~ .in label:nth-of-type(2) img,
        input:nth-of-type(3):checked ~ .in label:nth-of-type(3) img,
        input:nth-of-type(4):checked ~ .in label:nth-of-type(4) img{
            opacity: 1;
            z-index: 1;
        }
        .in img{
            animation: slide 14s infinite;/* (a+b)×c=x */
            opacity: 0;
        }
        @keyframes slide{
            0%{opacity: 0;}
            3.5%{opacity: 1;z-index: 1;}/* b÷x×100=y */
            25%{opacity: 1;}/* 100÷c=z */
            28.5%{opacity: 0;z-index: 0;}/* y+z */
        }
        input:checked ~ .in img,input:checked ~ .in span::before{
            animation: none;
        }
        .in:hover img,.in:hover span::before{
            animation-play-state:paused;/* マウスを載せると一時停止 */
        }
        .geolonia-svg-map
        {
            width: 100%;
        }
        
        .geolonia-svg-map .prefecture   
        {
        fill: #f7f7f7;
        fill: #72CA2E;
        stroke: #666666;
        cursor: pointer;
        }

        .geolonia-svg-map .boundary-line
        {
        stroke: #999999;
        }
        li a{display:block;}
        table {
        width: 100%;
        table-layout: fixed;
        word-break: break-all;
        word-wrap: break-all;
        }
        
    </style>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                pause: 5000,
            });
        });
    </script>

</head>
