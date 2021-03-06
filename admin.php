<!--SprucyNet v1.0.0 12-28-16-->
<?php
   include('session.php');
?>

<HTML>

  <head>
    <title>SprucyNet Admin Page</title>
    <link rel="icon" href="resources/favicon.png">
<style>
	#banner{
	background-color: #3b5998;
	min-height: 90px;
	max-height: 100px;
	width: 100%;
	}

  .panel input{
    border: none;
    background-color: #cdd3e5;
    padding: 4px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
  }

  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button{
    -webkit-appearance: none;
    margin: 0;
  }

  .panel select{
    border: none;
    background-color: #cdd3e5;
    padding: 4px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    width: 220px;
  }

  .panel textarea{
    border: none;
    background-color: #cdd3e5;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    width: 100%;
  }

  body {
  font-family: "Lato", sans-serif;
  margin: 0px;

  }

  ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #3b5998;
  }

  /* Float the list items side by side */
  ul.tab li {
	  float: left;
	  width: 33.333%;
    line-height: 51px;
  }

  /* Style the links inside the list items */
  ul.tab li a {
    display: inline-block;
    color: white;
    text-align: center;
	  vertical-align: center;
    text-decoration: none;
    transition: 0.3s;
    font-size: 20px;
	  width: 100%;
  }


  /* Change background color of links on hover */
  ul.tab li a:hover {
    background-color: #687fb1;
  }

  /* Create an active/current tablink class */
  ul.tab li a:focus, .active {
    background-color: #687fb1;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 12px;
    border: 1px solid #ccc;
    border-top: none;
	  background: #cdd3e5;
    min-height: 1000px;
  }

  table {
    width: 100%;
    border-collapse: collapse;

  }

  .usertable th {
    background-color: #3b5998;
    color: white;
  }

  .usertable tr:nth-child(even) {
    background-color: #f2f2f2 !important
  }

  .usertable tr:nth-child(odd){
    background-color: #DFE3EE;
  }

  .usertable td {
    text-align: center;
  }
  .ugmgmtTable th{
    background-color: #3b5998;
    color: white;
  }
  .ugmgmtTable td {
    text-align: center;
  }
  .ugassign{
    width: 100%;
  }
  .ugbtn{
    color: #fff;
    background-color: #3b5998;
    width: 150px;
    font-size: 16px;
  }

  .billtable td{
    padding:18px;
    vertical-align: top;
    width: 50%;
  }

  .accContent td{
    padding: 0px;
  }

  .editBtn{
    background-color: #3b5998;
    height: 30px;
    width: 30px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    text-align: center;
  }

  .userbtn{
    padding: 8px;
    background-color: #3b5998;
    border: none;
    text-align: center;
    color: #FFF;
    font-size: 12pt;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    opacity: 0.6;
  }

  .userbtn:hover, .userbtn.active{
    opacity: 1;
  }

  .userinput{
    display: none;
  }

  .userinput.show{
    display: block;
  }

  .addbtn{
    width: 60px;
    height: 40px;
    background-color: #3b5998;
    text-align: center;
    color: #FFF;
    font-size: 25pt;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;

  }


  /* Style the buttons that are used to open and close the accordion panel */
div.accordion {
    background-color: #f2f2f2;
    color: #000;
    cursor: pointer;
    padding: 12px;
    height: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;

}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) 687fb1 */
div.accordion.active, div.accordion:hover {
    background-color: #3b5998;
    /*border-left: 6px solid #3b5998;*/
    color: #fff;

}

/* Style the accordion panel. Note: hidden by default */
div.panel {
  background-color: #f2f2f2;
  padding: 12px;
  max-height: 0;
  overflow: hidden;
  opacity: 0;
  width: 100%;
}

/* The "show" class is added to the accordion panel when the user clicks on one of the buttons. This will show the panel content */
div.panel.show {
    display: block;
    opacity: 1;
    max-height: 500px;
}

.modal{
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

.popContent{
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  width: 80%;
}

.popCancel{
  width: 60px;
  height: 40px;
  background-color: #FF0010;
  text-align: center;
  color: #FFF;
  font-size: 22pt;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
}

  .popSubmit{
    width: 60px;
    height: 40px;
    background-color: #00e600;
    text-align: center;
    color: #FFF;
    font-size: 22pt;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}

  .userCreationLink{
    padding: 8px;
    background-color: #3b5998;
    text-align: center;
    color: #FFF;
    font-size: 12pt;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
  }

  .inputTable input{
    border: none;
    background-color: #cdd3e5;
    padding: 4px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
  }

  .inputTable{
    margin-left: auto;
    margin-right: auto;
  }
  .userPop{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    width: 800px;
  }



  </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
    var billto = 1;
    var addBillPay = true;
    var ugRemoveArr = [];
    var ugAddArr = [];
    var globalPop = '';
    var processing = '<div style="text-align: center;"><img src="resources/processing.png"></div>';
    var ugnum = '';

    function onLoad(){
      getUserTable();
      getUserGrpTable();
      getUserDS();
      getUserGrpDS();
      getCats();
      $('#tab1').css("display", "block");
      $('#defaultTab').addClass(" active");
      $('#amt').blur(function(){
        formatCurrency(this.id, $('#amt').val());
      });
      $('#payamt').blur(function(){
        formatCurrency(this.id, $('#payamt').val());
      })
    };

//gets user table data from db file
    function getUserTable(){
      var req = new XMLHttpRequest();
      req.onload = function(){
        var HTMLText = '<tr><th>User Num</th><th>User Name</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Edit User</th></tr>';
        HTMLText += this.responseText;
        $('#usertable').html(HTMLText);
      };
      req.open("get", "user.php", true);
      req.send();
    };

//gets user group data for user group tab
function getUserGrpTable(){
  $.ajax({url: 'database.php',
    data: {action: "usergrptable"},
    type: 'POST',
    dataType:'text',
    error:function(error){console.log(error.responseText);},
    success: function(action){
      var HTMLText = '<tr><th>User Group Num</th><th>User Group Name</th><th>Group Type</th><th>Edit User Group</th></tr>';
      HTMLText += action;
      $("#usergrptable").html(HTMLText);
    }
    });
  };

//gets user data from database file
    function getUserDS(){
      $.ajax({url: 'database.php',
        data: {action: "user"},
        type: 'POST',
        dataType:'text',
        error:function(error){console.log(error.responseText);},
        success: function(action){
          var HTMLText = '';
          HTMLText += action;
          $("[name='userinput']").html(HTMLText);
          $("[name='payuserinput']").html(HTMLText);
        }
        });
      };

//gets category data from db file
function getCats(){
  $.ajax({url: 'database.php',
    data: {action: "cat"},
    type: 'POST',
    dataType:'text',
    error:function(error){console.log(error.responseText);},
    success: function(action){
      var HTMLText = '';
      HTMLText += action;
      $("[name='catInput']").html(HTMLText);
    }
    });
  };

//Gets usergrp dataset from database file
    function getUserGrpDS(){
      $.ajax({url: 'database.php',
        data: {'action': 'userGrp'},
        type: 'POST',
        dataType:'text',
        success: function(data){
          var HTMLText = '';
          HTMLText += data;
          $("[name='usergrpinput']").html(HTMLText);
        },
        error:function(error){console.log(error.responseText);}
      });
    };

    function editUser(editbtnid){
      var id = editbtnid.replace('editBtn','');
      var un = document.getElementById('username'+id).innerHTML;
      var email = document.getElementById('email'+id).innerHTML;
      var fname = document.getElementById('fname'+id).innerHTML;
      var lname = document.getElementById('lname'+id).innerHTML;
      var userPop = '<div class="userPop">The following changes will be committed upon submission of this dialouge for user <b>'+un+'</b> (<b>#'+id+'</b>).<br><br>';
      userPop += '<table class="inputTable"><tr><td>User Name:</td><td><input type="text" id="username" name="username" value="'+un+'"/><input type="text" id="usernum" hidden value ="'+id+'"/></td></tr><tr><td>Email:</td><td><input type="email" id="email" name="email" value="'+email+'"/></td></tr>';
      userPop += '<tr><td>First Name:</td><td><input type="text" id="fname" name="fname" value="'+fname+'"/></td></tr><tr><td>Last Name:</td><td><input type="text" id="lname" name="lname" value="'+lname+'"/></td></tr>';
      userPop += '<tr><td>Reset Password</td><td><input type="checkbox" id="password" name="password" value="1"/></td></tr><tr><td>Deactivate User</td><td><input id="deactivate" name="deactivate" type="checkbox" value="1"/></td></tr></table></div>';
      $('#popText').html(userPop);
      globalPop = 'editu';
      $('#modal').css("display", "block");
    }

    function editUserGrp(ugid){
      ugnum = ugid;
      $.ajax({url: 'database.php',
        data: {'action': 'editusergrp', 'param': ugid},
        type: 'POST',
        dataType:'text',
        success: function(data){
          var userarray = $.parseJSON(data);

          var ugmgmt = '<table class="ugmgmtTable"><th>Available</th><th>'+'**'+userarray[2]+'**'+'</th><th>Assigned</th> <tr><td colspan="3" style="height: 12px;"></td></tr> <tr><td rowspan="2"><select size="4" class="ugassign" id="available">'+userarray[0]+'</select></td> <td><button type="button" id="add" class="ugbtn" onClick="ugAddSelected();">'+'Add >>'+'</button></td>';
          ugmgmt += '<td rowspan="2"><select size="4" class="ugassign" id="assigned">'+userarray[1]+'</select></td></tr>';
          ugmgmt += '<tr><td><button id="remove" type="button" onClick="ugRemoveSelected();"class="ugbtn">'+'<< Remove'+'</button></td></tr> <tr><td colspan="3" style="height: 12px;"></td></tr></table>';
          $('#popText').html(ugmgmt);
          globalPop = 'editug';
          $('#modal').css("display", "block");
        },
        error:function(error){console.log(error.responseText);}
      });
      ugRemoveArr = [];
      ugAddArr = [];
    }

    function ugAddSelected(){

      var userText = $("#available option:selected").text();
      var userVal = $("#available option:selected").val();

      if(userVal){
        if($.inArray(userVal, ugAddArr) === -1){
          if($.inArray(userVal, ugRemoveArr) === -1){
            ugAddArr.push(userVal);
          }else{
            ugRemoveArr = $.grep(ugRemoveArr, function(a){
              return a !== userVal;
            })
            ugAddArr.push(userVal);
          }
        }else{
          if($.inArray(userVal, ugRemoveArr) === -1){
          }else{
            alert("An error has occurred.  Please recycle the webpage.");
            console.log("Value in both arrays!");
          }
        }

      $("#assigned").append($("<option></option>").attr("value",userVal).text(userText));
      $("#available option:selected").remove();
    }
  }

    function ugRemoveSelected(){

      var userText = $("#assigned option:selected").text();
      var userVal = $("#assigned option:selected").val();

      if(userVal){
        if($.inArray(userVal, ugRemoveArr) === -1){
          if($.inArray(userVal, ugAddArr) === -1){
            ugRemoveArr.push(userVal);
          }else{
            ugAddArr = $.grep(ugAddArr, function(a){
              return a !== userVal;
            })
            ugRemoveArr.push(userVal);
          }
        }else{
          if($.inArray(userVal, ugAddArr) === -1){
          }else{
            alert("An error has occurred.  Please recycle the webpage.");
            console.log("Value in both arrays!");
          }
        }

        $("#available").append($("<option></option>").attr("value",userVal).text(userText));
        $("#assigned option:selected").remove();
      }else{
      }
    }

//Swtich between tabs
		function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
	  }

//expands the add bill or add payment sections of the bill/pay admin section
    function buttonClick(addID){
      var acc = document.getElementsByClassName("accordion");
      var i;
      document.getElementById(addID).classList.toggle("active");
      document.getElementById(addID).nextElementSibling.classList.toggle("show");
      for (i = 0; i < acc.length; i++) {
        if(acc[i].id != addID){
          acc[i].classList.remove("active");
          acc[i].nextElementSibling.classList.remove("show");
        }
      }
      defaultBillUser(addID);
      billto = 1;
      $('#userinput').val('default');
      $('#usergrpinput').val('default');
      $('#catInput').val('');
      $('#amt').val('');
      $('#amt').css("background-color","#cdd3e5");
      $('#notes').val('');
      $('#payuseriput').val('default');
      $('#payamt').val('');
      $('#payamt').css("background-color","#cdd3e5");
      $('#paynotes').val('');

    };

//sets default option to the Bill User button
    function defaultBillUser(addID){
      if(addID == 'addBill'){
        var inputCL = document.getElementById("usrSelect").className.split(/\s+/);
        var activeVar = 0;
        for(i = 0; i < inputCL.length; i++){
          if(inputCL[i] === "active"){
            activeVar = 1;
          }
        }
        if(activeVar != 1){
            document.getElementById("usrSelect").classList.add("active");
            document.getElementById("userinput").classList.add("show");
            $('#userlabel').html("User:");
            document.getElementById("grpSelect").classList.remove("active");
            document.getElementById("usergrpinput").classList.remove("show");
        }
      }
    }

//click function for the bill user and bill user group buttons
    function billBtnClick(btnID, inputID){
      var activeBtn = document.getElementById(btnID).className.split(/\s+/);
      var activeVar;
      for(i = 0; i < activeBtn.length; i++){
        if(activeBtn[i] === "active"){
          activeVar = 1;
        }
      }
      if(activeVar != 1){
          var acc = document.getElementsByClassName("userbtn");
          var inpt = document.getElementsByClassName("userinput");
          var inputiden = inputID+"input"
          var i;
          document.getElementById(btnID).classList.toggle("active");
          document.getElementById(inputiden).classList.toggle("show");

          for (i = 0; i < acc.length; i++) {
            if(acc[i].id != btnID){
              acc[i].classList.remove("active");
            }
          }

          for (i = 0; i < inpt.length; i++) {
            if(inpt[i].id != inputiden){
              inpt[i].classList.remove("show");
            }
          }

          if (inputID == 'user'){
            $('#userlabel').html("User:");
            billto = 1;
          }else{
            $('#userlabel').html("User Group:");
            billto = 2;
          }
        }
      }

//brings up confirmation dialouge
      function confirm(billorPay){

        var popBill = '';
        var popPay = '';
        if(addBillPay == false){
          alert('Please validate fields before proceeding!')
        }else{
        if(billorPay == 'billAddBtn'){
          //bill add
          var cat = $('#catInput').val();
          var amt = $('#amt').val();
          var note = $('#notes').val();
            if(billto == 1){
              //user pay
              var user = $('#userinput option:selected').text();
              if(amt == '' || user == 'default' || amt == 0){
                alert('Please enter a user and/or amount.');
              }else{
              popBill = 'Are you sure you would like to submit a bill to <b>'+user+'</b> for the amount of <b>$'+amt+'</b>?<br><br>The following notes will also be recorded:<br><b>'+note+'</b><br>';
              $('#popText').html(popBill);
              globalPop = 'bill';
              $('#modal').css("display", "block");
              }
            }else if(billto == 2){
              //user group pay
              var usergrp = $('#usergrpinput option:selected').text();
              if(amt == '' || usergrp == 'default' || amt == 0){
                alert('Please enter a usergroup and/or amount.');
              }else{
              popBill = 'Are you sure you would like to submit a bill to the <b>'+usergrp+'</b> group for the amount of <b>$'+amt+'</b>?<br><br>The following notes will also be recorded:<br><b>'+note+'</b><br>';
              $('#popText').html(popBill);
              globalPop = 'billgrp';
              $('#modal').css("display", "block");
              }
            }else{
              console.log("Error! billto is not what you expect it to be.")
            }
          }else if(billorPay == 'payAddBtn'){
            //pay add
            var user = $('#payuserinput option:selected').text();
            var amt = $('#payamt').val();
            var note = $('#paynotes').val();
            if(amt == '' || user == 'default' || amt == 0){
              alert('Please enter a user and/or amount.');
            }else{
            popPay = 'Are you sure you would like to record a payment for <b>'+user+'</b> for the amount of <b>$'+amt+'</b>?<br><br>The following notes will also be recorded<br><b>'+note+'</b><br>';
            $('#popText').html(popPay);
            globalPop = 'pay';
            $('#modal').css("display", "block");
            }
          }else {
            console.log("Error! billorPay is empty.")
          }

        }
      }

      function popExit(){
        globalPop = '';
        $('#modal').css("display", "none");
      }

      window.onclick = function(event){
        if (event.target == modal){
          globalPop = '';
          $('#modal').css("display", "none");
        }
      }


      function popGo(){
        var lendor = '';
        var debtor = '';
        var amt = '';
        var notes = '';
        switch(globalPop){
          case "bill":
          lendor = <?php echo $_SESSION['usernum'] ?>;
          debtor = $('#userinput option:selected').val();
          amt = $('#amt').val();
          notes = $('#notes').val();
          $('#popContent').html(processing);
          $.ajax({url: 'popProcessor.php',
            data: {action: "bill", lendor: lendor, debtor: debtor, amt: amt, notes: notes},
            type: 'POST',
            dataType:'text',
            error:function(error){console.log(error.responseText);},
            success: function(action){
              window.location.assign("admin.php");
            }
            });
            break;

          case "billgrp":
          alert("non functional atm")
            //alert(globalPop)
            break;

          case "editu":
          var usernum = $('#usernum').val();
          var username = $('#username').val();
          var email = $('#email').val();
          var fname = $('#fname').val();
          var lname = $('#lname').val();
          var deactivate = '';
          var pwreset = '';
          if($('#password').is(':checked')){
            pwreset = "true";
          }
          if($('#deactivate').is(':checked')){
            deactivate = "true";
          }
          $('#popContent').html(processing);
          $.ajax({url: 'popProcessor.php',
            data: {action: "editu", usernum: usernum, username: username, email: email, fname: fname, lname: lname, pwreset : pwreset, deactivate : deactivate},
            type: 'POST',
            dataType:'text',
            error:function(error){console.log(error.responseText);},
            success: function(action){
            window.location.assign("admin.php");
            }
            });
            break;

          case "editug":
            var removeUsers = '';
            var addUsers = '';
            if(ugRemoveArr.length > 0){
              for (i=0; i<ugRemoveArr.length -1; i++){
                removeUsers += ugRemoveArr[i] + ",";
              }
              removeUsers += ugRemoveArr[ugRemoveArr.length -1];
            }
            if(ugAddArr.length > 0){
              for (i=0; i<ugAddArr.length -1; i++){
                addUsers += ugAddArr[i] + ",";
              }
              addUsers += ugAddArr[ugAddArr.length -1];
            }
            $('#popContent').html(processing);
            $.ajax({url: 'popProcessor.php',
              data: {action: "editug", ugnum : ugnum, addusers: addUsers, removeusers : removeUsers},
              type: 'POST',
              dataType:'text',
              error:function(error){console.log(error.responseText);},
              success: function(action){
                window.location.assign("admin.php");
              }
            });
            break;

          case "pay":
            alert(globalPop)
            break;
        }
      }



      function formatCurrency(id, val){
        var regex = /^\d+(?:\.\d{0,2})$/;
        var cur = Number(val);
        cur = cur.toFixed(2);
        if(regex.test(cur)){
          $('#'+id).css("background-color","#cdd3e5");
          $('#'+id).val(cur);
          addBillPay = true;
        }else{
          $('#'+id).css("background-color","#FF0000");
          alert('Invalid entry for amount. Note: only positive numbers are allowed.');
          addBillPay = false;
        }
        if(id == 'amt'){

        }else if(id == 'payamt'){

        }else{
          console.log('No ID field on blur.');
        }
      }




    </script>
  </head>
  <body onload="onLoad()">
  <form>
	<div id="banner">
		<a href="home.php">
		<img src="resources/sprucy.png" alt="sprucy">
		</a>
    <a href="logout.php" style="float: right;">
      <img src="resources/logout.png" alt="logout">
    </a>
	</div>
	<br>
	<br>
	<div id="content">

		<ul class="tab">
			<li><a href="#" id="defaultTab" class="tablinks" onclick="openTab(event, 'tab1')">Bill/Pay</a></li>
			<li><a href="#" class="tablinks" onclick="openTab(event, 'tab2')">Users</a></li>
			<li><a href="#" class="tablinks" onclick="openTab(event, 'tab3')">User Groups</a></li>
		</ul>
		<div id="tab1" class="tabcontent">
        <br>
        <table class="billtable">
        <tr>
        <td>
        <div class="accordion" id="addBill" onclick="buttonClick(this.id)">Add Bill</div>
        <div class="panel">
          <table class="accContent">
            <tr>
              <td>
              </td>
              <td id="userlabel">
                User:
              </td>
            </tr>
            <tr>
              <td>
                <button name="usrSelect" id="usrSelect" value="Bill User" class="userbtn" type="button" onclick="billBtnClick(this.id, 'user')">Bill User</button>
                <button name="grpSelect" id="grpSelect" value="Bill User Group" class="userbtn" type="button" onclick="billBtnClick(this.id,'usergrp')">Bill User Group</button>
              </td>
              <td>
                <select name="userinput" id="userinput" class="userinput" >
                </select>
                <select name="usergrpinput" id="usergrpinput" class="userinput" >
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="height: 15px;">
              </td>
            </tr>
            <tr>
              <td>
                Category:
              </td>
              <td>
                Amount:
              </td>
            </tr>
            <tr>
              <td>
                <select name="catInput" id="catInput">
                </select>
              </td>
              <td>
                <input type ="number" min="0.01" step="0.01" name="amt" id="amt"/>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="height: 15px;">
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Notes:
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <textarea name="notes" rows="3" id="notes"></textarea>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="height: 15px;">
              </td>
            </tr>
            <tr>
              <td colspan="2" style="text-align: right;">
                <button type="button" id="billAddBtn" class="addbtn" onclick="confirm(this.id)">+</button>
              </td>
            </tr>
          </table>
          <br>
        </div>
      </td>
      <td>
        <div class="accordion" id="addPay" onclick="buttonClick(this.id)">Add Payment</div>
        <div class="panel">
          <table class="accContent">
            <tr>
              <td>
                User:
              </td>
              <td>
                Amount:
              </td>
            </tr>
            <tr>
              <td>
                <select name="payuserinput" id="payuserinput">
                </select>
              </td>
              <td>
                <input type ="number" min="0.01" step="0.01" name="payamt" id="payamt"/>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="height: 15px;">
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Notes:
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <textarea name="paynotes" rows="3" id="paynotes"></textarea>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="height: 15px;">
              </td>
            </tr>
            <tr>
              <td colspan="2" style="text-align: right;">
                <button type="button" id="payAddBtn" class="addbtn" onclick="confirm(this.id)">+</button>
              </td>
            </tr>
          </table>
          </td>
          </tr>
        </table>
        </div>
		</div>
		<div id="tab2" class="tabcontent">
      <br>
      <table class="usertable" id="usertable" name="usertable">
      </table>
      <br>
      <div style="text-align: right;">
        <input id="newUser" name="newUser" class="userCreationLink" type="button" value="Create New User" onclick="location.href='UserCreation.php'" />
      </div>
		</div>
		<div id="tab3" class="tabcontent">
      <br>
      <table class="usertable" id="usergrptable" name="usergrptable">
      </table>
		</div>
    <div id="modal" class="modal">
        <div id="popContent" class="popContent">
          <div id="popText">
          </div>
          <div style="text-align: right;">
            <button type="button" class="popCancel" id="popCancel" onclick="popExit();">x</button>
            <button type="button" class="popSubmit" id="popSubmit" onclick="popGo();">+</button>
          </div>
        </div>
    </div>
	</div>
  </form>
  </body>
</HTML>
