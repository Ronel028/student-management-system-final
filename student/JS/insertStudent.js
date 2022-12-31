
const studentForm = document.querySelector("#student_form")

// const studentID = document.querySelector('#studentNumber')
// const fname = document.querySelector('#fname')
// const mname = document.querySelector('#mname')
// const lname = document.querySelector('#lname')
// const gender = document.querySelector('#gender')
// const dateOfBirth = document.querySelector('#dateOfBirth')
// const cstatus = document.querySelector('#cstatus')
// const nationality = document.querySelector('#nationality')
// const student_photo = document.querySelector('#student_photo')
// const course = document.querySelector('#course')
// const phoneNumber = document.querySelector('#phoneNumber')
// const email = document.querySelector('#email')
// const street = document.querySelector('#street')
// const city = document.querySelector('#city')
// const stateProvince = document.querySelector('#stateProvince')
// const postalCode = document.querySelector('#postalCode')
// const gName = document.querySelector('#g_name')
// const gAddress = document.querySelector('#g_address')
// const gNumber = document.querySelector('#g_number')
// const gEmail = document.querySelector('#g_email')


const submitForm = (e) =>{
    e.preventDefault();

    // const formData = new FormData()

    // formData.append('studentNumber', studentID.value)
    // formData.append('fname', fname.value)
    // formData.append('mname', mname.value)
    // formData.append('lname', lname.value)
    // formData.append('gender', gender.value)
    // formData.append('dateOfBirth', dateOfBirth.value)
    // formData.append('cstatus', cstatus.value)
    // formData.append('nationality', nationality.value)
    // formData.append('student_photo', student_photo.files[0])
    // formData.append('course', course.value)
    // formData.append('phoneNumber', phoneNumber.value)
    // formData.append('email', email.value)
    // formData.append('street', street.value)
    // formData.append('city', city.value)
    // formData.append('stateProvince', stateProvince.value)
    // formData.append('postalCode', postalCode.value)
    // formData.append('g_name', gName.value)
    // formData.append('g_address', gAddress.value)
    // formData.append('g_number', gNumber.value)
    // formData.append('g_email', gEmail.value)

    fetch('./services/insertStudent.php', {
        method: 'POST',
        body: new FormData(studentForm) 
    }).then(res =>{
        return res.json()
    }).then(data =>{
        console.log(data)
    }).catch(error =>{
        console.log(error)
    })
}

studentForm.addEventListener('submit', submitForm);