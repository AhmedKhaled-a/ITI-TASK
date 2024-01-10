let tbody = document.getElementById('tbody')
let addMore = document.getElementById('addMore')

let users = []
if (localStorage.getItem('users') != null && localStorage.getItem('users') != []) {
    users = JSON.parse(localStorage.getItem('users'))
    displayUsers()
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

function dltAll() {
    users = [];
    localStorage.setItem('users', JSON.stringify(users));
    displayUsers();
}
function More() {
    location.assign('./form.html')
}