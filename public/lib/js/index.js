function register() {
    let uEmail = document.getElementById("email").value.trim();
    let uPass = document.getElementById("password").value.trim();
    let uPassC = document.getElementById("passwordC").value.trim();
    let uFname = document.getElementById("fname").value.trim();
    let uLname = document.getElementById("lname").value.trim();
    let uDOB = document.getElementById("DOB").value.trim();

    let emailError = document.getElementById("emailError");
    let fnameError = document.getElementById("fnameError");
    let lnameError = document.getElementById("lnameError");
    let dobError = document.getElementById("dobError");
    let passError = document.getElementById("passError");
    let passCError = document.getElementById("passCError");

    // Reset error messages
    emailError.classList.add("hidden");
    fnameError.classList.add("hidden");
    lnameError.classList.add("hidden");
    dobError.classList.add("hidden");
    passError.classList.add("hidden");
    passCError.classList.add("hidden");

    // Form validation
    let isValid = true;

    if (uEmail === '') {
        emailError.classList.remove("hidden");
        isValid = false;
    }

    if (uFname === '') {
        fnameError.classList.remove("hidden");
        isValid = false;
    }

    if (uLname === '') {
        lnameError.classList.remove("hidden");
        isValid = false;
    }

    if (uDOB === '') {
        dobError.classList.remove("hidden");
        isValid = false;
    }

    if (uPass === '') {
        passError.classList.remove("hidden");
        isValid = false;
    }

    if (uPass !== uPassC) {
        passCError.classList.remove("hidden");
        isValid = false;
    }

    if (!isValid) {
        return; // Stop form submission if validation fails
    }

    // AJAX request to handle registration
    $.ajax({
        type: "POST",
        url: './src/routes/router.php',
        data: {
            choice: "registerUser",
            email: uEmail,
            pass: uPass,
            fname: uFname,
            lname: uLname,
            DOB: uDOB
        },
        success: function(response) {
            let result = JSON.parse(response);
            if (result.status === 'success') {
                // document.getElementById("registerForm").reset();
                window.location.href = '/';
            } else {
                passError.innerText = result.message;
                passError.classList.remove("hidden");
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error:", status, error);
            passError.innerText = "An error occurred. Please try again later.";
            passError.classList.remove("hidden");
        }
    });
}

function login() {
    let uEmail = document.getElementById("email").value.trim();
    let uPass = document.getElementById("pass").value.trim();
    let emailError = document.getElementById("emailError");
    let passError = document.getElementById("passError");

    // Reset error messages
    emailError.classList.add("hidden");
    passError.classList.add("hidden");

    // Form validation
    let isValid = true;

    if (uEmail === '') {
        emailError.classList.remove("hidden");
        isValid = false;
    }

    if (uPass === '') {
        passError.classList.remove("hidden");
        isValid = false;
    }

    if (!isValid) {
        return; // Stop form submission if validation fails
    }

    // AJAX request to handle login
    $.ajax({
        type: "POST",
        url: './src/routes/router.php',
        data: {
            choice: "login",
            email: uEmail,
            pass: uPass
        },
        success: function(response) {
            let result = JSON.parse(response);
            if (result.status === 'success') {
                document.getElementById("email").value = "";
                document.getElementById("pass").value = "";
                window.location.href = '/home';
            } else {
                // Show error messages for invalid login
                passError.innerText = result.message;
                passError.classList.remove("hidden");
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error:", status, error);
            passError.innerText = "An error occurred. Please try again later.";
            passError.classList.remove("hidden");
        }
    });
}

function logout(){
    $.ajax({
        type: "POST",
        url: './src/routes/router.php',
        data: {
            choice: "logout"
        },
        success: function (response) {
            let result = JSON.parse(response);   
            if (result.status === 'success') {
                alert(result.message);
                window.location.href = '/';
            } else {
                alert(result.message);
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error);
        },
    });
}

function loadToDoList(){
    $.ajax({
        type: "POST",
        url: './src/routes/router.php',
        data: {
            choice: "loadToDoList"
        },
        success: function (response) {
            // alert('hi')
            const res = JSON.parse(response).response
            let el = ''
            let completedCount = 0;
            let remainingCount = 0;
            // console.log(JSON.parse(response))
            // console.log(res)
            $("#todos").empty();
            res.forEach(element => {
                if (element.completed) {
                    completedCount++;
                } else {
                    remainingCount++;
                }
               el += `
              <li class="flex items-center bg-gray-100 p-3 rounded-lg shadow-sm justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600 rounded focus:ring-0 " 
                                ${element.completed ? 'checked' : ''} 
                                onchange="updateTodoStatus(${element.id}, this.checked)" />
                        <input type="text" class="ml-2 text-gray-700 bg-transparent border-0 focus:ring-0 ${element.completed ? 'line-through underline-offset-2 text-grey-500' : ''}" 
                            value="${element.TODO}" 
                            onblur="updateToDo(${element.id}, this.value)" />
                    </div>
                    <div>
                        <span class="text-gray-700 ${element.completed ? 'line-through underline-offset-2 text-grey-500' : ''}">${element.DateToDo}</span>
                        <button onclick="deleteTodo(${element.id})" 
                                class="ml-2 bg-red-500 text-white px-2 py-1 rounded">
                            Delete
                        </button>
                    </div>
                </li>
               `
            });
            // console.log(el)
            $("#todos").append(el);   
            $("#remainingCount").text(remainingCount);
            $("#completedCount").text(completedCount);         
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error);
        },
    });
}

function deleteTodo(id) {
    if (confirm('Are you sure you want to delete this to-do?')) {
        $.ajax({
            type: "POST",
            url: './src/routes/router.php',
            data: {
                choice: "deleteTodo",
                id: id // Pass the unique UID of the to-do item
            },
            success: function (response) {
                const res = JSON.parse(response);
                if (res.status === 'success') {
                    alert('To-do deleted successfully.');
                    loadToDoList(); // Reload the to-do list after deletion
                } else {
                    alert('Error deleting to-do: ' + res.message);
                }
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    }
}

function addToDo(){
    let ut = document.getElementById("todo").value.trim();
    let ud = document.getElementById("dtd").value.trim();

    if(ut === '' || ud === '' ){
        alert("FILL ALL FIELDS");
    }
    else{
        $.ajax({
            type: "POST",
            url: './src/routes/router.php',
            data: {
                choice: "addToDoList",
                TODO: ut,
                DTD: ud
            },
            success: function (response) {
                let result = JSON.parse(response);                  
                if (result.status === 'success') {
                    document.getElementById("todo").value = "";
                    document.getElementById("dtd").value = "";
                    alert(result.message);
                    window.location.href = '/home';
                } else {
                    alert(result.message);
                }                
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    }    
}


function updateToDo(id, updatedValue) {
    $.ajax({
        type: "POST",
        url: './src/routes/router.php',
        data: {
            choice: "updateToDo",
            id: id,
            todo: updatedValue
        },
        success: function (response) {
            const result = JSON.parse(response);
            if (result.status === 'success') {
                alert('To-do updated successfully.');
                loadToDoList(); // Refresh the to-do list
            } else {
                console.error(result)
                alert('Failed to update the to-do.', result);
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error);
        }
    });
}


function updateTodoStatus(id, isCompleted) {
    $.ajax({
        type: "POST",
        url: './src/routes/router.php',
        data: {
            choice: "updateTodoStatus",
            id: id,
            completed: isCompleted ? 1 : 0
        },
        success: function(response) {
            const result = JSON.parse(response);
            if (result.status !== 'success') {
                alert("Error updating status: " + result.message);
            }
            loadToDoList();
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error:", status, error);
        }
    });
}