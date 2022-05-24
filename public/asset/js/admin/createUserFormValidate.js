function createUserForm(){
    const name = document.getElementById('name').value;
    if(name===''){
        document.getElementById('nameError').innerHTML ="Kindly fill Employee name!!";
        return false;
    }

    const designation = document.getElementById('designation').value;
    if(designation===""){
        document.getElementById('designationError').innerHTML ="Kindly fill Employee Designation!!";
        return false;
    }

    const date_of_birth = document.getElementById('date_of_birth').value;
    if(date_of_birth===""){
        document.getElementById('date_of_birthError').innerHTML ="Kindly fill Employee Date of Birth!!";
        return false;
    }


    const date_of_joining = document.getElementById('date_of_joining').value;
    if(date_of_joining===""){
        document.getElementById('date_of_joiningError').innerHTML ="Kindly fill Employee Date of Joining!!";
        return false;
    }


    const office = document.getElementById('office').value;
    if(office===""){
        document.getElementById('officeError').innerHTML ="Kindly fill Employee office Name!!";
        return false;
    }


    const district = document.getElementById('district').value;
    if(district===""){
        document.getElementById('districtError').innerHTML ="Kindly fill Employee District!!";
        return false;
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
    }

    const gender = document.getElementById('gender').value;
    if(gender===""){
        document.getElementById('genderError').innerHTML ="Kindly fill Employee Gender!!";
        return false;
    }

    const qualification = document.getElementById('qualification').value;
    if(qualification===""){
        document.getElementById('qualificationError').innerHTML ="Kindly fill Employee Qualification!!";
        return false;
    }


    const username = document.getElementById('username').value;
    if(username===""){
        document.getElementById('usernameError').innerHTML ="Kindly fill Employee Username!!";
        return false;
    }


    const email = document.getElementById('email').value;
    if(email===""){
        document.getElementById('emailError').innerHTML ="Kindly fill Employee Email!!";
        return false;
    }

    const password = document.getElementById('password').value;
    if(password===""){
        document.getElementById('passwordError').innerHTML ="Kindly fill Employee Password!!";
        return false;
    }

    
    const contact = document.getElementById('contact').value;
    if(contact===""){
        document.getElementById('contactError').innerHTML ="Kindly fill Employee Contact!!";
        return false;
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
}