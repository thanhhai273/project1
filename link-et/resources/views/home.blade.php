@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LINKET</title>
    <link rel="icon" type="image/x-icon" href="public/assets/linkicon.svg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <div class="container1" style="padding-top:60px">


        <input class="dropdown"type="button" value="Add new link" onclick="addRow()">
        <div class=" dropdown">
            <button  class="dropbtn" >Option</button>
            <div class="dropdown-content">
                <a type="button"  onclick="addOption()">Phone number</a>
                <a type="button"  onclick="addOption()">Credit card</a>
            </div>
        </div>

        <div class="content" id="content">
            <div>
            </div>
        </div>
        <div class="content-option" id="content-option">
            <div>
            </div>
        </div>
        <script>
            function addRow() {
                document.querySelector('#content').insertAdjacentHTML(
                    'afterbegin',
                    `<div class="add">
                    <div class="drag-drop">
                        <img src="/assets/more.png" style="margin: 40px 5px"   >                  
                    </div>
                    <div class="add-link">
                        <div class="add-input">
                            <div class="input-link">
                                <input type="text" name="name" value="" placeholder="Title " style="font-weight: bold;"/>
                                <input type="url" name="value" value="" placeholder="Url"/>                  
                            </div>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>    
                        <div class="icon-link">
                            <div class="btn-thumpnail">
                                <input type="button"  onclick="removeRow(this)">
                            </div>
                            <div class="btn-delete">
                                <input type="button"  onclick="removeRow(this)">
                            </div>
                        </div>
                    </div>
                    </div>`
                )

            }

            function addOption() {
                document.querySelector('#content-option').insertAdjacentHTML(
                    'afterbegin',
                    `<div class="add">
                    <div class="drag-drop">
                        <img src="/assets/more.png" style="margin: 40px 5px"   >                  
                    </div>
                    <div class="add-link">
                        <div class="add-input">
                            <div class="input-link">
                                <a>Phone number:</a>
                                <input type="tel" name="phone" value="" placeholder="Phone number"/>                  
                            </div>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>    
                        <div class="icon-link">
                            <div class="btn-thumpnail">
                                <input type="button"  onclick="removeRow(this)">
                            </div>
                            <div class="btn-delete">
                                <input type="button"  onclick="removeRow(this)">
                            </div>
                        </div>
                    </div>
                    </div>`
                )
            }

            function removeRow(input) {
                input.parentNode.parentNode.parentNode.parentNode.remove()
            }
        </script>
    </div>
</body>
@endsection