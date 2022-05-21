function dobValidate(birth) {


    var today = new Date();
    var nowyear = today.getFullYear();
    var nowmonth = today.getMonth();
    var nowday = today.getDate();
    var birthDay = document.getElementById('date_of_birth').value;
    var dateOfJoin = document.getElementById('date_of_joining').value;



    var birth = new Date(birthDay);

    var birthyear = birth.getFullYear();
    var birthmonth = birth.getMonth();
    var birthday = birth.getDate();

    var age = nowyear - birthyear;
    var age_month = nowmonth - birthmonth;
    var age_day = nowday - birthday;

    if (age > 100) {
        document.getElementById('dobError').innerHTML= "Age cannot be more than 100 Years.Please enter correct age";
        console.log(age);
        return false;
    }
    if (age_month < 0 || (age_month == 0 && age_day < 0)) {
        age = parseInt(age) - 1;
        console.log(age);
        return false;

    }
    if ((age == 18 && age_month <= 0 && age_day <= 0) || age < 18) {
        document.getElementById('dobError').innerHTML= "Age should be more than 18 years.Please enter a valid Date of Birth"; 
        console.log(age);
        return false;
    }



    var dateOfJoining = age;

    // if(dateOfJoining ){
    //     document.getElementById('dojError').innerHTML= "Grator";
    //     return false;
    // }

    if (dateOfJoining == 18) {
        document.getElementById('dobError').innerHTML= "Grator"; 
        console.log(dateOfJoining);
        return false;
    }




    

  



 
}





function validateform(){
    const name = document.getElementById('name').value;
    const designation = document.getElementById('designation').value;
    const date_of_birth = document.getElementById('date_of_birth').value;
    const date_of_joining = document.getElementById('date_of_joining').value;
    const office = document.getElementById('office').value;
    const district = document.getElementById('district').value;
    const circle = document.getElementById('circle').value;
    const division = document.getElementById('division').value;
    const range = document.getElementById('range').value;
    const office_address = document.getElementById('office_address').value;
    const qualification = document.getElementById('qualification').value;
    const gender = document.getElementById('gender').value;
    const email = document.getElementById('email').value;
    const contact = document.getElementById('contact').value;
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const cPassword = document.getElementById('confirm_password').value;


    if(name==''){
        document.getElementById('nameError').innerHTML= "Name is required";
        return false;
    }
    if(!isNaN(name)){
        document.getElementById('nameError').innerHTML= "Only Words are allowed";
        return false;
    }

    
    if(designation==''){
        document.getElementById('designationError').innerHTML= "Designation is required";
        return false;
    }

    if(!isNaN(designation)){
        document.getElementById('designationError').innerHTML= "Only Words are allowed";
        return false;
    }



    if(date_of_birth==''){
        document.getElementById('dobError').innerHTML= "Date Of Birth is required";
        return false;
    }

    if(dobValidate(date_of_birth)){
        
    }

    if(date_of_joining==''){
        document.getElementById('dojError').innerHTML= "Date of Joining is required";
        return false;
    }

    if(date_of_joining <= date_of_birth){
        document.getElementById('dojError').innerHTML= "Date of Joining and date of birth not be equal";
        return false;
    }

    if(date_of_joining>=dobValidate(date_of_birth)){
        document.getElementById('dojError').innerHTML= "Grateot";
        return false;
    }
    
    if(office_address==''){
        document.getElementById('officeError').innerHTML= "Office Address is required";
        return false;
    }

    if(district==''){
        document.getElementById('districtError').innerHTML= "District Name is required";
        return false;
    }

    if(circle==''){
        document.getElementById('circleError').innerHTML= "District Name is required";
        return false;
    }


    if(division==''){
        document.getElementById('divisionError').innerHTML= "District Name is required";
        return false;
    }


    if(range==''){
        document.getElementById('rangeError').innerHTML= "Office Name is required";
        return false;
    }


    if(office_address==''){
        document.getElementById('addressError').innerHTML= "Office Name is required";
        return false;
    }



    if(gender==''){
        document.getElementById('genderError').innerHTML= "Gender is required";
        return false;
    }

    if(qualification==''){
        document.getElementById('qualificationError').innerHTML= "Qualification field is required";
        return false;
        
    }


    if(email==''){
        document.getElementById('emailError').innerHTML= "Email is required";
        return false;
        
    }


    if(contact==''){
        document.getElementById('contactError').innerHTML= "Contact is required";
        return false;
    }


    if(username==''){
        document.getElementById('usernameError').innerHTML= "Username is required ";
        return false;
    }

    if(password==''){
        document.getElementById('passwordError').innerHTML= "Password is required";
        return false;
    }

    if(confirm_password==''){
        document.getElementById('cPasswordError').innerHTML= "Password is required";
        return false;
    }

    if(password!=confirm_password){
        document.getElementById('cPasswordError').innerHTML= "Password is Incorrect";
        return false;
    }




    

    
}