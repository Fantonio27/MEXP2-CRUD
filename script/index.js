const idContainer = document.querySelectorAll(".id");
const inputForm = document.querySelectorAll(".input-form");
const inputPassword = document.getElementById("password");
const passIcon = document.querySelector(".password-icon");
const address = document.getElementById("address");
const addressLength = document.getElementById("no");

const modalTitle = document.querySelector(".modal-title");
const modalP1 = document.querySelector(".modal-p1");
const modalIcon = document.querySelector(".add-icon");
const submitBtn = document.getElementById("submitbtn");

let pass;

function GetId(id, i) {
    const method = id == 0 ? 'Create' : 'Edit';

    idContainer[i].value = id;
    pass = true;

    modalTitle.textContent = `${method} User`;
    modalP1.textContent = `${method} your details in each fields.`;
    modalIcon.src = `./resources/icons/user-${method}.png`;
    submitBtn.value = id == 0 ? 'Save' : 'Update';
    submitBtn.name = id == 0 ? 'add' : 'edit';

    fetchInfo(id)
}

function Clear() {
    inputForm.forEach(element => {
        element.value = "";
    });

    addressLength.textContent = 0;
}

function Password() {
    if (pass) {
        inputPassword.type = "text";
        passIcon.src = `./resources/icons/hide-icon.png`;
        pass = false;
    } else {
        inputPassword.type = "password";
        passIcon.src = `./resources/icons/show-icon.png`;
        pass = true;
    }
}

function LengthAddress() {
    addressLength.textContent = address.value.length;
}

async function fetchInfo(id) {
    const response = await fetch(`./crud/search.php?id=${id}`);
    const data = await response.json();

    inputForm.forEach(element => {
        element.value = data == 0 ? "" : data[element.name];
    });

    LengthAddress()
}