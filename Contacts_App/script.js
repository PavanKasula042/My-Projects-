$("document").ready(function () {
  $("#phonebook").click(function() {
    $.ajax({
      url:"apis/getdetails.php",
      method:"POST",
      dataType: "JSON",
        success: function(responseData){
          if(!responseData.status){
            $("#errors").text(responseData.message);
          }else{
          //  $("#passbookTable").html(``);
            for (let i = 0; i < responseData.data.length; i++) {
              $("#passbookTable").append(`
              <tr>
                <td> ${responseData.data[i].id}
            </td>
                <td> ${responseData.data[i].name}  
            </td>
            <td> ${responseData.data[i].phonenumber}
            </td>
                <td> ${responseData.data[i].relation}  
            </td>
                </tr>  
                `);
            }
          }
        }
  
    })
  });
});
 
function register() {
    var formData = {
        username : $("#userNameInput").val(),
        password : $("#passwordInput").val(),
        email : $("#emailInput").val(),
        phoneNumber : $("#phoneNumberInput").val(),
    };
    console.log(formData);
    // if(username == ""){
    //   $("#errors").html("username not found");
    //   return;
    // };
    // if(password == ""){
    //   $("#errors").html("password not found");
    //   return;

    // };

    $.ajax({
        method: "POST",
        url: "apis/register.php",
        dataType: "JSON",
        data: formData,
       
        success: function (responseData) {
          if (!responseData.status) {
            $("#errors").text(responseData.message);
          } else {
            window.location.assign("login.php");
          }
        },
        error: function () {},
      });

}

function login() {
    var LoginData = {
        username : $("#userNameInput").val(),
        password : $("#passwordInput").val(),
    };

    if(LoginData.username == ""){
      $("#errors").html("username not found");
      return;
    };
    if(LoginData.password == ""){
      $("#errors").html("password not found");
      return;

    };
    
   
    $.ajax({
        url: "apis/login.php",
        method: "POST",
        //dataType: "JSON",
        data: LoginData,
        success: function (responseData) {
        responseData = JSON.parse(responseData);
          if (!responseData.status) {
            $("#errors").text(responseData.message);
          } else {
            localStorage.setItem('username',JSON.stringify(responseData.data[0]));
            window.location.assign("form.php");
          }
        },
        error: function () {},
      });

}


function submit() {
    var phonebook = {
        username : $("#userId").text(),
        name : $("#nameInput").val(),
        phoneNumber : $("#phoneInput").val(),
        relation : $("#relationInput").val(),
    };
    console.log(phonebook);
    $.ajax({
        url: "apis/entry.php",
        method: "POST",
        //dataType: "JSON",
        data: phonebook,
        success: function (responseData) {
        responseData = JSON.parse(responseData);
          if (!responseData.status) {
            $("#errors").text(responseData.message);
          } else {
            alert(responseData.message);
            location.reload();
         }
        },
        error: function () {},
      });
}


// function contacSearch() {

//   console.log(LoginData);
//   $.ajax({
//       url: "apis/search.php",
//       method: "POST",
//       //dataType: "JSON",
//       data: LoginData,
//       success: function (responseData) {
//       responseData = JSON.parse(responseData);
//         if (!responseData.status) {
//           $("#errors").text(responseData.message);
//         } else {
//           window.location.assign("form.php");
//         }
//       },
//       error: function () {},
//     });

// }

