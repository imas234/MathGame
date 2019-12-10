console.log(localStorage.getItem("latestPoints"));
document.getElementById("score-value").textContent = localStorage.getItem("latestPoints");
document.getElementById("saved-points").value = localStorage.getItem("latestPoints");
console.log(document.getElementById("saved-points").value);