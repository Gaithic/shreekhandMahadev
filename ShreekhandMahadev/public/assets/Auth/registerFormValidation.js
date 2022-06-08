function validateForm(){
    const name = document.getElementById('name').value;
    const fatherOrHusband = document.getElementById('fatherOrHusband').value;
    const fatherOrHusbandContact = document.getElementById('fatherOrHusbandContact').value;
    const date_of_birth = document.getElementById('date_of_birth').value;
    const email = document.getElementById('email').value;
    const contact = document.getElementById('number').value;
    const gender = document.getElementById('gender').value;
    const nationality = document.getElementById('nationality').value;
    const state = document.getElementById('state').value;
    const district = document.getElementById('district').value;
    const address = document.getElementById('address').value;
    const dateOfReporting = document.getElementById('dateOfReporting').value;
    const nameOfRelative = document.getElementById('nameOfRelative').value;
    const ContactOfNearRelative = document.getElementById('ContactOfNearRelative').value;
    const idProof = document.getElementById('idProof').value;
    const addharNumber = document.getElementById('addharNumber').value;
    const agreeTerms = document.getElementById('agreeTerms').value;
    const hackSafe = /[\\\/:*?<>|]+/;
    var ifString = /^[A-Za-z ]+$/;
    var ifNumber = /[1-9]/;
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    //name input validation

    if(name===''){
        document.getElementById('nameError').innerHTML= "Name is required";
        return false;
    }else{
        if(hackSafe.test(name)){
            document.getElementById('nameError').innerHTML= "Special Character's are not allowed";
            return false;
        }else{
            if(!ifString.test(name)){
                document.getElementById('nameError').innerHTML= "Numbers are not allowed...";
            }else{
                document.getElementById('nameError').innerHTML= "";

            }
        }
    }

    ///fatherOrHusband input validation

    if(fatherOrHusband==''){
        document.getElementById('fatherOrHusbandError').innerHTML= "Father Or Husband is required";
        return false;
    }else{
        if(hackSafe.test(fatherOrHusband)){
            document.getElementById('fatherOrHusbandError').innerHTML= "Special Character's are not allowed";
            return false;
        }else{
            if(!ifString.test(fatherOrHusband)){
                document.getElementById('fatherOrHusbandError').innerHTML= "Enter Valid fatherOrHusband Name!!";
            }else{
                document.getElementById('fatherOrHusbandError').innerHTML= "";
            }

        }
    }

    if(fatherOrHusbandContact==''){
        document.getElementById('fhcError').innerHTML=" Contact number is required";
        return false;
    }else{
        document.getElementById('fhcError').innerText = "";
    }

    if(isNaN(fatherOrHusbandContact)){
        document.getElementById('fhcError').innerHTML=" Only Numbers are allowed...";
        return false;

    }else{
        document.getElementById('fhcError').innerText = "";
    }

    if(fatherOrHusbandContact.length!=10){
        document.getElementById('fhcError').innerHTML=" ** Number length should be 10 digiti only..";
        return false;

    }else{
        document.getElementById('cofhcErrortactError').innerText = "";
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

        var differenceAge = theYear - inputYear;
        var dfferenceMonth = theMonth - inputMonth;
        var differenceDate = theDate - inputDate;

        if(differenceAge > 100){
            document.getElementById('dobError').innerHTML= "Age not be greater than 100 Years!!";
            return false;
        }else if(differenceAge==18 && dfferenceMonth<=0 && differenceDate<=0 || differenceAge<18 ){
            document.getElementById('dobError').innerHTML= "Age should be greater than 18 year!!";
        }
        else{
            if(dfferenceMonth<0 || (dfferenceMonth == 0 && differenceDate<0)){
                differenceAge = parseInt(differenceAge) -1;
                if(differenceAge<18){
                    document.getElementById('dobError').innerHTML= "Age not be less than 18 Year!!";
                    return false;
                }else{
                    document.getElementById('dobError').innerHTML= "";
                }
            }else{
                document.getElementById('dobError').innerHTML= "";
            }
        }




    }


    if(nationality==''){
        document.getElementById('nationalityError').innerHTML= "nationality Address is required";
        return false;
    }else{
        document.getElementById('nationalityError').innerHTML= "";

    }

    if(state==''){
        document.getElementById('stateError').innerHTML= "nationality Address is required";
        return false;
    }else{
        document.getElementById('stateError').innerHTML= "";
    }

    if(district==""){
        document.getElementById('districtError').innerHTML= "Please Select Gender!!";
        return false;
    }else{
        document.getElementById('districtError').innerHTML= "";
    }




    if(address==""){
        document.getElementById('addressError').innerHTML= "address field is required";
        return false;
    }else{
        if(hackSafe.test(address)){
            document.getElementById('addressError').innerHTML= "Special Character's are not allowed!!";
            return false;
        }else{
            document.getElementById('addressError').innerHTML= "";
        }
    }

    //input validation for gender field

    if(gender==""){
        document.getElementById('genderError').innerHTML= "Please Select Gender!!";
        return false;
    }else{
        document.getElementById('genderError').innerHTML= "";
    }






    if(email==''){
        document.getElementById('emailError').innerHTML="Please Enter Valid Email Address...";
        return false;
    }
    else if((email.indexOf('@')<=0)){
      document.getElementById('emailError').innerHTML="Invalid Index of @ in email address";
      return false;

    }
    else if(email.charAt(email.length-3)!='.' && email.charAt(email.length-4)!='.'){
      document.getElementById('emailError').innerHTML="Invalid index of Email .";
      return false;

    }else{
        document.getElementById('emailError').innerHTML="";
    }

  //contact field input validation

    if(contact==''){
        document.getElementById('contactError').innerHTML=" ** Please Enter Valid contact number";
        return false;
    }else{
        document.getElementById('contactError').innerText = "";
    }

    if(isNaN(contact)){
        document.getElementById('contactError').innerHTML=" ** Only Numbers are allowed...";
        return false;

    }else{
        document.getElementById('contactError').innerText = "";
    }

    if(contact.length!=10){
        document.getElementById('contactError').innerHTML=" ** Number length should be 10 digiti only";
        return false;

    }else{
        document.getElementById('contactError').innerText = "";
    }

    

    if(addharNumber==''){
        document.getElementById('addharNumberError').innerHTML=" ** Please Enter Valid contact number";
        return false;
    }else{
        document.getElementById('addharNumberError').innerText = "";
    }

    if(isNaN(addharNumber)){
        document.getElementById('addharNumberError').innerHTML=" ** Only Numbers are allowed...";
        return false;

    }else{
        document.getElementById('addharNumberError').innerText = "";
    }

    if(addharNumber.length!=12){
        document.getElementById('addharNumberError').innerHTML=" ** Number length should be 10 digiti only";
        return false;

    }else{
        document.getElementById('addharNumberError').innerText = "";
    }




    //input field sanitize for username

    if(username==""){
        document.getElementById('usernameError').innerHTML = "user Name required";
        return false
    }else{
        if(hackSafe.test(username)){
            document.getElementById('usernameError').innerHTML = "Numbers' are not allowed";
        }else{

            document.getElementById('usernameError').innerHTML = "";
        }
    }




}
