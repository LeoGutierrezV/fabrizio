const form = document.getElementById('form');
const c_fname = document.getElementById('c_fname');
const c_lname = document.getElementById('c_lname');
const c_dni = document.getElementById('c_dni');
const c_signo = document.getElementById('c_signo');
const country = document.getElementById('country');
const c_department = document.getElementById('c_department');
const c_department2 = document.getElementById('c_department2');
const c_district = document.getElementById('c_district');
const c_address = document.getElementById('c_address');
const c_address2 = document.getElementById('c_address2');
const c_email_address = document.getElementById('c_email_address');
const c_phone = document.getElementById('c_phone');


form.addEventListener('submit', e => {
    e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
    const c_fnameValue = c_fname.value.trim();
    const c_lnameValue = c_lname.value.trim();
    const c_dniValue = c_dni.value.trim();
    const c_signoValue = c_signo.value.trim();
    const countryValue = country.value.trim();
    const c_departmentValue = c_department.value.trim();
    const c_department2Value = c_department2.value.trim();
    const c_districtValue = c_district.value.trim();
    const c_addressValue = c_address.value.trim();
    const c_address2Value = c_address2.value.trim();
    const c_email_addressValue = c_email_address.value.trim();
    const c_phoneValue = c_phone.value.trim();

    if(c_fnameValue === ''){
        setErrorFor(c_fname, 'Completa el campo Nombre.');
    }else{
        setSuccessFor(c_fname);
    }

    if(c_lnameValue === ''){
        setErrorFor(c_lname, 'Completa el campo Apellido.');
    }else{
        setSuccessFor(c_lname);
    }

    if(c_dniValue === ''){
        setErrorFor(c_dni, 'Completa el campo DNI.');
    }else{
        setSuccessFor(c_dni);
    }

    if(c_signoValue === ''){
        setErrorFor(c_signo, 'Completa el campo Signo.');
    }else{
        setSuccessFor(c_signo);
    }

    if(countryValue === 'Perú'){
        setSuccessFor1(country);
    }else{
        setErrorFor1(country, 'Solo Envios a todo el Peru.');
    }

    if(c_departmentValue === ''){
        setErrorFor1(c_department, 'Completa el campo Departamento.');
    }else{
        setSuccessFor1(c_department);
    }

    if(c_department2Value === ''){
        setErrorFor1(c_department2, 'Completa el campo Departamento.');
    }else{
        setSuccessFor1(c_department2);
    }

    if(c_districtValue === ''){
        setErrorFor1(c_district, 'Completa el campo Distrito.');
    }else{
        setSuccessFor1(c_district);
    }

    if(c_addressValue === ''){
        setErrorFor1(c_address, 'Completa el campo Dirección.');
    }else{
        setSuccessFor1(c_address);
    }

    if(c_address2Value === ''){
        setErrorFor1(c_address2, 'Completa el campo Dirección.');
    }else{
        setSuccessFor1(c_address2);
    }

    if(c_email_addressValue === ''){
        setErrorFor(c_email_address, 'No puedes dejar el email en blanco.');
    }else if(!isEmail(c_email_addressValue)){
        setErrorFor(c_email_address, 'No ingreso un email válido.');
    }else{
        setSuccessFor(c_email_address);
    }
    
    if(c_phoneValue === ''){
        setErrorFor(c_phone, 'Completa el campo Celular.');
    }else{
        setSuccessFor(c_phone);
    }
}



function setErrorFor(input, message){
    const colmd6 = input.parentElement;
    const small = colmd6.querySelector('small');
    colmd6.className = 'col-md-6 error';
    small.innerText = message;
}



function setErrorFor1(input, message){
    const colmd12 = input.parentElement;
    const small = colmd12.querySelector('small');
    colmd12.className = 'col-md-12 error';
    small.innerText = message;
}

function setSuccessFor(input){
    const colmd6 = input.parentElement;
    colmd6.className = 'col-md-6 success';
}

function setSuccessFor1(input){
    const colmd12 = input.parentElement;
    colmd12.className = 'col-md-12 success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
