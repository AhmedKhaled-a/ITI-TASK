let userName = document.getElementById('userName')
let userAge = document.getElementById('userAge')
let form = document.getElementById('myform')



let users = []

if (localStorage.getItem('users') != null && localStorage.getItem('users') != []) {
    users = JSON.parse(localStorage.getItem('users'))
}


form.addEventListener('submit', function (e) {
    addUser()
    e.preventDefault();
})



function addUser() {

    let user = {
        name: userName.value,
        age: userAge.value
    }

    users.push(user)
    console.log(users);
    localStorage.setItem('users', JSON.stringify(users))
    location.assign('./form-table.html')
}





