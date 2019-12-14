console.log(localStorage.getItem("latestPoints"));
document.getElementById("score-value").textContent = localStorage.getItem("latestPoints");
document.getElementById("saved-points").value = localStorage.getItem("latestPoints");
console.log(document.getElementById("saved-points").value);

function validateForm() {
    let uName = document.forms["user-form"]["username"].value;
    let pass = document.forms["user-form"]["password"].value;
    if (pass == "" || uName == "") {
      alert("Name must be filled out");
      return false;
    }
}

//form onsubmit check true/false
//piazza 
