<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book-issue-form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=KoHo:ital,wght@1,200&display=swap');
        body{
            margin: 5px;
            padding: 10px;
        }
        .contanier{
            background: url("books.jpg") no-repeat center;
            background-size: cover;
            font-family: 'KoHo', sans-serif;
            color: #ffcc29;
            overflow: hidden;
        }
        .input{
            background: none;
            border: none;
            font-size: 20px;
            outline: none;
            color: #e27802;
        }
        .form{
            background: rgb(202, 546, 798,0.2);
            float: left;
            box-shadow: inset;
        }
        textarea{
            background: none;
            border: none;
            height: 50px;
            width: 250px;
        }
        .name{
            border-bottom: 1px solid black;
            display: inline-block;
            margin-bottom: 25px;
            font-size: 30px;
            color: #68bde1;
            border-bottom: 1px solid black;
            font-family: 'KoHo', sans-serif;
        }
        .name2{
            display: inline-block;
            margin-bottom: 25px;
            font-size: 30px;
            color: #00263b;
            font-family: 'KoHo', sans-serif;
            border-bottom: 1px solid black;
        }
        ::placeholder {
            color: #e27802 ;
            font-family: 'KoHo', sans-serif;
        }
        .button{
            font-family: 'KoHo', sans-serif;
            margin-right: 20px;
            padding: 20px;
            font-size: 20px;
            border-radius: 100px;
            background: none;
        }
        #checkbox{
            height: 30px;
            width: 30px;
        }
    </style>
    <script>
        function validateForm() {
          var x = document.forms["register"]["stuname"].value;
          if (x == "") {
            alert("please enter student id");
            return false;
          }
        var b= document.forms["register"]["phone"];
        if(b==""){
            alert("please enter your phone number ");
            return false;
        }
        else{
        for(i=0;i=b.length-1;i++){
            if(isNaN(b.char(i))){
                alert("uhjbn,");
                return false;
                break;
            }
        }
        }
        var d = document.forms["register"]["library"].value;
          if (d == "") {
            alert("please enter library carrd number");
            return false;
          }
          else if(d.length!=5){
              alert("please enter 5 digit library card");
          }
    }
        </script>
</head>
<body>
    <div class="contanier">
        <h1 align=left>
            Request for book? 
            <hr>
        </h1>
            
        <div class="form">
            <form name="register" onsubmit="return validateForm()">
            <div class="name">
            Student-ID:- <input type="text" name="stuname" placeholder="Enter your name" class="input">
            </div><br>
            <div class="name">
            Phone-no.:-<input type="number" placeholder="valid Phone-no" value="+91" class="input" name="phone">
        </div><br>
        <div class="name">
            Address-to-deliver<textarea placeholder="enter address at which books can be delivered"></textarea><br>
        </div><br>
        <div class="name">
            Book-name:- <input type="text" name="books" placeholder="name of the book" class="input"> 
        </div><br>
        <div class="name">
            issue-date:- <input type="date" placeholder="date" class="input">
        </div><br>
        <div class="name2">
           return-date:- <input type="date" placeholder="return at library" class="input">
        </div><br>
        <div class="name2">
            library-card-no.:- <input type="Number" class="input" name="library">
        </div><br> 
        <div class="name2">
            Library-name:- <input type="text" value="Central Library" disabled class="input"> 
        </div><br>
        <div class="button">
            <input type="checkbox" checked disabled id="checkbox"><b><font color="red" size="5px" >You have agreed to terms and condition of issuing book form library
             </font></b></div>
        <div class="button">
       <input type="submit" class="button"><input type="reset" class="button">
        </div>
        </form>
    </div>

</body>
</html>