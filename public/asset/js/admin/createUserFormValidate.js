function createUserForm(){
    const hackSafe = /[\\\/:*?<>|]+/;
    var ifString = /^[A-Za-z ]+$/;

    const name = document.getElementById('name').value;
    if(name===''){
        document.getElementById('nameError').innerHTML ="Kindly fill Employee name!!";
        return false;
    }else{
        if(hackSafe.test(name)){
            document.getElementById('nameError').innerHTML ="only words are allowed no special characters!!";
            return false;
        }else{
            if(!ifString.test(name)){
                document.getElementById('nameError').innerHTML= "Name Contain word's Only not number's";
            }else{
                document.getElementById('nameError').innerHTML= "";

            }
        }
    }

    const designation = document.getElementById('designation').value;
    if(designation===""){
        document.getElementById('designationError').innerHTML ="Kindly fill Employee Designation!!";
        return false;
    }else{
        if(hackSafe.test(designation)){
            document.getElementById('designationError').innerHTML= "Special Character's are not allowed";
            return false;
        }else{
            if(!ifString.test(designation)){
                document.getElementById('designationError').innerHTML= "Enter Valid Designation Name!!";
            }else{
                document.getElementById('designationError').innerHTML= "";
            }

        }
    }

    const date_of_birth = document.getElementById('date_of_birth').value;
    if(date_of_birth===""){
        document.getElementById('date_of_birthError').innerHTML ="Kindly fill Employee Date of Birth!!";
        return false;
    }else{
        var today = new Date();
        var theYear = today.getFullYear();
        var theMonth  = today.getMonth();
        var theDate = today.getDate();

        var userInputYear = new Date(date_of_birth)
        var inputYear = userInputYear.getFullYear();
        var inputMonth = userInputYear.getMonth();
        var inputDate  = userInputYear.getDate();

        var differenceAge = theYear - inputYear;

        if(differenceAge > 100){
            document.getElementById('date_of_birthError').innerHTML= "Age not be grater than 100 Years!!";
            return false;
        }else{
            if(differenceAge <=18 ){
                document.getElementById('date_of_birthError').innerHTML= "Age should be grater than 18 year!!";
                return false;
            }else{
                document.getElementById('date_of_birthError').innerHTML= "";
            }

        }
    }


    const date_of_joining = document.getElementById('date_of_joining').value;
    if(date_of_joining===""){
        document.getElementById('date_of_joiningError').innerHTML ="Kindly fill Employee Date of Joining!!";
        return false;
    }else{
        if(date_of_joining <= date_of_birth){
            document.getElementById('date_of_joiningError').innerHTML= "Date of Joining is is not less than or equal to the Date of Birth!!";
            return false;
        }else{
            var birthDay = new Date(date_of_birth)
            var userJoiningYear = new Date(date_of_joining)
            var birthDayFullYear = birthDay.getFullYear();
            var birthDayFullMonth = birthDay.getMonth();
            var birthDayFullDate  = birthDay.getDate();
    

            var getJoiningYear = userJoiningYear.getFullYear();
            var getJoiningMonth  = userJoiningYear.getMonth();
            var getJoiningDate  = userJoiningYear.getDate();

            var getDifference = getJoiningYear - birthDayFullYear;
            var getMonthDifference = getJoiningMonth -birthDayFullMonth;
            var getDateDifference = getJoiningDate - birthDayFullDate;


            if(getDifference<18){
                document.getElementById('date_of_joiningError').innerHTML= "Age Difference Between Date of birth and Date of Joining Must be equal to grater than 18 Years!! ";
                return false;
            }else if(getMonthDifference<0){
                document.getElementById('date_of_joiningError').innerHTML= "Age Difference Between Date of birth and Date of Joining Must be equal to grater than 18 Years!! ";
                return false;
            }else if(getDateDifference<0){
                document.getElementById('date_of_joiningError').innerHTML= "Age Difference Between Date of birth and Date of Joining Must be equal to grater than 18 Years!! ";
                return false;
            }
            else{
                var todayDate = new Date();
                var getTodayFullDate = todayDate.getFullYear()+'-'+('0' + (todayDate.getMonth()+1)).slice(-2)+'-'+todayDate.getDate();
                if(date_of_joining>getTodayFullDate){
                    document.getElementById('date_of_joiningError').innerHTML= "Date not be grater than today!!";
                    return false;
                }else{
                    document.getElementById('date_of_joiningError').innerHTML= "";
                }
            }
        }
    }


    const office = document.getElementById('office').value;
    if(office===""){
        document.getElementById('officeError').innerHTML ="Kindly fill Employee office Name!!";
        return false;
    }else{
        document.getElementById('officeError').innerHTML ="";
    }


    const district = document.getElementById('district').value;
    if(district===""){
        document.getElementById('districtError').innerHTML ="Kindly fill Employee District!!";
        return false;
    }else{
        document.getElementById('districtError').innerHTML ="";
    }

    const circle = document.getElementById('circle').value;
    if(circle===""){
        document.getElementById('circleError').innerHTML ="Kindly fill Employee Circle!!";
        return false;
    }

    const division = document.getElementById('division').value;
    if(division===""){
        document.getElementById('divisionError').innerHTML ="Kindly fill Employee Division!!";
        return false;
    }


    
    const range = document.getElementById('range').value;
    if(range===""){
        document.getElementById('rangeError').innerHTML ="Kindly fill Employee Range!!";
        return false;
    }


    const office_address = document.getElementById('office_address').value;
    if(office_address===""){
        document.getElementById('office_addressError').innerHTML ="Kindly fill Employee Office Address!!";
        return false;
    }else{
        if(hackSafe.test(office_address)){
            document.getElementById('office_addressError').innerHTML ="These Character's are not allowed";
            return false;
        }else{
            document.getElementById('office_addressError').innerHTML ="";
        }
    }

    const gender = document.getElementById('gender').value;
    if(gender===""){
        document.getElementById('genderError').innerHTML ="Kindly fill Employee Gender!!";
        return false;
    }else{
        document.getElementById('genderError').innerHTML ="";
    }

    const qualification = document.getElementById('qualification').value;
    if(qualification===""){
        document.getElementById('qualificationError').innerHTML ="Kindly fill Employee Qualification!!";
        return false;
    }else{
        if(hackSafe.test(qualification)){
            document.getElementById('qualificationError').innerHTML ="These Character's are not allowed";
            return false;
        }else{
            document.getElementById('qualificationError').innerHTML ="";
        }
    }


    const username = document.getElementById('username').value;

    if(username===""){
        document.getElementById('usernameError').innerHTML ="Kindly fill Employee Username!!";
        return false;
    }else{
        if(hackSafe.test(username)){
            document.getElementById('usernameError').innerHTML ="These character's are not allowed";
            return false;
        }else{
            document.getElementById('usernameError').innerHTML ="";
        }
    }


    const email = document.getElementById('email').value;
    if(email==''){
        document.getElementById('emailError').innerHTML="Please Enter @Email";
        return false;
    }
    else if((email.indexOf('@')<=0)){
      document.getElementById('emailError').innerHTML="Invalid Index of @";
      return false;

    }
    else if(email.charAt(email.length-4)!='.' && email.charAt(email.length-3)){
      document.getElementById('emailError').innerHTML="Invalid Email.";
      return false;

    }else{
        document.getElementById('emailError').innerHTML="";
    }
    
  //contact field input validation
  




    const password = document.getElementById('password').value;
    const cPassword = document .getElementById('cPassword').value;
    if(password===""){
        document.getElementById('passwordError').innerHTML ="Kindly fill Employee Password!!";
        return false;
    }


    if(cPassword===''){
        document.getElementById('cPasswordError').innerHTML = "kindly confirm  your password";
        return false;
    }else{
        document.getElementById('passwordError').innerHTML = "";
    }


    //match password and confirm password
    if(password!=cPassword){
        document.getElementById('cPasswordError').innerHTML = "Password is not match";
        return false;
    }else{
        document.getElementById('passwordError').innerHTML = "";
    }



    
    
    
    const status = document.getElementById('status').value;
    if(status===""){
        document.getElementById('statusError').innerHTML ="Kindly Select Employee Status!!";
        return false;
    }

    const isadmin = document.getElementById('isadmin').value;
    if(isadmin===""){
        document.getElementById('isadminError').innerHTML ="Kindly select Employee Role!!";
        return false;
    }   


    const contact = document.getElementById('contact').value;
    if(contact==''){
        document.getElementById('contactError').innerHTML=" ** Please Enter Valid contact number";
        return false;
    }else{
        document.getElementById('contactError').innerText = "";
    }

    if(isNaN(contact)){
        document.getElementById('contactError').innerHTML=" ** Must write numbers not characters";
        return false;

    }else{
        document.getElementById('contactError').innerText = "";
    }

    if(contact.length!=10){
        document.getElementById('contactError').innerHTML=" ** Number length should be 10";
        return false;

    }else{
        document.getElementById('contactError').innerText = "";
    }
}