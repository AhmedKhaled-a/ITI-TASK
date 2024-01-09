let userName = document.getElementById('userName')
let userAge = document.getElementById('userAge')
let tbody = document.getElementById('tbody')
let addMore = document.getElementById('addMore')

function More() {
    location.assign('./task3.html')
}

let users = []

// if (localStorage.getItem('Tasks') != null && localStorage.getItem('Tasks') != '') {
//     tasks = localStorage.getItem('Tasks').split(',')
//     displayTasks()
// }

if (localStorage.getItem('users') != null && localStorage.getItem('users') != '') {
    users = JSON.parse(localStorage.getItem('users'))
    displayUsers()
} 

function addUser() {
    if (validateUser() == true) {
        let user = {
            name: userName.value,
            age: userAge.value
        }
    
        users.push(user)
        localStorage.setItem('users', JSON.stringify(users))
        clr()
        location.assign('./task3Table.html')
    }else {
        alert('invalide User name')
    }
    
}


function clr() {
    userAge.value = ''
    userName.value = ''
}
function displayUsers() {
    let trs = '';
    for (let i = 0; i < users.length; i++) {
        trs += `
        <tr>
        <td>${users[i].name}</td>
        <td>${users[i].age}</td>
        <td> <button onclick="dlt(${i})" class="btn btn-danger">delete</button></td>
        </tr>
        `
    }
    tbody.innerHTML = trs;

}
function dlt(index) {
    users.splice(index, 1);
    localStorage.setItem('users', JSON.stringify(users));
    displayUsers();
}
function dltAll(){
    users = [];
    localStorage.setItem('users', JSON.stringify(users));
    displayUsers();
}

function validateUser() {
    var regex = /^[A-Z][a-z]{3,9}$/
    if (regex.test(userName.value) == true) {
        return true;
    } else {
        return false
    }
} 
