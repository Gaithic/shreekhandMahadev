function validateForm(){
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
    const hackSafe = /[\\\/:*?<>|]+/;
    var ifString = /^[A-Za-z ]+$/;
    var ifNumber = /[1-9]/;

    //name input validation

    if(name==''){
        document.getElementById('nameError').innerHTML= "Name is required";
        return false;
    }else{
        if(hackSafe.test(name)){
            document.getElementById('nameError').innerHTML= "Special Character's are not allowed";
            return false;
        }else{
            if(!ifString.test(name)){
                document.getElementById('nameError').innerHTML= "Name Contain word's Only not number's";
            }else{
                document.getElementById('nameError').innerHTML= "";

            }
        }
    }

    ///designation input validation

    if(designation==''){
        document.getElementById('designationError').innerHTML= "Designation is required";
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


    /// date_of_birth date input validation

    if(date_of_birth==""){
        document.getElementById('dobError').innerHTML= "Date Of Birth is required";
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

        var differenceAge = theYear - inputYear

        if(differenceAge > 100){
            document.getElementById('dobError').innerHTML= "Age not be grater than 100 Years!!";
            return false;
        }else{
            if(differenceAge <=18){
                document.getElementById('dobError').innerHTML= "Age should be grater than 18 year!!";
                return false;
            }else{
                document.getElementById('dobError').innerHTML= "";
            }

        }
    }


    // date_of_joining input validation

    if(date_of_joining==''){
        document.getElementById('dojError').innerHTML= "Date of Joining is required";
        return false;
    }else{
        if(date_of_joining <= date_of_birth){
            document.getElementById('dojError').innerHTML= "Date of Joining is is not less than or equal to the Date of Birth!!";
            return false;
        }else{
            var birthDay = new Date(date_of_birth)
            var userJoiningYear = new Date(date_of_joining)
            var birthDayFullYear = birthDay.getFullYear();
            var getJoiningYear = userJoiningYear.getFullYear();
            var getDifference = getJoiningYear - birthDayFullYear;

            if(getDifference<18){
                document.getElementById('dojError').innerHTML= "Age Difference Between Date of birth and Date of Joining Must be equal to grater than 18 Years!! ";
                return false;
            }else{
                var todayDate = new Date();
                var getTodayFullDate = todayDate.getFullYear()+'-'+('0' + (todayDate.getMonth()+1)).slice(-2)+'-'+todayDate.getDate();
                if(date_of_joining>getTodayFullDate){
                    document.getElementById('dojError').innerHTML= "Date not be grater than today!!";
                    return false;
                }else{
                    document.getElementById('dojError').innerHTML= "";
                }
            }
        }
    }

    // input validation for office_address input field
    if(office==''){
        document.getElementById('officeError').innerHTML= "Office Address is required";
        return false;
    }else{
        document.getElementById('officeError').innerHTML= "";

    }





}
