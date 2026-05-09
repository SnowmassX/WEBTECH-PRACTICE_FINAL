// document.getElementById('registerForm').addEventListener('submit', function(e){

    

//     let name = document.getElementById('name').value;
//     let email = document.getElementById('email').value;
//     let password = document.getElementById('password').value;
//     let confirm_password = document.getElementById('confirm_password').value;

//     let gender_male = document.getElementById('gender_male');
//     let gender_female = document.getElementById('gender_female');
//     let gender_others = document.getElementById('gender_others');

//     let ssc = document.getElementById('ssc');
//     let hsc = document.getElementById('hsc');
//     let bsc = document.getElementById('bsc');
//     let msc = document.getElementById('msc');

//     let image = document.getElementById('image').files[0];

//     if(
//         name == "" ||
//         email == "" ||
//         password == "" ||
//         confirm_password == ""
//     ){
//         alert("All fields are required");
//         return;
//     }

//     if(password != confirm_password){
//         alert("Passwords do not match");
//         return;
//     }

//     let gender = "";

//     if(gender_male.checked){
//         gender = gender_male.value;
//     }
//     else if(gender_female.checked){
//         gender = gender_female.value;
//     }
//     else if(gender_others.checked){
//         gender = gender_others.value;
//     }
//     else{
//         alert("Please select gender");
//         return;
//     }

//     let education = [];

//     if(ssc.checked){
//         education.push(ssc.value);
//     }

//     if(hsc.checked){
//         education.push(hsc.value);
//     }

//     if(bsc.checked){
//         education.push(bsc.value);
//     }

//     if(msc.checked){
//         education.push(msc.value);
//     }

//     if(education.length == 0){
//         alert("Please select education");
//         return;
//     }

//     if(!image){
//         alert("Please upload image");
//         return;
//     }

//     ajax(name, email, password, gender, education, image);

// });



// function ajax(name, email, password, gender, education, image){

//     let xhttp = new XMLHttpRequest();
//     let time = Date.now();
//     let data = {
//         'name' : name,
//         'email' : email,
//         'password' : password,
//         'gender' : gender,
//         'education' : education,
//         'image' : image.name,
//         'time' : time
//     };

//     let user = JSON.stringify(data);

//     xhttp.open('post', '../../controller/register.php', true);

//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

//     xhttp.send('user=' + user);

//     // xhttp.onreadystatechange = function(){

//     //     if(this.readyState == 4 && this.status == 200){

//     //         let response = JSON.parse(this.responseText);

//     //         document.getElementById('head').innerHTML = response.username;

//     //     }
//     // }

// }